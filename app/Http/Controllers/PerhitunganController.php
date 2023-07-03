<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\AlternatifScore;
use App\Models\KriteriaBobot;
use App\Models\KriteriaRatings;
class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $alternatifscore=AlternatifScore::with('kriteriabobot','kriteriarating','alternatif')->get();
    //     $calternatifscore=AlternatifScore::with('kriteriabobot','kriteriarating','alternatif')->get();
    //     $alternatif=Alternatif::get();
    //     $kriteriabobot=KriteriaBobot::get();
    //     foreach ($alternatif as $a){
    //         $afilter = $alternatifscore->where('alternatif_id', $a->id)->values()->all();
    //     }
        
    //     foreach ($alternatif as $a) {
    //         // Get all scores for each alternative id
    //         $afilter = $alternatifscore->where('alternatif_id', $a->id)->values()->all();
    //         // Loop each criteria
    //         foreach ($kriteriabobot as $icw => $cw) {
    //             // Get all rating value for each criteria
    //             $rates = $calternatifscore->map(function ($val) use ($cw) {
    //                 if ($cw->id == $val->kriteriabobot_id) {
                        
    //                     return $val->rating;
    //                     // dd($val->rating);
    //                 }
    //             })->toArray();
                
    //             // array_filter for removing null value caused by map,
    //             // array_values for reindexing the array
    //             $rates = array_values(array_filter($rates));

    //             $total = 0;
    //             foreach ($rates as $value) {
    //                 $total += pow($value, 2);
    //             }
    //             $sqrt = sqrt($total);
    //             dd($sqrt);
    //             $normalisasi = $afilter[$icw]->rating / $sqrt;
    //             $result = number_format($normalisasi, 6, '.', ''); // Output dengan 6 digit di belakang koma
    //             $afilter[$icw]->rating = $result;
    //         }
    //     }
    //     return view('normalisasi', compact('alterinatifscore', 'alternatif', 'kriteriabobot'))->with('i', 0);
    // }
    public function index()
    {
        $scores = AlternatifScore::select(
            'alternatifscore.id as id',
            'alternatif.id as ida',
            'kriteriabobot.id as idw',
            'kriteriaratings.id as idr',
            'alternatif.nama as name',
            'kriteriabobot.name as criteria',
            'kriteriaratings.rating as rating',
            'kriteriaratings.description as description')
            ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
            ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
            ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
            ->get();
            
        $cscores = AlternatifScore::select(
            'alternatifscore.id as id',
            'alternatif.id as ida',
            'kriteriabobot.id as idw',
            'kriteriaratings.id as idr',
            'alternatif.nama as name',
            'kriteriabobot.name as criteria',
            'kriteriaratings.rating as rating',
            'kriteriaratings.description as description')
            ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
            ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
            ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
            ->get();

        $alternatif = Alternatif::get();
        $kriteriabobot = KriteriaBobot::get();

        // Normalization
        foreach ($alternatif as $a) {
            // Get all scores for each alternative id
            $afilter = $scores->where('ida', $a->id)->values()->all();
            // Loop each criteria
            foreach ($kriteriabobot as $icw => $cw) {
                // Get all rating value for each criteria
                $rates = $cscores->map(function ($val) use ($cw) {
                    if ($cw->id == $val->idw) {
                        return $val->rating;
                    }
                })->toArray();

                // array_filter for removing null value caused by map,
                // array_values for reindexing the array
                $rates = array_values(array_filter($rates));
                $total = 0;
                foreach ($rates as $value) {
                    $total += pow($value, 2);
                }
                $sqrt = sqrt($total);
                
                $normalisasi = $afilter[$icw]->rating / $sqrt;
                $result = number_format($normalisasi, 2, '.', ''); // Output dengan 6 digit di belakang koma
                $afilter[$icw]->rating = $result;
            }
        }

        return view('normalisasi', compact('scores', 'alternatif', 'kriteriabobot'))->with('i', 0);
    }
   public function utiliy()
    {
        $scores = AlternatifScore::select(
            'alternatifscore.id as id',
            'alternatif.id as ida',
            'kriteriabobot.id as idw',
            'kriteriaratings.id as idr',
            'alternatif.nama as name',
            'kriteriabobot.name as criteria',
            'kriteriaratings.rating as rating',
            'kriteriaratings.description as description')
            ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
            ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
            ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
            ->get();
            
        $cscores = AlternatifScore::select(
            'alternatifscore.id as id',
            'alternatif.id as ida',
            'kriteriabobot.id as idw',
            'kriteriaratings.id as idr',
            'alternatif.nama as name',
            'kriteriabobot.name as criteria',
            'kriteriaratings.rating as rating',
            'kriteriaratings.description as description')
            ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
            ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
            ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
            ->get();

            $alternatif = Alternatif::get();
            $kriteriabobot = KriteriaBobot::get();
            $data = [[]];
            $row=0;
            $coloumn=1;
            // Normalization
            foreach ($alternatif as $a) {
                $coloumn=1;
                // Get all scores for each alternative id
                $afilter = $scores->where('ida', $a->id)->values()->all();
                // Loop each criteria
                foreach ($kriteriabobot as $icw => $cw) {
                    // Get all rating value for each criteria
                    $rates = $cscores->map(function ($val) use ($cw) {
                        if ($cw->id == $val->idw) {
                            return $val->rating;
                        }
                    })->toArray();
    
                    // array_filter for removing null value caused by map,
                    // array_values for reindexing the array
                    $rates = array_values(array_filter($rates));
                    $total = 0;
                    foreach ($rates as $value) {
                        $total += pow($value, 2);
                    }
                    $sqrt = sqrt($total);
                    $normalisasi = $afilter[$icw]->rating / $sqrt;
                    
                    $data[$row][$coloumn]=$normalisasi;
                    $coloumn++;
                }
                // dd($data);
                $row++;
            }
            $secores = AlternatifScore::select(
                'alternatifscore.id as id',
                'alternatif.id as ida',
                'kriteriabobot.id as idw',
                'kriteriaratings.id as idr',
                'alternatif.nama as name',
                'kriteriabobot.name as criteria',
                'kriteriaratings.rating as rating',
                'kriteriaratings.description as description')
                ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
                ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
                ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
                ->get();
                
            $csecores = AlternatifScore::select(
                'alternatifscore.id as id',
                'alternatif.id as ida',
                'kriteriabobot.id as idw',
                'kriteriaratings.id as idr',
                'alternatif.nama as name',
                'kriteriabobot.name as criteria',
                'kriteriaratings.rating as rating',
                'kriteriaratings.description as description')
                ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
                ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
                ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
                ->get();

                $alternatif2 = Alternatif::get();
                $kriteriabobot2 = KriteriaBobot::get();

                $minArray = []; // Array baru untuk menyimpan nilai terendah dan tertinggi

                $minValue = null; // Inisialisasi nilai terendah dengan null
                $maxValue = null; // Inisialisasi nilai tertinggi dengan null
                
                // $numrows=count($data);
                // $numcol=count($data[0]);
                // $minmax=array();
                // dd($numrows);
                // for($col=1; $col<$numcol;$col++){
                //     $coloumndata=array_column($data,$col);
                //     $minmax[$col]=array(
                //         'min'=>min($coloumndata),
                //         'max'=>max($coloumndata)
                //     );
                // }
                
                // for ($i=0; $i < $data; $i++) {
                //     var_dump($data[$i]);
                //     var_dump("---------$i\n");
                // }

                // return  "";

                // dd($data);
                for ($i=0; $i < $data[0]; $i++) {
                    // dd(count($data[0]));//10 
                    // Mendapatkan nilai terendah dan tertinggi dari index [0][1] hingga [19][1]
                    if ($i == 10) {
                        break;
                    }
                    foreach ($data as $array) {
                        // var_dump($array);
                        $value = $array[$i+1];
                        // dd($value= $array[$i+2]);
                        // dd($value);
                        // dd($value);  e[]
                        if ($minValue === null || $value < $minValue) {
                            $minValue = $value;
                        }
                        
                        if ($maxValue === null || $value > $maxValue) {
                            $maxValue = $value;
                        }
                        // dd($maxValue);
                    }
                    // dd($minValue);
                    
                    $minArray[$i] = $minValue; // Menyimpan nilai terendah di index ke [0] pada $minArray
                    $maxArray[$i] = $maxValue; // Menyimpan nilai terendah di index ke [0] pada $minArray
                    
                    $minValue = null; // Reset nilai terendah
                    $maxValue = null; // Reset nilai tertinggi
                }

                // dd($maxArray);

                // dd($rowMin);
                // $temprow=1;
                // dd($data);
                // $datautility = [[]];
                $normalisasiArr = [[]];
                $normalisasi=[[]];
                $rownil=0;
                $coloumn=1;
                foreach ($alternatif2 as $indexa => $a) {
                    // Get all scores for each alternative id
                    $afilter = $secores->where('ida', $a->id)->values()->all();
                    // Loop each criteria
                    foreach ($kriteriabobot2 as $icw => $cw) {
                        // Get all rating value for each criteria
                        $rates = $cscores->map(function ($val) use ($cw) {
                            if ($cw->id == $val->idw) {
                                return $val->rating;
                            }
                        })->toArray();
                        // array_filter for removing null value caused by map,
                        // array_values for reindexing the array
                        $rates = array_values(array_filter($rates));
                        $total = 0;
                        foreach ($rates as $value) {
                            $total += pow($value, 2);
                        }
                        $sqrt = sqrt($total);
                        $normalisasi = $afilter[$icw]->rating / $sqrt;
                        
                        // dd($normalisasi);
                        if($cw->type == "benefit") {
                            $normalisasiArr[$indexa][$icw] = ($normalisasi - $minArray[$icw]) / ($maxArray[$icw] - $minArray[$icw]);
                            // dd($normalisasi);
                            // $normalisasiArr[$indexa][$icw]=$normalisasiArr[$indexa][$icw]*$cw->weight;
                            // dd($normalisasiArr);
                            // $datautility[$rownil][$coloumn]=$normalisasi;
                            // var_dump("masuk benefit");
                        }else if($cw->type == "cost") {
                            $normalisasiArr[$indexa][$icw] = ($maxArray[$icw] - $normalisasi) / ($maxArray[$icw] - $minArray[$icw]);
                            // $normalisasiArr[$indexa][$icw]=$normalisasiArr[$indexa][$icw]*$cw->weight;
                            // dd($normalisasiArr);
                            // var_dump("masuk cost");
                            // $datautility[$rownil][$coloumn]=$normalisasi;
                        }
                        // var_dump($datautility[$rownil][$coloumn]=$normalisasi);
                        // $datautility[$rownil][$coloumn]=$normalisasi;
                        // var_dump($normalisasi . "---$icw");
                        // var_dump($datautility);
                        // $normalisasiArr[$icw] = $normalisasi;
                        // dd($datautility);
                        // dd($normalisasiArr);
                        $result = number_format($normalisasiArr[$indexa][$icw], 3, '.', ''); // Output dengan 6 digit di belakang koma
                        // dd($result);
                        $afilter[$icw]->rating = $result;

                        
                    }
                    // var_dump($datautility);
                    // dd($normalisasiArr);
                    // $rownil++;
                }

                // var_dump($normalisasi);
                //  var_dump($normalisasiArr);
                return view('utility', compact('secores', 'alternatif2', 'kriteriabobot2'))->with('i', 0);
    }
    public function rank()
    {
        $scores = AlternatifScore::select(
            'alternatifscore.id as id',
            'alternatif.id as ida',
            'kriteriabobot.id as idw',
            'kriteriaratings.id as idr',
            'alternatif.nama as name',
            'kriteriabobot.name as criteria',
            'kriteriaratings.rating as rating',
            'kriteriaratings.description as description')
            ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
            ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
            ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
            ->get();
            
        $cscores = AlternatifScore::select(
            'alternatifscore.id as id',
            'alternatif.id as ida',
            'kriteriabobot.id as idw',
            'kriteriaratings.id as idr',
            'alternatif.nama as name',
            'kriteriabobot.name as criteria',
            'kriteriaratings.rating as rating',
            'kriteriaratings.description as description')
            ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
            ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
            ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
            ->get();

            $alternatif = Alternatif::get();
            $kriteriabobot = KriteriaBobot::get();
            $data = [[]];
            $row=0;
            $coloumn=1;
            // Normalization
            foreach ($alternatif as $a) {
                $coloumn=1;
                // Get all scores for each alternative id
                $afilter = $scores->where('ida', $a->id)->values()->all();
                // Loop each criteria
                foreach ($kriteriabobot as $icw => $cw) {
                    // Get all rating value for each criteria
                    $rates = $cscores->map(function ($val) use ($cw) {
                        if ($cw->id == $val->idw) {
                            return $val->rating;
                        }
                    })->toArray();
    
                    // array_filter for removing null value caused by map,
                    // array_values for reindexing the array
                    $rates = array_values(array_filter($rates));
                    $total = 0;
                    foreach ($rates as $value) {
                        $total += pow($value, 2);
                    }
                    $sqrt = sqrt($total);
                    $normalisasi = $afilter[$icw]->rating / $sqrt;
                    $data[$row][$coloumn]=$normalisasi;
                    $coloumn++;
                }
                $row++;
            }
            $secores = AlternatifScore::select(
                'alternatifscore.id as id',
                'alternatif.id as ida',
                'kriteriabobot.id as idw',
                'kriteriaratings.id as idr',
                'alternatif.nama as name',
                'kriteriabobot.name as criteria',
                'kriteriaratings.rating as rating',
                'kriteriaratings.description as description')
                ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
                ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
                ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
                ->get();
                
            $csecores = AlternatifScore::select(
                'alternatifscore.id as id',
                'alternatif.id as ida',
                'kriteriabobot.id as idw',
                'kriteriaratings.id as idr',
                'alternatif.nama as name',
                'kriteriabobot.name as criteria',
                'kriteriaratings.rating as rating',
                'kriteriaratings.description as description')
                ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
                ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
                ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
                ->get();

                $alternatif2 = Alternatif::get();
                $kriteriabobot2 = KriteriaBobot::get();

                $minArray = []; // Array baru untuk menyimpan nilai terendah dan tertinggi

                $minValue = null; // Inisialisasi nilai terendah dengan null
                $maxValue = null; // Inisialisasi nilai tertinggi dengan null

                // for ($i=0; $i < $data; $i++) {
                //     var_dump($data[$i]);
                //     var_dump("---------$i\n");
                // }

                // return  "";

                // dd($data);
                for ($i=0; $i < $data[0]; $i++) { 
                    // Mendapatkan nilai terendah dan tertinggi dari index [0][1] hingga [19][1]
                    if ($i == 10) {
                        break;
                    }
                    foreach ($data as $array) {
                        $value = $array[$i+1];

                        if ($minValue === null || $value < $minValue) {
                            $minValue = $value;
                        }

                        if ($maxValue === null || $value > $maxValue) {
                            $maxValue = $value;
                        }
                    }
                    
                    $minArray[$i] = $minValue; // Menyimpan nilai terendah di index ke [0] pada $minArray
                    $maxArray[$i] = $maxValue; // Menyimpan nilai terendah di index ke [0] pada $minArray
                    
                    $minValue = null; // Reset nilai terendah
                    $maxValue = null; // Reset nilai tertinggi
                }

                // dd($maxArray);

                // dd($rowMin);
                // $temprow=1;
                // dd($data);
                // $datautility = [[]];
                $normalisasiArr = [[]];
                $normalisasi=[[]];
                // $totalAntarKriteria = [];
                $rownil=0;
                $coloumn=1;
                foreach ($alternatif2 as $indexa => $a) {
                    // Get all scores for each alternative id
                    $tmpTotal = 0;
                    $afilter = $secores->where('ida', $a->id)->values()->all();
                    // Loop each criteria
                    foreach ($kriteriabobot2 as $icw => $cw) {
                        // Get all rating value for each criteria
                        $rates = $cscores->map(function ($val) use ($cw) {
                            if ($cw->id == $val->idw) {
                                return $val->rating;
                            }
                        })->toArray();
                        // array_filter for removing null value caused by map,  
                        // array_values for reindexing the array
                        $rates = array_values(array_filter($rates));
                        $total = 0;
                        foreach ($rates as $value) {
                            $total += pow($value, 2);
                        }
                        $sqrt = sqrt($total);
                        $normalisasi = $afilter[$icw]->rating / $sqrt;
                        
                        if($cw->type == "benefit") {
                            $normalisasiArr[$indexa][$icw] = (($normalisasi - $minArray[$icw]) / ($maxArray[$icw] - $minArray[$icw])) * $cw->weight;
                            // dd($normalisasi);
                            // $normalisasiArr[$indexa][$icw]=$normalisasiArr[$indexa][$icw]*$cw->weight;
                            // dd($normalisasiArr);
                            // $datautility[$rownil][$coloumn]=$normalisasi;
  
                        }else if($cw->type == "cost") {
                            $normalisasiArr[$indexa][$icw] = (($maxArray[$icw] - $normalisasi) / ($maxArray[$icw] - $minArray[$icw])) * $cw->weight;
                            // $normalisasiArr[$indexa][$icw]=$normalisasiArr[$indexa][$icw]*$cw->weight;
                            // dd($normalisasiArr);
                            // var_dump("masuk cost");
                            // $datautility[$rownil][$coloumn]=$normalisasi;
                        }
                        // var_dump($datautility[$rownil][$coloumn]=$normalisasi);
                        // $datautility[$rownil][$coloumn]=$normalisasi;
                        // var_dump($normalisasi . "---$icw");
                        // var_dump($datautility);
                        // $normalisasiArr[$icw] = $normalisasi;
                        // dd($datautility);
                        // dd($normalisasiArr);
                        $result = number_format($normalisasiArr[$indexa][$icw], 2, '.', ''); // Output dengan 6 digit di belakang koma
                        $tmpTotal += $result; // Output dengan 6 digit di belakang koma

                        // dd($result);
                        $afilter[$icw]->rating = $result;
                        
                        
                    }
                    // $totalAntarKriteria[$indexa] = $tmpTotal;
                    $a->totalresult = $tmpTotal;
                    $a->save();
                }
                

                
                // dd($normalisasiArr[1]);
                // dd($totalAntarKriteria);
                return view('rank', compact('secores', 'alternatif2', 'kriteriabobot2'))->with('i', 0);
    }

    
    public function hasil($key)
    {
        $alternatif2 = null;
        if ($key === "asc") {
            $alternatif2=Alternatif::orderBy('totalresult', 'asc')->get();
        } else if ($key === "desc") {
            $alternatif2=Alternatif::orderBy('totalresult', 'desc')->get();
        } else {
            return abort(404);
        }

        $kriteriabobot2 = KriteriaBobot::get();
        $secores = AlternatifScore::select(
            'alternatifscore.id as id',
            'alternatif.id as ida',
            'kriteriabobot.id as idw',
            'kriteriaratings.id as idr',
            'alternatif.nama as name',
            'kriteriabobot.name as criteria',
            'kriteriaratings.rating as rating',
            'kriteriaratings.description as description')
            ->leftJoin('alternatif', 'alternatif.id', '=', 'alternatifscore.alternatif_id')
            ->leftJoin('kriteriabobot', 'kriteriabobot.id', '=', 'alternatifscore.kriteriabobot_id')
            ->leftJoin('kriteriaratings', 'kriteriaratings.id', '=', 'alternatifscore.kriteriarating_id')
            ->get();
        
        return view('rank', compact('secores', 'alternatif2', 'kriteriabobot2', 'key'))->with('i', 0);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
