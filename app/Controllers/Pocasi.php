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
        return view('bundStranka', $dataB);
    }

    public function Stanice($idZeme)
    {
        $dataS['station'] = $this->station->where('bundesland', $idZeme)->findAll();
        $dataS['bundesland'] = $this->bundesland->find($idZeme);
        return view('bund_stationStranka', $dataS);
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
    public function bund_stationStranka($idBund)
    {
        $stationData['bundesland'] = $this->bundesland->find($idBund);
        $stationData['station'] = $this->station->where('bundesland', $idBund)->findAll();
        $stationData['data'] = $this->data->where('Stations_ID', $idBund)->findAll();
        return view('bund_stationStranka', $stationData);
    }
    public function station_dataStranka($idStation)
    {
        $dataData['station'] = $this->station()->find($idStation);
        $dataData['data'] = $this->station->where('data', $idStation)->findAll();
        return view('station_dataStranka', $dataData);
    }
}