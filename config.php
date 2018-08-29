<?php

session_start();
require_once 'Facebook/autoload.php';

$FB = new \Facebook\Facebook([
    'app_id' => '2145623249041883',
    'app_secret' =>'4abe3942670da93f710a93f4c67c3ba9',
    'default_graph_version' => 'v2.10'
]); 

    $helper = $FB->getRedirectLoginHelper();
?>