<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Task extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tasks';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name','description','time_laid','time_spend','last_time_start','start_status','status_id','priority_id','user_id','group_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function status()
    {
        return $this->belongsTo('App\Models\TaskStatus', 'status_id');
    }
    public function group()
    {
        return $this->belongsTo('App\Models\TaskGroup', 'group_id');
    }
    public function manager()
    {
        return $this->belongsTo('App\User', 'manager_id');
    }
    public function executor()
    {
        return $this->belongsTo('App\User', 'executor_id');
    }
    public function priority()
    {
        return $this->belongsTo('App\Models\Priority');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
