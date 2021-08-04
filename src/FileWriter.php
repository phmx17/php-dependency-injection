<?php

namespace App;

abstract class FileWriter
{
    public abstract function writeToFile($data): bool;
}