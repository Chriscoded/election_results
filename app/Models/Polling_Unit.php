<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polling_Unit extends Model
{
    use HasFactory;
    protected $table = 'polling_unit';

    protected $primaryKey = 'uniqueid';

    public $timestamps = true;

    protected $fillable = [''];

    protected $hidden = [''];

    protected $visible = [''];

    

    public function Lga()
    {
        return $this->hasOne(Lga::class, 'uniqueid', 'lga_id')->latest();
            // ->limit(6)
            // ->get();
    }

    public function Ward()
    {
        return $this->hasOne(Ward::class, 'uniqueid', 'ward_id')->latest();
            // ->limit(6)
            // ->get();
    }

    public function pu_results()
    {
        return $this->hasMany(Announced_pu_Result::class, 'polling_unit_uniqueid', 'uniqueid');
            // ->limit(6)
            // ->get();
    }
}
