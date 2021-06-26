<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Accounts = Account::paginate(10);
        return view('Admin.user')->with('Accounts',$Accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.create');
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
        $Accounts = new Account;
        $Accounts->username       = $request->get('username');
        $Accounts->password      = $request->get('password');
        $Accounts->name     = $request->get('name');
        $Accounts->phone    = $request->get('phone');
        $Accounts->role     = $request->get('role');
        $Accounts->payment  = $request->get('payment');
        $Accounts->images     = $request->get('avatar');
        $Accounts->save();

        // redirect
        return redirect()->route('Admin.index');
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
        $Accounts = Account::find($id);
        return view('Admin.edit')->with('Accounts',$Accounts);
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
        
        $Accounts = Account::find($id);
        $Accounts->username       = $request->get('username');
        $Accounts->password      = $request->get('password');
        $Accounts->name     = $request->get('name');
        $Accounts->phone    = $request->get('phone');
        $Accounts->role     = $request->get('role');
        $Accounts->payment  = $request->get('payment');
        $Accounts->images     = $request->get('avatar');
        $Accounts->save();
        //echo $request;

        // redirect
        return redirect()->route('Admin.index');

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
                //
         // delete
         $Accounts = Account::find($id);
         $Accounts->delete();
 
         return redirect()->route('Admin.index');
    }

}
