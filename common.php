<?php


	function getTimeInWords($date_para)
	{
		$words='';
		$seconds_ago = (time() - strtotime($date_para));

		if ($seconds_ago >= 31536000) {
		    $words=" " . intval($seconds_ago / 31536000) . " years ago";
		} elseif ($seconds_ago >= 2419200) {
		    echo " " . intval($seconds_ago / 2419200) . " months ago";
		} elseif ($seconds_ago >= 86400) {
		    $words=" " . intval($seconds_ago / 86400) . " days ago";
		} elseif ($seconds_ago >= 3600) {
		    $words=" " . intval($seconds_ago / 3600) . " hours ago";
		} elseif ($seconds_ago >= 60) {
		    $words=" " . intval($seconds_ago / 60) . " minutes ago";
		} else {
		    $words="less than a minute ago";
		}

		return $words;
	}

	function getVariableValue($variable,$default)
	{
		$return_value='';
		if(isset($_REQUEST[$variable]))
		{
			$return_value=$_REQUEST[$variable];
		}
		else
		{
			$return_value=$default;
		}
		
		return $return_value;
	}


	function replace_spaces($string) {
	    $string = str_replace(" ", "-", $string);
	    return $string;
	}

       function getDotsAfter($str,$chars)
	{
		$final='';
		if(strlen($str) > $chars)
		{
				$final=substr($str,0,$chars)."...";
		}
		else
		{
			$final=$str;
		}
		
		return $final;
	}

?>