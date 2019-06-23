<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use Validator;

use App\Admin;
use App\Showtime;

class ShowtimeController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Showtime;
        $showtimes = $model->selectAll();

        return view('admin.category.index', ['showtimes' => $showtimes]);
    }

    public function create()
    {
        $model = new Showtime;

        if (Request::has('save')){
            $data = Request::post();
            $model->insert($data);

            return redirect('/admin/category');
        }

        return view('admin.category.create', ['model' => $model]);
    }

    public function update($id)
    {
        $model = new Showtime;

        if (Request::has('name'))
        {
            $data = Request::post();

            $model->update($id, $data);

            if (Request::has('save')){
                return redirect('/admin/category');
            }
            elseif (Request::has('apply')){
                return redirect('/admin/category/update/'.$id);
            }
        }

        $data = $model->getShowtime($id);

        return view('admin.category.update', ['id' => $id, 'data' => $data]);
    }

    public function delete($id)
    {
        $model = new Showtime;
        $model->delete($id);

        return redirect('/admin/category');
    }
}