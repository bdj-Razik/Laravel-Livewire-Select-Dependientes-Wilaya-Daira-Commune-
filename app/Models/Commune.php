<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $table = 'communes';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'daira_id',
        'postcode',
        'name_ar',
        'name_en',
        'name_ber',
        'latitude',
        'longitude',
    ];

    public function daira()
    {
        return $this->belongsTo(Daira::class, 'daira_id');
    }

    public function techniciens()
    {

        return $this->hasMany(Technicien::class, 'commune_id');
    }

}
