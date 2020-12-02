<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    /**
     * Fillabel Fields
     * @var array
     */
    protected $fillable = array(
      'name', 'caps'
    );
    /**
     * Belongs to many users
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
      return $this->belongsToMany('App\Models\User');
    }
}
