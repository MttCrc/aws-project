<?php
// Effettua la connessione al db
$ip = "localhost";
$db_name = "croce_progetto_cloud_computing";
$password = "";
$username = "root";
$connection = new mysqli($ip, $username, $password, $db_name);
$response = [];

if ($connection->connect_error) {
  $response['message'] = 'Connection failed';
  http_response_code(400);
  echo json_encode($response);
  die;
}

return $connection;
?>