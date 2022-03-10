<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorModel;

class SensorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->SensorModel = new SensorModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Chart Sensor',
            'sensor' => $this->SensorModel->AllData(),
        ];

        return view('home', $data);
    }
}
