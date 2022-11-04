<?php

namespace IoFarm\Entities;

// A collection of Pig objects.

class PigColl
{
    private array $pigs;

    /**
     * @return array
     */
    public function getPigs(): array
    {
        return $this->pigs;
    }

    /**
     * @param array $pigs
     */
    public function setPigs(array $pigs): void
    {
        $this->pigs = $pigs;
    }


}