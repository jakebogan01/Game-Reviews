<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class GamesController extends Controller
{
    public function index(){
        // grab all games from databaase
        $games = Games::all();
        return view('games.index',[
            'games' => $games,
            'more'=>false
        ]);
    }

    public function show($id){
        // grabbing data for one specific game
        $game = Games::findOrFail($id);
        return view('games.show',[
            'game' => $game
        ]);
    }

    public function create(){
        return view('games.create');
    }

    public function update(){
        // grab all games from data base
        $games = Games::all();
        return view('games.index',[
            'games' => $games,
            // push more variable to show all games not just 10
            'more'=>true
        ]);
    }

    public function store(Request $request){

        //validate form
        $this->validate($request,[
            'title'=>'required|max:255',
            'year'=>'required|integer|min:1980|max:2021|min:4',
            'price'=>'required|numeric|gt:0|gte:0',
            'url'=>'required|url',
            'description'=>'required'
        ]);
        
        //store games
        Games::create($request->only('title','year','price','url','description'));

        //redirect user
        return redirect('/admin')->with('status','Upload Successful!');
    }

    public function gamelist(){
        // grab all games from databaase
        $games = Games::all();
        return view('games.delete',[
            'games' => $games,
        ]);
    }
    public function destroy($id){
        // find and delete a game
        $game = Games::findOrFail($id);
        $game->delete();

        return redirect('/delete')->with('status','Delete Successful!');
    }

    public function restore(){
        Games::onlyTrashed()->restore();

        //redirect user
        return redirect('/delete')->with('status','Rollback Successful!');
    }
}
