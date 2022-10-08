<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    use HasFactory;
    protected $table = 'dairas';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'wilaya_id',
        'postcode',
        'name_ar',
        'name_en',
        'name_ber',
        'latitude',
        'longitude',
    ];


    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class, 'wilaya_id');
    }


    public function communes()
    {
        return $this->hasMany(Commune::class, 'daira_id');
    }

}
