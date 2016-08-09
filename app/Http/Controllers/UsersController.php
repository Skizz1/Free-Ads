<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RedirectsUsers;
use App\Http\Requests;
use App\UsersModel;
use View;

class UsersController extends Controller {
    
	/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $users = UsersModel::all();
	// =$users->toarray();
	// dd($users);
	 return View::make('users.index', compact('users'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    echo "toto";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }

}
