<?php
namespace App;

use Illuminate\Support\Facades\DB;

class AdminBase
{
    public $rec = 0;

    public $pagenum = 10;
    public $pagenumAdmin = 10;

    public static function table(){

        return '';
    }

    public static function columns(){

        return array('rec');
    }

    public function insert($data){
        $result = array();

        foreach ($this->columns() as $column){
            $result[$column] = $data[$column];
        }

        return DB::table($this->table())->insert($result);
    }

    public function update($id, $data){
        $result = array();

        foreach ($this->columns() as $column){
            $result[$column] = $data[$column];
        }

        return DB::table($this->table())
            ->where('id', $id)
            ->update($result);
    }

    public function delete($id){

        return DB::table($this->table())->where('id', $id)->delete();
    }

    public function selectAll(){

        return DB::table($this->table())->select()->paginate($this->pagenumAdmin);
    }

    public function getDropDown($ids = false){
        $arr = [];

        if ($ids) {
            $recs = DB::table($this->table())->select()->where('id', $ids)->get();
        }
        else{
            $recs = DB::table($this->table())->select()->get();
        }

        foreach ($recs as $rec){
            $arr[$rec->id] = $rec->name;
        }

        return $arr;
    }
}
?>