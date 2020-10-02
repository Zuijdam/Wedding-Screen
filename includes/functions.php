<?php

function toNiceTimeElapsed($date){
	include 'translations.php';
	$sec = time() - strtotime($date);
	if(date("Ymd") == date("Ymd", strtotime($date))){
	    if($sec < 60) {
	      /* if less than a minute, return seconds */
	      return translation_just;
	    }
	    else if($sec < 60*60) {
		  /* if less than an hour, return minutes */
	      return intval($sec / 60) . " " . translation_minutes_ago;
	    }
	    else if($sec < 24*60*60) {
	      /* if less than a day, return hours */
	      return intval($sec / 60 / 60) . " " . translation_hours_ago;
	    }
	}
	elseif(date("Ymd", strtotime("-1 days")) == date("Ymd", strtotime($date))){
		return "gisteren ".date("H:i", strtotime($date));
	}
	else{
		return intval($sec / 60 / 60 / 24) . translation_days_ago;
	}
}
?>
