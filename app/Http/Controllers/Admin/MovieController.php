<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use Validator;

use App\Admin;
use App\Movie;
use App\Category;

class MovieController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Movie;
        $movies = $model->selectAll();

        return view('admin.movie.index', ['movies' => $movies]);
    }

    public function create()
    {
        $model = new Movie;

        if (Request::has('save')){
            $data = Request::post();
            $model->insert($data);

            return redirect('/admin/movie');
        }

        $categories = new Category;
        $categories = $categories->getDropDown();

        return view('admin.movie.create', ['model' => $model, 'categories' => $categories]);
    }

    public function update($id)
    {
        $model = new Movie;

        if (Request::has('save') || Request::has('apply')){
            $data = Request::post();
            $model->update($id, $data);

            if (Request::has('save')){
                return redirect('/admin/movie');
            }
            elseif (Request::has('apply')){
                return redirect('/admin/movie/update/'.$id);
            }
        }

        $data = $model->getMovie($id);

        $categories = new Category;
        $categories = $categories->getDropDown();

        return view('admin.movie.update', ['id' => $id, 'data' => $data, 'categories' => $categories]);
    }

    public function delete($id)
    {
        $model = new Movie;
        $model->delete($id);

        return redirect('/admin/movie');
    }
}