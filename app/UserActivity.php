<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Exception;

class UserActivity extends Model {
    public $table = 'user_activities';

    public $timestamps = false;

    protected $with = ['activity'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'activity_id'
    ];

    public static function logActivity($activityID) {
//        if (! Auth::user()->hasRole('staff')) {
//        if (!in_array(Auth::user()->id, [1, 4, 6, 457, 617, 633, 708])) {
          Auth::user()->activities()->create(['activity_id' => $activityID]);
//        }
    }


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function activity() {
        return $this->belongsTo(Activity::class);
    }


}
