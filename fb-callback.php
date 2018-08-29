<?php

require_once "config.php"; 

try{
     $accessToken = $helper->getAccessToken();
}
catch (\Facebook\Exceptions\FacebookResponseException $e ){
    echo "Response Exception: ".$e->getMessage();
    exit();
}
catch (\Facebook\Exceptions\FacebookResponseException $e ){
    echo "SDK Exception :" .$e->getMessage();
    exit();
}
if(!$accessToken){
    header('Location:login.php');
    exit();
}
$oAuth2Client = $FB->getOAuth2Client();
if(!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

    $response = $FB->get("/me?fields=id,first_name,last_name,email,picture.type(large)", $accessToken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;
    $id = $_SESSION['userData']['id'];
    $First_name = $_SESSION['userData']['first_name'];
    $Last_name =  $_SESSION['userData']['last_name'];
    $Email = $_SESSION['userData']['email'];
    $pic = $_SESSION['userData']['picture']['url'];
    $ConnectionString = mysqli_connect("localhost","root","","test");//connecting to localhost
    $NewUserQuery = $ConnectionString->prepare("INSERT into FBUser(first_name,last_name,email,picture)
    values(?,?,?,?)");
    $NewUserQuery->bind_param("sssb",$First_name,$Last_name,$Email, $pic);
    if($NewUserQuery->execute()==true){
    header('Location:index.php');
    }
    exit();
    // var_dump($userData);
?>