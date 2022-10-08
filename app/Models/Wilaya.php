<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    use HasFactory;
    protected $table = 'wilayas';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'postcode',
        'name_ar',
        'name_en',
        'name_ber',
        'latitude',
        'longitude',
    ];

    public function dairas()
    {
        return $this->hasMany(Daira::class, 'wilaya_id');
    }

}
