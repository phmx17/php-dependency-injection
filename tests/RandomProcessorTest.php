<?php

class RandomProcessorTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function the_random_processor_works() {
        // setup
//        $fileWriter = new \App\JsonFileWriter();
        // in order to save time create a testing mock instead
        $mockJsonWriter = $this->createMock(\App\JsonFileWriter::class);
        $mockJsonWriter->method('writeToFile')->willReturn(true);

        $processor = new \App\RandomProcessor($mockJsonWriter);

        // do something
        $result = $processor->process(['Anya Taylor-Joy' => 'Beth Harmon']);

        // make assertions
        $this->assertTrue($result);
    }
}