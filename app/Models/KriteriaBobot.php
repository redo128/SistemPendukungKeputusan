<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KriteriaRatings;
use App\Models\AlternatifScore;

class KriteriaBobot extends Model
{
    use HasFactory;
    protected $table = 'kriteriabobot';
    protected $primarykey = 'id';
    protected $fillable = ['name','type','weight','description'];
    public function kriteriaratings(){
        return $this->hasMany(KriteriaRatings::Class);
    }
    public function alternatifscore(){
        return $this->hasMany(AlternatifScore::Class);
    }
}
