
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwiiag8";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
die("Connection failed: " . $conexao->connect_error);
}
?>