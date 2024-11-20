<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>
<?
$connection = Bitrix\Main\Application::getConnection();

$sql = "SELECT payment_data FROM bx_api_payments";

$result = $connection->query($sql);

echo $result->fetch();



?>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>