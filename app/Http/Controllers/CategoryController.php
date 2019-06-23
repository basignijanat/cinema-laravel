<?php
namespace App\Http\Controllers;

use Validator;

use App\Category;

class CategoryController extends Controller {
    public function index(){
        $model = new Category;
        $categories = $model->selectAllActive();

        return view('category.index', ['categories' => $categories]);
    }

    public function genre(){

        return view('category.genre');
    }
}
?>
