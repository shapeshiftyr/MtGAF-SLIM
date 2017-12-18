<?php
$app->get('/', '\App\Controllers\MainController:home');

$app->get('/{card}', '\App\Controllers\MainController:card');

$app->get('/{set}/{card}', '\App\Controllers\MainController:setCard');

$app->get('/{set}/{card}/{lang}', '\App\Controllers\MainController:setCardLang');