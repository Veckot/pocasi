<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bundesland;
use App\Models\Data;
use App\Models\Station;

class Pocasi extends BaseController
{
    private $bundesland;
    private $data;
    private $station;

    public function __construct()
    {
        $this->bundesland = new Bundesland();
        $this->data = new Data();
        $this->station = new Station();
    }

    public function index()
    {
        $dataB['bundesland'] = $this->bundesland->findAll();
        return view('stranka1', $dataB);
    }

    public function Stanice($idZeme)
    {
        $dataS['station'] = $this->station->where('bundesland', $idZeme)->findAll();
        $dataS['bundesland'] = $this->bundesland->find($idZeme);
        return view('stranka2', $dataS);
    }

    public function bundesland()
    {
        $dataB['bundesland'] = $this->bundesland->findAll();
        return view('bundesland', $dataB);
    }

    public function data()
    {
        $dataD['data'] = $this->data->findAll();
        return view('data', $dataD);
    }

    public function station()
    {
        $dataS['station'] = $this->station->findAll();
        return view('station', $dataS);
    }
    public function stranka2($idBund)
    {
        $stationData['station'] = $this->station->where('bundesland', $idBund)->findAll();
        $stationData['data'] = $this->data->where('bundesland', $idBund)->findAll();
        return view('station_detail', $stationData);
    }
}