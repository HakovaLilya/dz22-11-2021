<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/include/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='true' name='HandheldFriendly'/>
    <meta content='width' name='MobileOptimized'/>
    <meta content='yes' name='apple-mobile-web-app-capable'/>
    <link href="/assets/css/style.css" rel="stylesheet">
    <script src="/assets/js/script.js"></script>
    <?echo getStyleForDayTime()?>
    <title>Title</title>
</head>
<body>


<header class="header">
    <img src="/assets/img/logo.png" class="header__logo">
    <div class="header__menu">
        <a href="/index.php#about-me">Обо мне</a>
        <a href="/index.php#news-line">Новости одной строкой</a>
        <a href="/index.php#news-tile">Новости плиткой</a>
        <a href="/homeworks/arrays/index.php">Массивы</a>
    </div>
</header>

<main class="main">