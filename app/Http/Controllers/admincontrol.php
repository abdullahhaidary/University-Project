<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class admincontrol extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DB::table('users')
            ->select('users.*')
            ->get();
        return view('admin.user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */

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
        $data=DB::table('users')
            ->select('users.*')
            ->where('users.id', '=', $id)
            ->get();
        dd($data);
//        return view('admin/user_edit');
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
    public function uperadmin()
    {

    }
}
