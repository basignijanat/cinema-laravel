<?php
namespace App;

use Illuminate\Support\Facades\DB;

use App\AdminBase;

class Hall extends AdminBase
{
    public $name;
    public $url;
    public $status = 0;

    public $pagenum = 4;
    public $pagenumAdmin = 1;

    public static function table(){

        return 'hall';
    }

    public static function columns(){

        return array('name', 'url', 'status',);
    }

    public function selectAllActive(){

        return DB::table($this->table())->select()->where('status', 1)->paginate($this->pagenum);
    }

    public function getHall($id){

        return DB::table($this->table())->select()->where('id', $id)->first();
    }

    public static function status($id){
        switch ($id){
            case 1 :
                $text = 'Active';
                break;
            default :
                $text = 'Draft';

        }

        return $text;
    }
}
?>