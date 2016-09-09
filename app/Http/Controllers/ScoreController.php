<?php

namespace App\Http\Controllers;


use App\Score;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ScoreController extends Controller{


   public function index(){
       $scores  = Score::orderBy('score','desc')->get();
       return response()->json($scores);
   }

   public function createScore(Request $request){

       $score = new Score;

			 $score->name = $request->name;
			 $score->score = intval($request->score);

			 return  $score->save();
   }

}
?>
