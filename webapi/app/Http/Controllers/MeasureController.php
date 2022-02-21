<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measure;

class MeasureController extends Controller
{
    public function getHelloWorld() {
        return ['hello'=>'world'];
    }
    public function index()
    {
        $m = Measure::All();
        return $m;
    }   
}
