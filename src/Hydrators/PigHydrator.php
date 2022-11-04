<?php

namespace IoFarm\Hydrators;

use IoFarm\DataAccess\Database;
use IoFarm\Entities\Pig;

class PigHydrator
{

    public static function hydrateFromDatabase(Database $db, int $id): Pig
    {
        $sql = 'SELECT `id`, `name`, `weight`, `colour`, `species` '
            . 'FROM `pigs` '
            . 'WHERE `id` = :id;';
        $values = [':id' => $id];

        $stmt = $db->getConnection()->prepare($sql);

        $stmt->setFetchMode(\PDO::FETCH_CLASS, Pig::class);

        $stmt->execute($values);

        $pig = $stmt->fetch();

        if (!$pig) {
            throw new \InvalidArgumentException('Invalid id');
        }

        return $pig;
    }
}