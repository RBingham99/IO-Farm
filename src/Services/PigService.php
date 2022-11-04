<?php

namespace IoFarm\Services;

use IoFarm\DataAccess\Database;
use IoFarm\DataAccess\PigDAO;
use IoFarm\Entities\PigColl;
use IoFarm\Entities\Pig;

class PigService
{
    private Database $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getPig(int $id): Pig
    {
        return PigDAO::fetch($this->db, $id);
    }

    public function getPigColl(): PigColl
    {
        return new PigColl();
    }
}