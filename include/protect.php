<?php

include($_SERVER['DOCUMENT_ROOT'].'/include/config.php');

function removeQueryStringParameter($url, $varname){
    $parsedUrl = parse_url($url);
    $query = array();
    if (isset($parsedUrl['query'])) {
        parse_str($parsedUrl['query'], $query);
        unset($query[$varname]);
    }
    $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
    $query = !empty($query) ? '?'. http_build_query($query) : '';
    return $query;
}

function check_token($key){
	$URL = App.'api/v2/auth.php?token='.$key;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	$http_status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	return $http_status_code;
}

if (isset($_GET['token'])) {
	if (check_token($_GET['token']) !== 202) {
		if (isset($_COOKIE)) {
			$user = json_decode($_COOKIE['default'], true);
			if (!empty($user['token'])) {
				if (check_token($user['token']) == 202) {
					$query = removeQueryStringParameter($_SERVER['REQUEST_URI'], 'token');
					if ($query) {
						header("Location: ".$query."&token=".$user['token']);
					}else{header("Location: ?token=".$user['token']);}
				}else{header("Location: /");}
			}else{header("Location: /");}
		}else{header("Location: /");}	
	}
}else if (!isset($_GET['token']) || empty($_GET['token'])) {
	if (isset($_COOKIE)) {
		$user = json_decode($_COOKIE['default'], true);
		if (!empty($user['token'])) {
			if (check_token($user['token']) == 202) {
				$query = removeQueryStringParameter($_SERVER['REQUEST_URI'], 'token');
				if ($query) {
					header("Location: ".$query."&token=".$user['token']);
				}else{header("Location: ?token=".$user['token']);}
			}else{header("Location: /");}
		}
	}else{header("Location: /");}
}else{header("Location: /");}
?>