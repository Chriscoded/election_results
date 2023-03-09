<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announced_pu_Result extends Model
{
    use HasFactory;

    protected $table = 'announced_pu_results';

    protected $primaryKey = 'uniqueid';
    public $timestamps = false;

    protected $fillable = ['polling_unit_uniqueid',
    'party_abbreviation',
    'party_score',
    'entered_by_user',
    'date_entered',
    'user_ip_address'];


    protected $hidden = [''];

    protected $visible = [''];

    // public function polling_unit()
    // {
    //     return $this->hasOne(Polling_unit::class, 'uniqueid', 'lga_id')->latest();
    //         // ->limit(6)
    //         // ->get();
    // }

    
}
