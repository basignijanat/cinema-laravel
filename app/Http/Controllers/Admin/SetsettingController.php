<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use Validator;

use App\Admin;
use App\Setsetting;

class SetsettingController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Setsetting;
        $settings = $model->selectAll();

        if (Request::has('save')){
            $data = Request::post();
            //print_r($data);
            $model->insertOrUpdate($data);
            //$model->insertSetting('email', $data['email']);

            return redirect('/admin/setsetting');
        }

        return view('admin.setsetting.index', ['settings' => $settings]);
    }
}