<?php

use yii\bootstrap4\Nav;

echo Nav::widget([
    'options' => ['class' => 'navbar-nav d-flex flex-column nav-pills'],
    'items' => [
        [
            "label" => "Dashboard",
            "url" => ["site/index"],
        ],
        [
            "label" => "Video",
            "url" => ["video/index"],
        ]
    ],
]);
