<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model {
    protected $fillable = ['page_id'];

    public function page() {
        return $this->belongsTo('App\Page');
    }
}
