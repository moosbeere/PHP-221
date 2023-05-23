<?php

    return [
        '~^article/show/(\d+)$~' => [Controllers\ArticleController::class, 'show'],
        '~^hello/(.*)$~' => [Controllers\MainController::class, 'sayHello'],
        '~^$~' => [Controllers\MainController::class, 'main'],
    ];