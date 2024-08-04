<?php
$firebaseConfig = array(
    "apiKey" => "",
    "authDomain" => "",
    "projectId" => "",
    "storageBucket" => "",
    "messagingSenderId" => "",
    "appId" => "",
    "measurementId" => ""
);

header('Content-Type: application/json');
echo json_encode($firebaseConfig);
?>