<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use Validator;

use App\Admin;
use App\Place;
use App\Hall;

class PlaceController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Place;
        $places = $model->selectAll();

        return view('admin.place.index', ['places' => $places]);
    }

    public function create()
    {
        $model = new Place;

        if (Request::has('save')){
            $data = Request::post();
            $model->insert($data);

            return redirect('/admin/place');
        }

        $modelHall = new Hall;
        $halls = $modelHall->getDropdown();

        return view('admin.place.create', ['model' => $model, 'halls' => $halls]);
    }

    public function update($id)
    {
        $model = new Place;

        if (Request::has('save') || Request::has('apply')){
            $data = Request::post();

            $model->update($id, $data);

            if (Request::has('save')){
                return redirect('/admin/place');
            }
            elseif (Request::has('apply')){
                return redirect('/admin/place/update/'.$id);
            }
        }

        $data = $model->getPlace($id);

        $modelHall = new Hall;
        $halls = $modelHall->getDropdown();

        return view('admin.place.update', ['id' => $id, 'data' => $data, 'halls' => $halls]);
    }

    public function delete($id){
        $model = new Place;
        $model->delete($id);

        return redirect('/admin/place');
    }

    

}