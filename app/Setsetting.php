<?php
namespace App;

use Illuminate\Support\Facades\DB;

use App\AdminBase;

class Setsetting extends AdminBase
{
    public $name;
    public $value = '1';

    public $pagenum = 2;
    public $pagenumAdmin = 1;

    public static function table(){

        return 'setting';
    }

    public static function columns(){

        return array('name', 'value');
    }

    public static function settings(){


        return array('email', 'language');
    }

    public function selectAllActive()
    {
        return DB::table($this->table())->select()->where('status', 1)->paginate($this->pagenum);
    }

    public function getSetsetting($id){

        return DB::table($this->table())->select()->where('id', $id)->first();
    }

    public static function status($id){
        switch ($id){
            case 1 :
                $text = 'Published';
                break;
            default :
                $text = 'Draft';

        }

        return $text;
    }
    public function checkSetting($name){

        return DB::table($this->table())->select()->where('name', $name)->first();
    }

    public function insertOrUpdate($data){
        foreach ($data as $key => $item){
            if (in_array($key, $this->settings())){
                if (!$this->checkSetting($key)){
                    return $this->insertSetting($key, $item);
                }
                else{
                    return $this->updateSetting($key, $item);
                }
            }
        }
    }

    public function insertSetting($key, $value){

        return parent::insert(['name' => $key, 'value' => $value]);
    }

    public function updateSetting($key, $value){
        $model = DB::table($this->table())->select()->where('name', $key)->first();

        return parent::update($model->id, ['name' => $key, 'value' => $value]);
    }
}
?>