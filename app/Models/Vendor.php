<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Make extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendors';    

    /**
     * The primary key associated with the table.
     *
     * @var string
     */

    protected $primaryKey = 'id';    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['vendor_name', 'email', 'phone', 'address'];


}
