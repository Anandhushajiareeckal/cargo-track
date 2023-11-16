<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_message=message::all();
        return view('admin.admin_message', ['admin_message'=>$admin_message]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new message();
            $message->name = request("name");
        $message->email = request("email");
        $message->phone = request("phone");
        $message->message = request("message");
        $message->save();
        return redirect('/contact');
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
        $admin_location = message::find($id);
        $admin_location->delete();
        return redirect('/admin-message');
    }
}
