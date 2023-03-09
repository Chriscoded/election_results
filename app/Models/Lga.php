<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;
    protected $table = 'lga';

    protected $primaryKey = 'uniqueid';

    public $timestamps = true;

    // protected $fillable = ['polling_unit_id' ,'ward_id','lga_id','uniquewardid','polling_unit_number','polling_unit_name','polling_unit_description','lat','long','entered_by_user','date_entered','user_ip_address'];

    protected $fillable = [''];

    protected $hidden = [''];

    protected $visible = [''];


    public function lgawards()
    {
        return $this->hasMany(Ward::class, 'lga_id', 'uniqueid')->latest();
            // ->limit(6)
            // ->get();
    }

    public function lgapolling_units()
    {
        return $this->hasMany(Polling_Unit::class, 'lga_id', 'uniqueid')->latest();
            // ->limit(6)
            // ->get();
    }
}