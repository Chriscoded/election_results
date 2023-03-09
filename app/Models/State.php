<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $table = 'state';

    protected $primaryKey = 'uniqueid';

    public $timestamps = true;

    protected $fillable = [''];

    protected $hidden = [''];

    protected $visible = [''];

    
}
