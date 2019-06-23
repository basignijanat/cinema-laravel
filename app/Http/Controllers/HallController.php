<?php
namespace App\Http\Controllers;

use App\Hall;
use App\Place;

class HallController extends Controller {

    public function index()
    {
        $model = new Hall;
        $halls = $model->selectAllActive();

        $place = new Place;

        return view('hall.index', ['halls' => $halls, 'place' => $place]);
    }

}