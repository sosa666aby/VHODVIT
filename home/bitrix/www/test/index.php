<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("TESTOVAYA STRANITSA");
?>

<?
   
   print_r ($USER->Fetch());

   
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>