<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
  protected $guarded = [
  ];
  protected $hidden = [
  ];
  public $timestamps=false;
  public $table = 'role_permissions';

}
