<?php
require __DIR__ . '/vendor/autoload.php';

use Cowsayphp\Farm;

header('Content-Type: text/plain');

$text = "hello testsdkfksjflksdjflsjdlfjsdlf";


$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo $cow->say($text);
