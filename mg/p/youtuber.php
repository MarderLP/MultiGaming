<?php
	$youtuber = array("marder007006005","teiwazlp","damakash","nephtisgaming","mgNB3rZ3rK3r","tomme90201","mgNKater");
	sort($youtuber);
	for($i=0;$i<count($youtuber);$i++){
		echo '<iframe frameborder="0" id="youtuber" scrolling="no" src="http://www.youtube.com/subscribe_widget?p='.$youtuber[$i].'"></iframe>';
	}
?>