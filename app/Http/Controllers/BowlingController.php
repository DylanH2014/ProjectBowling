<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Auth;

use DB;

use Illuminate\Support\Facades\Input;

use App\Bowling;

class BowlingController extends Controller
{
    
	public function index() {

		return view('index');

	}

	public function addGame() {

		$input = Input::all();
		// dd($input);
		
		$name = strtolower($input['name']);
		$score = $input['score'];
		// dd(gettype($score));

		// $highScore = Bowling::where('user', $name)->pluck('high_score');

		$newGame = new Bowling;
		$newGame->user = $name;
		$newGame->score = $score;
		$newGame->save();

		return view('index');

	}

	public function show($id) {

		$game = Bowling::find($id);

		return view('show', compact('game'));

	}


	public function showAll($user) {

		// all games
		$allGames = Bowling::where('user', $user)->get();
		// high score
		$highScore = Bowling::where('user', $user)->max('score');
		// average score
		$averageScore = round(Bowling::where('user', $user)->avg('score'));
		// previous game
		$recentGame = Bowling::where('user', $user)->orderBy('id', 'DESC')->first()->score;


		$params = array(
			'allGames' => $allGames,
			'highScore' => $highScore,
			'averageScore' => $averageScore,
			'recentGame' => $recentGame
		);



		// return view('showAll', compact('allGames'));
		return view('showAll', $params);

	}

}
