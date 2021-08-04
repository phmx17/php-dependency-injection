<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

//$fileWriter = new \App\CsvFileWriter();
$fileWriter = new \App\JsonFileWriter();

$processor = new \App\RandomProcessor($fileWriter);
$processor->process(['Anya Taylor-Joy' => 'Beth Harmon']);