<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $car = DB::table('cars')->get();
      return view('cars.showall', array('car' => $car));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */


    public function create()
    {
    $car = new Car;
    return view('cars.create', ['car' => $car]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
    $car = new \App\Car;

    // populate the model with the form data
    $car->make = $request->make;
    $car->model = $request->model;

    // save the model to create a new object in the database
  if (!$car->save()) {
      $errors = $car->getErrors();
      return redirect()
            ->action('CarController@create')
        ->with('errors', $errors)
        ->withInput();
    }

    // success!
    return redirect()
      ->action('CarController@create')
      ->with('message', 'Your '. $car->make . ' ' 
                . $car->model . ' has been created!');

    // success!
    
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    	$car = DB::table('cars')->where('id', $id)->first();

         
      return view('cars.show', array('car' =>  $car));
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
