<?php
return [
    '~hello/(.*)~' => [Controllers\MainController::class, 'sayHello'],
    '~^$~' => [Controllers\MainController::class, 'main'],
    '~article/show/(\d+)~' => [Controllers\ArticleController::class, 'show'],
    '~article/create~' => [Controllers\ArticleController::class, 'create'],
    '~article/edit/(\d+)~' => [Controllers\ArticleController::class, 'edit'],
    '~article/update/(\d+)~' => [Controllers\ArticleController::class, 'update'],
    '~article/delete/(\d+)~' => [Controllers\ArticleController::class, 'delete'],
];