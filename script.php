<?php
	session_start();
	$pdf = $_FILES['pdf'];
	$pdf_name = $pdf['name'];
	$pdf_type = $pdf['type'];
	$pdf_tmp = $pdf['tmp_name'];

	$exp = explode('.', $pdf_name);
	$audio_name = $exp[0];
	

	$file = fopen($pdf_tmp, 'r');
	if (!$file) {
		echo 'file is not found';
	}
	else
	{
		if (is_readable($pdf_tmp)) {
			$string = file_get_contents($pdf_tmp);
			// $string = substr($string, 0,100);
			$string = urlencode($string);
			
			$mp3 = file_get_contents("http://api.voicerss.org/?key=9db3850ca6384f09814065a5014d7b6c&hl=en-us&src=$string");
			$audio_name_time = time().$audio_name.'.mp3';
			$get = file_put_contents('audio/'.$audio_name_time, $mp3);
			if (!empty($get)) {
				// echo "successfull";
				$_SESSION['filename'] = $audio_name_time;
				header("location:http://localhost/t2s");
				
			}
			else{
				echo "unsuccessfull";
			}
		}
		else
		{
			echo "no";
		}
	}

?>