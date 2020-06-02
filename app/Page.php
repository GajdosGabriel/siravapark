<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    protected $fillable = ['name', 'view_total', 'view_last', 'view_now' ];
    public $timestamps = false;


    public function page_visits() {
        return $this->hasMany('App\PageVisit');
    }

}
