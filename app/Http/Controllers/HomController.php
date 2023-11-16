<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_banner;
class HomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home_banner = home_banner::all();
        return view('admin.home_banner', ['home_banner'=>$home_banner]);
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
        $about_banner = new home_banner();
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $about_banner -> baner_img = 'images/'.$imageName;
        }
        $about_banner ->heading_1 = request('heading_1');
        $about_banner ->heading_2	 = request('heading_2');
        $about_banner ->content = request('content');
        $about_banner->save();



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $home_banner =  home_banner::find($id);
        return view('admin.home_banner_edit',['home_banner'=>$home_banner]);
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
        $about_banner =  home_banner::find($id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $about_banner -> baner_img = 'images/'.$imageName;
        }
        $about_banner ->heading_1 = request('heading_1');
        $about_banner ->heading_2	 = request('heading_2');
        $about_banner ->content = request('content');
        $about_banner->save();
        return redirect('/home-banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_news = home_banner::find($id);
        $admin_news->delete();
        return redirect('/home-banner');
    }
}
