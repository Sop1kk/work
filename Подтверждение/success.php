<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Успешная Регистрация");
$APPLICATION->SetPageProperty("title", "Успешная Регистрация");
$APPLICATION->SetPageProperty("keywords", "Успешная Регистрация");
$APPLICATION->SetPageProperty("description", "Успешная Регистрация");
$APPLICATION->SetTitle("Успешная регистрация");
?>




<div class="mainStatPage">
	
  <div class="mainStatPageContent">
    <div class="confirmText">
    
  <p class="ctt1">ПОЗДРАВЛЯЕМ! ВЫ УСПЕШНО ЗАРЕГИСТРИРОВАЛИСЬ.</p>
  
  <p class="ctt2">ЧТО ДАЛЬШЕ?</p>
  
</div>
   
    <div class="chainImages">
      <hr class="hr2"/>
      <hr align="left" size="5" color="#f0f0f0" class="hr1"/>
      <div class="chainImage">
        <p class="cttt"></p>
        <span class="cellborder">
          <img src="<?=SITE_TEMPLATE_PATH?>\images/email.png">
        </span>
        <p class="cttm">ПОДТВЕРДИТЕ EMAIL</p>
        <p class="cttb">Вам осталось подтвердить ваш Email, перейдите по ссылке из письма, которое мы Вам отправили.</p>
        <p class="cttb" style="font-size:11px;">Если письмо не пришло, проверьте спам или обратитесь в службу поддрежки.</p>
      </div>
      <hr align="center" size="4" color="#f0f0f0" class="hr1"/>
    </div>

    <br>
    <br>	
  </div>
</div>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>