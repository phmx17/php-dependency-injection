<?php

namespace App;

class JsonFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        // pretend to write to file
        print PHP_EOL . 'Writing to JSON file...' . PHP_EOL;
        sleep(2);
        return true;
    }
}