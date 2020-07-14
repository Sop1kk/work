<html>

<head>
    <meta charset="UTF-8">
    <title>Меню Аптекаплюс</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css">
    <?
        if(date("l") == "Monday")
        $array= file("/var/www/vhosts/aptekaplus.kz/eda.aptekaplus.kz/Canteen/Monday.txt");
        
        if(date("l") == "Tuesday")
        $array= file("/var/www/vhosts/aptekaplus.kz/eda.aptekaplus.kz/Canteen/Tuesday.txt");
            
        if(date("l") == "Wednesday")
        $array= file("/var/www/vhosts/aptekaplus.kz/eda.aptekaplus.kz/Canteen/Wednesday.txt");
                
        if(date("l") == "Thursday")
        $array= file("/var/www/vhosts/aptekaplus.kz/eda.aptekaplus.kz/Canteen/Thursday.txt");
                
        if(date("l") == "Friday")
        $array= file("/var/www/vhosts/aptekaplus.kz/eda.aptekaplus.kz/Canteen/Friday.txt");
                
        if(date("l") == "Saturday")
        $array= file("/var/www/vhosts/aptekaplus.kz/eda.aptekaplus.kz/Canteen/Saturday.txt");
                
        if(date("l") == "Sunday")
        $array= file("/var/www/vhosts/aptekaplus.kz/eda.aptekaplus.kz/Canteen/Sunday.txt");
        ?>
    <?
function rus_date() {
// Перевод
 $translate = array(
 "am" => "дп",
 "pm" => "пп",
 "AM" => "ДП",
 "PM" => "ПП",
 "Monday" => "Понедельник",
 "Mon" => "Пн",
 "Tuesday" => "Вторник",
 "Tue" => "Вт",
 "Wednesday" => "Среда",
 "Wed" => "Ср",
 "Thursday" => "Четверг",
 "Thu" => "Чт",
 "Friday" => "Пятница",
 "Fri" => "Пт",
 "Saturday" => "Суббота",
 "Sat" => "Сб",
 "Sunday" => "Воскресенье",
 "Sun" => "Вс",
 "January" => "Января",
 "Jan" => "Янв",
 "February" => "Февраля",
 "Feb" => "Фев",
 "March" => "Марта",
 "Mar" => "Мар",
 "April" => "Апреля",
 "Apr" => "Апр",
 "May" => "Мая",
 "May" => "Мая",
 "June" => "Июня",
 "Jun" => "Июн",
 "July" => "Июля",
 "Jul" => "Июл",
 "August" => "Августа",
 "Aug" => "Авг",
 "September" => "Сентября",
 "Sep" => "Сен",
 "October" => "Октября",
 "Oct" => "Окт",
 "November" => "Ноября",
 "Nov" => "Ноя",
 "December" => "Декабря",
 "Dec" => "Дек",
 "st" => "",
 "nd" => "",
 "rd" => "",
 "th" => ""
 );
 // если передали дату, то переводим ее
 if (func_num_args() > 1) {
 $timestamp = func_get_arg(1);
 return strtr(date(func_get_arg(0), $timestamp), $translate);
 } else {
// иначе текущую дату
 return strtr(date(func_get_arg(0)), $translate);
 }
 }
?>

</head>

<body>
    <div class="common">
        <div class="date"><?php
 echo rus_date("l, jS F");
?>

        </div>
        <div class="menu">
            <div class="dinner1">
                <div class="time">
                    <div class="title">Обед</div>
                    <div class="time1">(12:00-15:00)</div>
                </div>
                <div class="php">
                    <div>Основное блюдо:
                    </div>
                    <div class="echo">
                        <? echo $array[0];?>
                    </div>
                </div>
                <div class="php">
                    <div>Гарнир:</div>
                    <div class="echo">
                        <? echo $array[1];?>
                    </div>
                </div>
                <div class="php">
                    <div>Салат:</div>
                    <div class="echo">
                        <? echo $array[2];?>
                    </div>
                </div>
            </div>
            <div class="dinner2">
                <div class="time">
                    <div class="title">Ужин</div>
                    <div class="time1">(17:00-19:00)</div>
                </div>

                <div class="php">
                    <div>Основное блюдо:</div>
                    <div class="echo">
                        <? echo $array[3];?>
                    </div>
                </div>
                <div class="php">
                    <div>Гарнир:</div>
                    <div class="echo">
                        <? echo $array[4];?>
                    </div>
                </div>
                <div class="php">
                    <div>Салат:</div>
                    <div class="echo">
                        <? echo $array[5];?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
