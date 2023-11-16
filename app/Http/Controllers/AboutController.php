<?php

namespace App\Http\Controllers;
use App\Models\about_banner;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_banner = about_banner::find($id=1);
        return view('admin.about_edit', ['about_banner'=>$about_banner]); 
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
        $about_banner = new about_banner();
        $about_banner->heading = request("heading");
        $about_banner->content_1 = request("content_1");
        $about_banner->content_2 = request("content_2");
        $about_banner->save();
        return redirect('/admin-about');
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
        $about_banner = about_banner::find($id);
        return view('admin.about_edit', ['about_banner'=>$about_banner]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about_banner = about_banner::find($id);
       
        $about_banner->heading = request("heading");
        $about_banner->content_1 = request("content_1");
        $about_banner->content_2 = request("content_2");
        $about_banner->save();
        return redirect('/admin-about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about_banner = about_banner::find($id);
        $about_banner->delete();
        return redirect('/admin-about');
    }
}
