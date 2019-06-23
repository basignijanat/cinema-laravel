<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use Validator;

use App\Admin;
use App\Category;

class CategoryController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Category;
        $categories = $model->selectAll();

        return view('admin.category.index', ['categories' => $categories]);
    }

    public function create()
    {
        $model = new Category;

        if (Request::has('save')){
            $data = Request::post();
            $model->insert($data);

            return redirect('/admin/category');
        }

        return view('admin.category.create', ['model' => $model]);
    }

    public function update($id)
    {
        $model = new Category;

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

        $data = $model->getCategory($id);

        return view('admin.category.update', ['id' => $id, 'data' => $data]);
    }

    public function delete($id)
    {
        $model = new Category;
        $model->delete($id);

        return redirect('/admin/category');
    }
}