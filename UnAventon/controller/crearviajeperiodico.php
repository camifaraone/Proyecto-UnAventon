<?php

	require_once "../model/db.php";
	require_once "../model/viajeocasional.php";

	function minutesFromHours($number){
    return ($number - floor($number))*60;
  }

	function stringToInterval($string){
    	return new DateInterval("PT".floor(intval($string))."H".floor(minutesFromHours($string))."M");
  	}

  	  function addDate($date, $interval){
    $d = clone $date;
    $d->add($interval);
    return $d;
  }

	function checkTripDates($dateString1, $interval1, $dateString2, $interval2){
    	$startTime = DateTime::createFromFormat( "Y-m-d H:i", $dateString1);
    	$chkStartTime = DateTime::createFromFormat("Y-m-d H:i", $dateString2);
    	$interval1 = stringToInterval($interval1);
    	$interval2 = stringToInterval($interval2);
    	$endTime = addDate($startTime, $interval1);
    	$chkEndTime = addDate($chkStartTime, $interval2);
   
    	return (($chkEndTime < $startTime) || ($chkStartTime > $endTime));
  	}

  	function isPendingTrip($date, $time){
  		return (time() < strtotime($date.' '.$time.':00'));
  	}
	
	$user_id = $_GET['idautoincremental'];
	$inicio = $_POST['fechainicio'];
	$fin = $_POST['fechafin'];
	$duracion = $_POST['duracion'];
	$hora = $_POST['horasalida'];
	$precio = $_POST['preciototal'];
	$asientos = $_POST['cantidadasientos'];
	$origen = $_POST['origen'];
	$destino = $_POST['destino'];
	$observaciones = $_POST['observaciones'];
	$vehiculo = $_POST['vehiculo'];
	$dias = array(
		1 => isset($_POST['mon']),
		2 => isset($_POST['tue']),
		3 => isset($_POST['wed']),
		4 => isset($_POST['thu']),
		5 => isset($_POST['fri']),
		6 => isset($_POST['sat']),
		7 => isset($_POST['sun'])
	);

	  $otherTrips = array();
	  $query = $conn->prepare("SELECT * FROM viaje WHERE idautoincremental='$user_id'");
	  $query->execute();
	  $result = $query->fetchAll();
	  foreach ($result as $trip){
	  		if(isPendingTrip($trip[0]['fecha'], $trip[0]['hssalida'])) array_push($otherTrips, $trip);
	    }

	  $query = $conn->prepare("SELECT * FROM estadopostulacion WHERE idautoincremental='$user_id' AND rechazado!=1");
	  $query->execute();
	  $result = $query->fetchAll();
	  foreach($result as $request){
	      $query = $conn->prepare("SELECT * FROM viaje WHERE idviaje='".$request["idviaje"]."'");
	      $query->execute();
	      $trip = $query->fetchAll();
	      if(isPendingTrip($trip[0]['fecha'], $trip[0]['hssalida'])) array_push($otherTrips, $trip);
	    }

	$trips = array();
	$start = strtotime($inicio);
	$days = (strtotime($fin) - strtotime($inicio))/60/60/24;
	for($i = 0; $i <= $days; $i++){
		$date = $start + ($i*60*60*24);
		$dayOfWeek = date('N', $date);
		if($dias[$dayOfWeek]){
			array_push($trips, $date);
		}
	}

	foreach ($trips as $trip) {
		foreach ($otherTrips as $otherTrip) {
			$dateStr = date('Y-m-d', $trip).' '.$hora;
			$dateStr2 = $otherTrip[0]['fecha'].' '.$otherTrip[0]['hssalida'];
			$dur1 = explode(':', $duracion);
			$dur2 = explode(':', $otherTrip[0]['duracion']);
			$d1 = $dur1[0] + $dur1[1]/60;
			$d2 = $dur2[0] + $dur2[1]/60;
			if(!checkTripDates($dateStr, $d1, $dateStr2, $d2)){
				header('Location: /UnAventon/controller/viajeperiodico.php?idautoincremental='.$user_id.'&date_error');
				exit;
			}
		}
	}

	foreach ($trips as $trip) {
		newtrip(date('Y-m-d', $trip),$precio,$duracion,$hora,$asientos,$observaciones,$origen,$destino,$vehiculo,$user_id,0);
	}

	header('Location: /UnAventon/controller/viajeperiodico.php?idautoincremental='.$user_id.'&sucess');
	
?>