<?php
namespace App;

use Illuminate\Support\Facades\DB;

use App\AdminBase;

class Movie extends AdminBase
{
    public $name;
    public $url;
    public $short_content;
    public $content;
    public $trailer;
    public $film;
    public $actor;
    public $year = 0;
    public $status = 0;
    public $category_ids = false;

    public $pagenum = 4;
    public $pagenumAdmin = 1;

     public static function table(){
        return 'movie';
    }

    public static function columns(){

        return array('name', 'url', 'short_content', 'content', 'trailer', 'film', 'actor', 'year', 'status', 'category_ids');
    }

    public function create($data){
        if ($data){
            $data['category_ids'] = implode(',', $data['category_ids']);
        }
        else{
            $data['category_ids'] = '';
        }

        return parent::create($data);
    }

    public function update($id, $data){
        if ($data){
            $data['category_ids'] = implode(',', $data['category_ids']);
        }
        else{
            $data['category_ids'] = '';
        }

         return parent::update($id, $data);
    }

    public function selectAllActive(){

        return DB::table($this->table())->select('id', 'name', 'url', 'short_content', 'content', 'image')->where('status', 1)->paginate($this->pagenum);
    }

    public function getMovie($id){
        $data = DB::table($this->table())->select()->where('id', $id)->first();
        $data->category_ids = explode(',', $data->category_ids);

        return $data;
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