<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\sharks;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class sharkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sharks = sharks::all();

        // load the view and pass the sharks
        return view('sharks.index')
            ->with('sharks', $sharks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // load the create form (app/views/sharks/create.blade.php)
        return view('sharks.create');
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
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'shark_level' => 'required|numeric'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('sharks/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $shark = new sharks;
            $shark->name       = $request->get('name');
            $shark->email      = $request->get('email');
            $shark->shark_level = $request->get('shark_level');
            $shark->save();

            // redirect
            Session::flash('message', 'Successfully created shark!');
            return Redirect::to('sharks');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // get the shark
        $shark = sharks::find($id);

        // show the view and pass the shark to it
        return view('sharks.show')
            ->with('sharks', $shark);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
                // get the shark
                $shark = sharks::find($id);

                // show the edit form and pass the shark
                return view('sharks.edit')
                    ->with('shark', $shark);
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
        //
        
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'shark_level' => 'required|numeric'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('sharks/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $shark = sharks::find($id);
            $shark->name       = $request->get('name');
            $shark->email      = $request->get('email');
            $shark->shark_level = $request->get('shark_level');
            $shark->save();

            // redirect
            Session::flash('message', 'Successfully updated shark!');
            return Redirect::to('sharks');
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
         // delete
         $shark = sharks::find($id);
         $shark->delete();
 
         // redirect
         Session::flash('message', 'Successfully deleted the shark!');
         return Redirect::to('sharks');
    }
}
