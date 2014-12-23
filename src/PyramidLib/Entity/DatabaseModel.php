<?php

namespace PyramidLib\Entity;

class DatabaseModel {
    private $database;

    public function __construct($dbLib)
    {
        $this->database = $dbLib;
    }

    public function insert($tabel, $data)
    {
        $this->database->insert($tabel, $data);
        return $this->database->insert_id();
    }

}
