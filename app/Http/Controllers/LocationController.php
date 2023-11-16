<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_location=location::all();
        return view('admin.admin_location', ['admin_location'=>$admin_location]); 
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
        $admin_news = new location();
        $admin_news->name = request("name");
        $admin_news->company_name = request("company_name");
        $admin_news->contact = request("contact");
        $admin_news->email = request("email");
        $admin_news->save();
        return redirect('/admin-location');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        $admin_location = location::find($id);
        return view('admin.admin_location_edit', ['admin_location'=>$admin_location]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin_location = location::find($id);
        $admin_location->name = request("name");
        $admin_location->company_name = request("company_name");
        $admin_location->contact = request("contact");
        $admin_location->email = request("email");
        $admin_location->save();
        return redirect('/admin-location');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_location = location::find($id);
        $admin_location->delete();
        return redirect('/admin-location');
    }
}
