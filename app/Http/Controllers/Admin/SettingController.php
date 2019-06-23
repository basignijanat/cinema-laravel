<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use Validator;

use App\Admin;
use App\Setting;

class SettingController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Setting;
        $settings = $model->selectAll();

        if (Request::has('save')){
            $data = Request::post();

            $model->insertOrUpdate($data);

            return redirect('/admin/setting');
        }

        return view('admin.setting.index', ['settings' => $settings]);

        /*$model = new Setting;
        $settings = $model->selectAll();

        return view('admin.setting.index', ['settings' => $settings]);*/
    }

    public function create()
    {
        $model = new Setting;

        if (Request::has('save')){
            $data = Request::post();
            $model->insert($data);

            return redirect('/admin/setting');
        }

        return view('admin.setting.create', ['model' => $model]);
    }

    public function update($id)
    {
        $model = new Setting;

        if (Request::has('name'))
        {
            $data = Request::post();

            $model->update($id, $data);

            if (Request::has('save')){
                return redirect('/admin/setting');
            }
            elseif (Request::has('apply')){
                return redirect('/admin/setting/update/'.$id);
            }
        }

        $data = $model->getSetting($id);

        return view('admin.setting.update', ['id' => $id, 'data' => $data]);
    }

    public function delete($id)
    {
        $model = new Setting;
        $model->delete($id);

        return redirect('/admin/setting');
    }
}