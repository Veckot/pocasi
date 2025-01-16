<?php

namespace App\Models;

use CodeIgniter\Model;

class StationModel extends Model
{
    protected $table = 'station';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'id'];

    // Define a method to get stations with bundesland info
    public function getStationsWithBundesland()
    {
        return $this->select('station.*, bundesland.name as name')
            ->join('bundesland', 'station.id = bundesland.id')
            ->orderBy('bundesland.name', 'ASC')
            ->findAll();
    }
}
?>