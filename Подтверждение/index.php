<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Успешная Регистрация");
$APPLICATION->SetPageProperty("title", "Успешная Регистрация");
$APPLICATION->SetPageProperty("keywords", "Успешная Регистрация");
$APPLICATION->SetPageProperty("description", "Успешная Регистрация");
$APPLICATION->SetTitle("Успешная регистрация");
?>
<link href="../../auth/registration/style.css" rel="stylesheet" type="text/css">

<div class="container">
    <div class="success-reg">
        <h3 class="top">Поздравляем! Вы успешно зарегистрировались.</h3>
        <p class="next">Что дальше?</p>
    </div>
    <div class="main-text">
        <img class="img-reg" src="<?=SITE_TEMPLATE_PATH?>\images/email.png" alt="">
        <div class="confirm">
            <h3 class="top">Подтвердите e-mail</h3>
            <span class="text">Вам осталось подтвердить ваш e-mail, перейдите по ссылке из письма, которое мы Вам отправили.</span>
            <p class="text">Если письмо не пришло, проверьте папку “спам” или обратитесь в службу поддержки.</p>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
