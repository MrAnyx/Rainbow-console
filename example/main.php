<?php

/**
 * @author MrAnyx
 */

require_once __DIR__ . "/../vendor/autoload.php";

use RainbowColor\ColorConsole;

$reflectionClass = new ReflectionClass(ColorConsole::class);

foreach ($reflectionClass->getReflectionConstants() as $constant) if($constant->isPublic()) {
    $content = ucfirst(strtolower($constant->getName())) . " text with background";
    echo ColorConsole::color($content, $constant->getValue(), true) . "\n";
}

foreach ($reflectionClass->getReflectionConstants() as $constant) if($constant->isPublic()) {
    $content = ucfirst(strtolower($constant->getName())) . " text without background";
    echo ColorConsole::color($content, $constant->getValue(), false) . "\n";
}
