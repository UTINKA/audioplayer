<?php
	foreach (glob("audios/*.mp3") as $filename) 
	{
		echo $filename."(:)";
	}
?>