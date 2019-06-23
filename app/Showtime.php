<?php
namespace App;

use Illuminate\Support\Facades\DB;

use App\AdminBase;

class Category extends AdminBase
{
    public $name;
    public $url;
    public $short_content;
    public $content;
    public $image = '/public/images/7.jpg';
    public $status = 0;

    public $pagenum = 2;
    public $pagenumAdmin = 1;

    public static function table(){

        return 'showtime';
    }

    public static function columns(){

        return array('name', 'url', 'short_content', 'content', 'image', 'status');
    }

    public function selectAllActive()
    {
        return DB::table($this->table())->select()->where('status', 1)->paginate($this->pagenum);
    }

    public function getCategory($id){

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
}
?>