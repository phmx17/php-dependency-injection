<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';
$processor = new \App\RandomProcessor();
$processor->process(['Anya Taylor-Joy' => 'Beth Harmon']);