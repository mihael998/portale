<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Struttura;

class StruttureController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $utente=auth()->user();
    $strutture=$utente->strutture()->get();
    $page["nome"]="home";

    if (Gate::allows('see-group-dashboard')) {
      return view("pages.app.dashboard",[
        "utente"=>$utente,
        "strutture"=>$strutture,
        "page"=>$page
      ]);
    }
    else
    return redirect()->route("struttura",["id"=>$strutture->first()->id]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */

  public function show($id)
  {
    $page["nome"]="home";
    $utente=auth()->user();
    if ($utente->can('access', Struttura::find($id))) {
      return view("pages.app.home",[
        "utente"=>$utente,
        "struttura"=>Struttura::find($id),
        "page"=>$page
      ]);
    }

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $page["nome"]="settings";
    $utente=auth()->user();
    if ($utente->can('access', Struttura::find($id))) {
      return view("pages.app.settings",[
        "utente"=>$utente,
        "struttura"=>Struttura::find($id),
        "page"=>$page
      ]);
    }
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    if(Gate::allows('edit-property')){
      $parametri=$request->all();
      $struttura=Struttura::find($id);
      $struttura->nome=$parametri["nome"];
      $struttura->indirizzo=$parametri["indirizzo"];
      $struttura->comune=$parametri["comune"];
      $struttura->provincia=$parametri["provincia"];
      $struttura->cap=$parametri["cap"];
      $struttura->save();
      return redirect()->back();
    }

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
