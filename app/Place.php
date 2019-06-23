<?php
namespace App;

use Illuminate\Support\Facades\DB;

use App\AdminBase;

class Place extends AdminBase
{
    public $hall_id = 0;
    public $seat_row = 0;
    public $seat_place = 0;
    public $type = 0;
    public $status = 0;

    public $pagenum = 4;
    public $pagenumAdmin = 1;

    public static function table(){

        return 'place';
    }

    public static function columns(){

        return array('hall_id', 'seat_row', 'seat_place', 'type', 'status');
    }

    public function selectAllActive(){

        return DB::table($this->table())->select()->where('status', 1)->paginate($this->pagenum);
    }

    public function getPlace($id){
        $data = DB::table($this->table())->select()->where('id', $id)->first();

        return $data;
    }

    public function getPlaceByHallId($hall_id){

        return DB::table($this->table())->select()->where('hall_id', $hall_id)->get();
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

    public function countMaxRow($hall_id){

        return DB::table($this->table())->select()->where('hall_id', $hall_id)->max('seat_row');
    }

    public function countMaxPlace($hall_id){

        return DB::table($this->table())->select()->where('hall_id', $hall_id)->max('seat_place');
    }
}
?>