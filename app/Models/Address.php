<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libs\Misc;
use Request;

class Address extends BaseModel {

    protected $guarded = [
    ];
    protected $hidden = ['phone'
    ];
    public $table = "addresses";


}
