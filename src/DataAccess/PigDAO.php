<?php

namespace IoFarm\DataAccess;

use IoFarm\Entities\Pig;
use IoFarm\Hydrators\PigHydrator;

class PigDAO
{

    public static function fetch(Database $db, int $id): Pig
    {
        return PigHydrator::hydrateFromDatabase($db, $id);
    }
}