<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AlternatifScore;
class Alternatif extends Model
{
    use HasFactory;
    protected $table = 'alternatif';
    protected $primaryKey = 'id';
    protected $fillable=['nama', 'totalresult'];
    public function alternatifscore(){
        return $this->hasMany(AlternatifScore::Class);
    }
}
