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
print include_template('layout.php', ['content'=>$content]);
?>
