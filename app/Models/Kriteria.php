<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriteria';
    protected $fillable = ['nama','bobot','tipe'];

    public function parameter()
    {
        return $this->hasMany(Parameter::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'nilai', 'kriteria_id', 'alternatif_id')->withPivot('parameter_id', 'nilai');
    }

    public function getBobot($value)
    {
        return $value / 100;
    }
}
