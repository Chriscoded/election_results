<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $table = 'ward';

    protected $primaryKey = 'uniqueid';

    public $timestamps = true;

    protected $fillable = ['polling_unit_id' ,'ward_id','lga_id','uniquewardid','polling_unit_number','polling_unit_name','polling_unit_description','lat','long','entered_by_user','date_entered','user_ip_address'];

    protected $hidden = ['entered_by_user'];

    protected $visible = [''];

    public function Lga()
    {
        return $this->hasOne(Lga::class, 'uniqueid', 'lga_id')->latest();
            // ->limit(6)
            // ->get();
    }

    public function polling_units()
    {
        $polling_unit = $this->hasMany(Polling_Unit::class, 'ward_id', 'uniqueid');

            // ->limit(6)
            // ->get();
    }


}
