<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use Validator;

use App\Admin;
use App\Hall;

class HallController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Hall;
        $halls = $model->selectAll();

        return view('admin.hall.index', ['halls' => $halls]);
    }

    public function create()
    {
        $model = new Hall;

        if (Request::has('save')){
            $data = Request::post();
            $model->insert($data);

            return redirect('/admin/hall');
        }

        return view('admin.hall.create', ['model' => $model]);
    }

    public function update($id)
    {
        $model = new Hall;

        if (Request::has('save') || Request::has('apply')){
            $data = Request::post();

            $model->update($id, $data);

            if (Request::has('save')){
                return redirect('/admin/hall');
            }
            elseif (Request::has('apply')){
                return redirect('/admin/hall/update/'.$id);
            }
        }

        $data = $model->getHall($id);

        return view('admin.hall.update', ['id' => $id, 'data' => $data]);
    }

    public function delete($id)
    {
        $model = new Hall;
        $model->delete($id);

        return redirect('/admin/hall');
    }
}