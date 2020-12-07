<?php
$is_auth=rand(0,1);
$user_name='Владимир';
$page_name='readme: популярное';
function text($contents, $quantity=300)
{
    $currentLength=strlen($contents);
    if ($currentLength > $quantity) {
    $words=explode(" ", $contents);
    $result='';
        foreach ($words as $word) {
            if (strlen($result.' '.$word)<=$quantity) {
            $result=$result.$word.' ';
            } else {
            return $result.'...'.'<a class="post-text__more-link" href="#" style="color: #ffffff">Читать далее</a>';
            }
        }
    } else {
    return $contents;
    }
}
function time_print($time)
{
      //если до текущего времени прошло меньше 60 минут
      if ($time_now-$time<60){
        $result=$time_now-$time
        return $result.' минут назад';
      }
      //если до текущего времени прошло больше 60 минут, но меньше 24 часов
      elseif ($time_now-$time>60 && $time_now-$time<24 часа) {
        $result=
        return $result.' часов назад';
      }
      //если до текущего времени прошло больше 24 часов, но меньше 7 дней
      elseif ($time_now-$time>24 часов && $time_now-$time<7 дней) {
        $result=
        return $result.' дней назад';
      }
      //если до текущего времени прошло больше 7 дней, но меньше 5 недель
      elseif ($time_now-$time>7 дней && $time_now-$time<5 недель) {
        $result=
        return $result.' недель назад';
      }
      //если до текущего времени прошло больше 5 недель
      elseif ($time_now-$time>5 недель) {
        $result=
        return $result.' месяцев назад';
      }
}
$posts = [
[
'title'=>'Цитата',
'type'=>'post-quote',
'content'=>'Мы в жизни любим только раз, а после ищем лишь похожих',
'user'=>'Лариса',
'avatar'=>'userpic-larisa-small.jpg',
],
[
'title'=>'Игра престолов',
'type'=>'post-text',
'content'=>'Не могу дождаться начала финального сезона своего любимого сериала!',
'user'=>'Владик',
'avatar'=>'userpic.jpg',
],
[
'title'=>'Наконец, обработал фотки!',
'type'=>'post-photo',
'content'=>'rock-medium.jpg',
'user'=>'Виктор',
'avatar'=>'userpic-mark.jpg',
],
[
'title'=>'Моя мечта',
'type'=>'post-photo',
'content'=>'coast-medium.jpg',
'user'=>'Лариса',
'avatar'=>'userpic-larisa-small.jpg',
],
[
'title'=>'Лучшие курсы',
'type'=>'post-link',
'content'=>'www.htmlacademy.ru',
'user'=>'Владик',
'avatar'=>'userpic.jpg',
],
];
include 'helpers.php';
$content=include_template('main.php', ['posts'=>$posts]);
$layout_page=include_template('layout.php', ['content'=>$content, 'user_name'=>$user_name, 'page_name'=>$page_name]);
print $layout_page;
?>
