<?php
$app = new \Core\Bootstrap();

$app->router->get("/","Home@index",[
    "before" =>"checkAuth",
]);
