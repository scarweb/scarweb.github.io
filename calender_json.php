<?php
/**
 * Created by Sven Wegerhoff
 * Date: 09.02.2016
 * Time: 07:35
 */

$url = 'https://calendar.google.com/calendar/ical/sc.aufruhr.kalender%40gmail.com/private-569d1b7d3f80f9bf4ba21e5e40ea93f0/basic.ics';
$kalender_json = 'kalender.json';

function ics2datum($time){
    $dateTime = new DateTime($time, new DateTimeZone('Europe/Berlin'));
    return $dateTime->format("d.m.Y H:i:s");
}

function ics_event_to_text($timestart, $timeend, $subject ){
    $evtdata=array();
    $dateTime = new DateTime($timestart, new DateTimeZone('Europe/Berlin'));
    $evtdata['datum'] =  $dateTime->format("d.m.Y");
    $evtdata['start'] =  $dateTime->format("H:i:s");
    $dateTime = new DateTime($timeend, new DateTimeZone('Europe/Berlin'));
    $evtdata['end'] =   $dateTime->format("H:i:s");
    $evtdata['text'] =  $subject;
    return $evtdata;
}

function icsToArray($paramUrl) {
    $icsFile = file_get_contents($paramUrl);

    $icsData = explode("BEGIN:", $icsFile);

    foreach($icsData as $key => $value) {
        $icsDatesMeta[$key] = explode("\n", $value);
    }

    foreach($icsDatesMeta as $key => $value) {
        foreach($value as $subKey => $subValue) {
            if ($subValue != "") {
                if ($key != 0 && $subKey == 0) {
                    $icsDates[$key]["BEGIN"] = $subValue;
                } else {
                    $subValueArr = explode(":", $subValue, 2);
                    $icsDates[$key][$subValueArr[0]] = $subValueArr[1];
                }
            }
        }
    }

    return $icsDates;
}

if ( file_exists($kalender_json) && (time()-@filemtime($kalender_json) < 24 * 3600) ){
    // file older than 24 hours
    $JSON_TERMINE = file_get_contents($kalender_json);
} else {

    $events = array_reverse( array_slice( icsToArray($url), 1, 8 ) );
    $termine=array();

    foreach ($events as $e) {
        $evt = ics_event_to_text($e['DTSTART'], $e['DTEND'], $e['SUMMARY']);

        $o = new stdClass();
        $o->datum = $evt['datum'];
        $o->start = $evt['start'];
        $o->ende = $evt['end'];
        $o->summary = $evt['text'];
        $termine[] = $o;

    }
    $JSON_TERMINE = '{ "termine": ' .  json_encode($termine) . '}';
    file_put_contents('kalender.json', $JSON_TERMINE);
}

header('Content-Type: application/json');
die($JSON_TERMINE);
