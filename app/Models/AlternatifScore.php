<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alternatif;
use App\Models\KriteriaBobot;
use App\Models\KriteriaRatings;

class AlternatifScore extends Model
{
    use HasFactory;
    protected $fillable = ['alternatif_id', 'kriteriabobot_id', 'kriteriaratings_id', 'nilai'];
    protected $table = 'alternatifscore';
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }

    public function kriteriabobot()
    {
        return $this->belongsTo(KriteriaBobot::class);
    }

    public function kriteriarating()
    {
        return $this->belongsTo(KriteriaRatings::class);
    }
}
