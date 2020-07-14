<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Успешная Регистрация");
$APPLICATION->SetPageProperty("title", "Успешная Регистрация");
$APPLICATION->SetPageProperty("keywords", "Успешная Регистрация");
$APPLICATION->SetPageProperty("description", "Успешная Регистрация");
$APPLICATION->SetTitle("Успешная регистрация");
?>
    
      <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.confirmation",
	"m_template",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONFIRM_CODE" => "confirm_code",
		"LOGIN" => "login",
		"USER_ID" => "confirm_user_id"
	)
);?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>