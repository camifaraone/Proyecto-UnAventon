<?php
 function minutesFromHours($number){
    return ($number - floor($number))*60;
  }
  function addDate($date, $interval){
    $d = clone $date;
    $d->add($interval);
    return $d;
  }
  function dateToTime($date){
    return strtotime($date->format("d-m-Y H:i"));
  }
  function stringToInterval($string){
    return new DateInterval("PT".floor(intval($string))."H".floor(minutesFromHours($string))."M");
  }
  
  #Retorna true si las fecha NO se solapan
  function checkTripDates($dateString1, $interval1, $dateString2, $interval2){
    $startTime = DateTime::createFromFormat( "Y-m-d H:i:s", $dateString1);
    $chkStartTime = DateTime::createFromFormat("Y-m-d H:i:s", $dateString2);
    $interval1 = stringToInterval($interval1);
    $interval2 = stringToInterval($interval2);
    $endTime = addDate($startTime, $interval1);
    $chkEndTime = addDate($chkStartTime, $interval2);
   
    return (($chkEndTime < $startTime) || ($chkStartTime > $endTime));
  }
?>