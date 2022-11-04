<?php

namespace IoFarm\Entities;

class Pig
{
    public function eat(string $food): string
    {
        return 'Mmm ' . $food;
    }
}