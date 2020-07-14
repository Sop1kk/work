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
        <h3 class="top_1">Поздравляем! Вы успешно зарегистрировались.</h3>
        <br>
        <p class="next">Что дальше?</p>
    </div>
    <br>
    <div class="main-text">
        <img class="img-reg" src="<?=SITE_TEMPLATE_PATH?>\images/email.png" alt="">
        <div class="confirm">
            <h3 class="top_2">Подтвердите e-mail</h3>
            <br>
            <span class="text">Вам осталось подтвердить ваш e-mail, перейдите по ссылке из письма, которое мы Вам отправили.</span>
            <br>
            <br>
            <p class="text">Если письмо не пришло, проверьте папку “спам” или обратитесь в службу поддержки.</p>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
