<?php
	set_time_limit(0);
	/*$url = array();
	$file = fopen("/var/www/duration/part3.txt","r");
	echo file_get_contents($file);
	while(! feof($file))
	{
		$url[] = fgetcsv($file);
	}
	fclose($file);
	foreach($url[0] as $k => $v)
	{*/
		
	$section = file_get_contents('/var/www/duration/music_full_tack.txt');
	
	$data = explode("\n",$section);
	foreach($data as $k => $v){
		$video_duration = get_video_duration($v);
		echo $output = "$v &emsp; $video_duration<br>";
		$output = "$v \t $video_duration\n";
		filewrite($output);
	}
	function get_video_duration($video_url)
	{	
		extension_loaded('ffmpeg');
	  	$ffmpegInstance = new ffmpeg_movie($video_url);
		if($ffmpegInstance)
		{
			$duration_temp = $ffmpegInstance->getDuration();
			$duration = gmdate("i:s",$duration_temp);
			return $duration;
		}
		else
		{
			return 0;
		}
	}
	
	function filewrite($output){		
		$filepath = '/var/www/duration/log.txt';
		$file = fopen($filepath, "a+") or die("Unable to open file!");
		chmod($filepath, 0777);
		fwrite($file,$output);
		fclose($file);
	}
?>
