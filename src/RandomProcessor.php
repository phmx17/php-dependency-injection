<?php

namespace App;


use function PHPUnit\Framework\throwException;


class RandomProcessor
{
    private $fileWriter;
    public function __construct(FileWriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function process(array $data) {
        // attempt to write to file
        $fileWriter = new CsvFileWriter();
        $result = $fileWriter->writeToFile($data);

        if(!$result) {
            throw new \Exception('Error writing to file');
        }
        // continue processing
        print 'Continue processing...' . PHP_EOL;
    }
}