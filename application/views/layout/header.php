<!DOCTYPE html>
<html>
<head>
    <title>Студия танцевального исскуства EvolutionDance</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta http-equiv="Description" content="Студия танцевального исскуства EvolutionDance">
    <meta http-equiv="Keywords" content="уроки танцев, танци, научится танцевать">
    <link rel="icon" href="<?=base_url()?>img/pic/logo_map.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url()?>img/pic/logo_map.png" type="image/x-icon">
	<script src="<?=base_url();?>js/jquery.js"></script>
	<script src="<?=base_url();?>js/script.js"></script>
    <script src="<?=base_url();?>js/maskedinput.js" type="text/javascript"></script>
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>

<body <?if (isset($preload)) echo $preload;?>>

	<header class="header">
        <div class="header_cont">
            <div class="header_left">
                <a href="<?=base_url()?>main" ><img class="brand" src="<?=base_url()?>img/pic/logo.png"></a>
            </div>
            <div class="header_center">
            </div>
            <div class="header_right">
                <a href="<?=base_url()?>main/contact" class="address"> г. Днепропетровск<br>
                     ул. Исполкомовская, 24, 5 этаж<br>
                     +38 (066) 43-484-43<br>
                     +38 (093) 010-98-43
                 </a>
            </div>
        </div>
    </header><!-- .header-->
    <div class="wrapper">
        <div class="menu">
            <ul id="nav">
                <li class="br<?=$a_index?>"><a href="<?=base_url()?>">О нас</a>
                <li class="bl br<?=$a_instructors?>"><a href="<?=base_url()?>main/instructors">Педагоги</a>
                <li class="bl br<?=$a_gallery?>"><a href="<?=base_url()?>main/gallery">Галерея</a>
                <li class="bl br<?=$a_news?>"><a href="<?=base_url()?>main/news">Новости</a>
                <li class="bl br<?=$a_articles?>"><a href="<?=base_url()?>main/articles">Статьи</a>
                <li class="bl br<?=$a_shedule?>"><a href="<?=base_url()?>main/shedule">Расписание</a>
                <li class="bl<?=$a_contact?>"><a href="<?=base_url()?>main/contact">Контакты</a>
            </ul>
        </div>
        <div id="show">