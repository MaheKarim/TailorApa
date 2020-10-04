<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomOrder extends Model
{
    protected $guarded = [' '];


    public function User ()
    {
        return $this->belongsTo('App\User');
    }

    public function Status ()
    {
        return $this->belongsTo('App\Status', 'status_name_id', 'id');
    }
}
