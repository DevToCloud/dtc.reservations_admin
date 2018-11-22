<?php
	session_start();

	require("includes/mysqli/MysqliDb.php");

	require("includes/f_encdec.php");

	DEFINE("ROLES", array(
						0 => "Super Administrator",
						1 => "Administrator",
						2 => "Customer"
						));
	$db = null;
	try{
		/*
		$db = new MysqliDb(Array (
                'host' => 'agrocirhmo.ddns.net',
                'username' => 'root', 
                'password' => '@dm1nSQL',
                'db'=> 'devtocloud_dmf',
                'port' => 6330));
		*/
		
		$db = new MysqliDb('localhost', 'root', '@dminSQL', 'dmf');
		
		$db->Where("id = 1");
		$_SESSION["dmfs"] = $db->getOne("users");
		if(isset($_REQUEST["controller"])){
			if(strlen(trim($_REQUEST["controller"])) > 0){
				//if(strpos($_REQUEST["controller"], "/"))
				DEFINE("SITE_TITLE", strtoupper(str_replace("/"," > ",$_REQUEST["controller"])));
			}else{
				DEFINE("SITE_TITLE", "HOME");
			}
		}else{
			DEFINE("SITE_TITLE", "HOME");
		}

		// Reservations
		// $db->Where("status < 2");
		$db->where("event_date IS NULL");
		$reservation_total = $db->getOne("reservations", "COUNT(id) AS 'total'");
		$db->Where("event_date IS NULL");
		$reservation_incompletes = $db->getOne("reservations", "COUNT(id) AS 'total'");

		$reservation_status = "success";

		if($reservation_total["total"] > 0 && $reservation_incompletes["total"] > 0){
			if($reservation_incompletes["total"] >= ($reservation_total["total"] / 2)){ $reservation_status = "danger"; }
		}

		// Events
		$db->Where("event_date IS NOT NULL");
		$events_total = $db->getOne("reservations", "COUNT(id) AS 'total'");
		$db->Where("status < 2");
		$db->Where("event_date IS NOT NULL");
		$events_incompletes = $db->getOne("reservations", "COUNT(id) AS 'total'");

		$events_status = "success";

		if($events_total["total"] > 0 && $events_incompletes["total"] > 0){
			if($events_incompletes["total"] >= ($events_total["total"] / 2)){ $events_status = "danger"; }
		}



		require("views/_shared/_layout.php");
	}catch(Exception $e){
		$eMSSG = $e->getMessage();
		require("views/error500.php");
	}
?>