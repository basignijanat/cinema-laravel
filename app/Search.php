<?php
namespace App;

use Illuminate\Support\Facades\DB;

class Search{
    public $pagenum = 2;
    public function search($data)    {
        return DB::table(DB::raw('category, movie'))
            ->select()
            ->where('category.status', 1)
            ->where('category.name', 'like', '%'.$data.'%')
            ->orwhere('movie.name', 'like', '%'.$data.'%')
            ->paginate($this->pagenum);
    }

}
?>