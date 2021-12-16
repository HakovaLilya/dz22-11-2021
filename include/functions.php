<?php
function getStyleForDayTime () {
    $hour = (int)date("G");
    if (($hour >= 8) && ($hour < 20)) {
        return '<link href="/assets/css/daily.css" rel="stylesheet">';
    } else {
        return '<link href="/assets/css/nightly.css" rel="stylesheet">';
    }
}

function beautyParagraphAboutMe ($textAboutMe) {
    $result = '';
    $textAr = explode('.', $textAboutMe);
    foreach ($textAr as $key => $value) {
        if ($key == 0) {
            $result .= '<span class="colourful-text-first">' . $value . '</span>.';
        } else {
            $result .= $value . '.';
        }
    }
    return $result;
}

function beautyParagraphMainReview($textReview) {
    $result = '';
    $textReviewAr = explode(' ', $textReview);
    foreach ($textReviewAr as $key => $value) {
        if ($key%2 == 0) {
            $result .= '<span class="colourful-text-second">' . $value . '</span> ';
        } else {
            $result .= '<span class="colourful-text-third">' . $value . '</span> ';
        }
    }
    return $result;
}

function getIntervalByBirthday($birthday) {
    $result = '';
    $now = new DateTime(); // текущее время на сервере
    $date = DateTime::createFromFormat("d.m.Y", $_GET['birthday']); // задаем дату в любом формате
    $interval = $now->diff($date); // получаем разницу в виде объекта DateInterval
    $result .= $interval->y . " лет и "; // кол-во лет
    $result .= $interval->m . " месяцев и "; // кол-во лет
    $result .= $interval->d . " дней."; // кол-во дней
    return $result;
}