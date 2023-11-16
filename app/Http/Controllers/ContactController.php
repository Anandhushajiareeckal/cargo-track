<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_contact = contact::find($id=1);
        return view('admin.admin_message', ['admin_contact'=>$admin_contact]); 
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
        // $admin_contact = new contact();
        // $admin_contact->heading = request("heading");
        // $admin_contact->content_1 = request("content_1");
        // $admin_contact->content_2 = request("content_2");
        // $admin_contact->save();
        // return redirect('/admin-about');
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
        $id = 1;
        $admin_contact = contact::find($id);
        return view('admin.admin_contact', ['admin_contact'=>$admin_contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin_contact = contact::find($id);
       
        $admin_contact->phone = request("phone");
        $admin_contact->email = request("email");
        $admin_contact->addres = request("addres");
        $admin_contact->save();
        return redirect('/admin-contact/1/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
