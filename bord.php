<?php

// PHP処理
require("./bord_model.php");

$bord = new BordClass();
// $bord->main();
$bord->run();

// テンプレート
require("./bord.tmpl");
