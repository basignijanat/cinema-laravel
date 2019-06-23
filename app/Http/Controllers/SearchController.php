<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Validator;

use App\Search;

class SearchController extends Controller {

    public function index()
    {
        if (Input::has('search')){
            $data = Input::post('search');
            $model = new Search;
            $result = $model->search($data);
        }
        else{
            $result = null;
        }

        return view('search.index', ['result' => $result]);
    }

}