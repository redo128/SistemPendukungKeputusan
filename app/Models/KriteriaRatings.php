<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KriteriaBobot;
use App\Models\AlternatifScore;
class KriteriaRatings extends Model
{
    use HasFactory;
    protected $table='kriteriaratings';
    protected $fillable=['kriteriabobot_id','rating','description'];
    public function kriteriabobot(){
        return $this->belongsTo(kriteriaBobot::class);
    }
    public function alternatifscore(){
        return $this->hasMany(AlternatifScore::Class);
    }
}
