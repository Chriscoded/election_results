<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    protected $table = 'party';

    protected $primaryKey = 'uniqueid';

    public $timestamps = true;

    protected $fillable = [''];

    protected $hidden = [''];

    protected $visible = [''];

    
}
