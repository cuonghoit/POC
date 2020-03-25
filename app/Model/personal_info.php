<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class personal_info extends Model
{
    protected $table = "personal_info";

    public function supervisor() {
        return $this->hasOne('App\Model\personal_info', 'user_id', 'direct_supervisor_id');
    }
}
