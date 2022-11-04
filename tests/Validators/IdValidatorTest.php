<?php

namespace Validators;

use PHPUnit\Framework\TestCase;

class IdValidatorTest extends TestCase
{
    public function testValid_Given1ReturnsTrue()
    {
        //Arrange
        //Act
        $actual = \IoFarm\Validators\IdValidator::valid(1);
        //Assert
        $this->assertEquals(true, $actual);
    }
}