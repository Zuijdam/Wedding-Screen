<?php
function toNiceTimeElapsed($date){
	$sec = time() - strtotime($date);
	if(date("Ymd") == date("Ymd", strtotime($date))){
	    if($sec < 60) {
	      /* if less than a minute, return seconds */
	      return "zojuist";
	    }
	    else if($sec < 60*60) {
	      /* if less than an hour, return minutes */
	      return intval($sec / 60) . " minuten geleden";
	    }
	    else if($sec < 24*60*60) {
	      /* if less than a day, return hours */
	      return intval($sec / 60 / 60) . " uren geleden";
	    }
	}
	elseif(date("Ymd", strtotime("-1 days")) == date("Ymd", strtotime($date))){
		return "gisteren ".date("H:i", strtotime($date));
	}
	else{
		return intval($sec / 60 / 60 / 24) . " dagen geleden";
	}
}
?>
