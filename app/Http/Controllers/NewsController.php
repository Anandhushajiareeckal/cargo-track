<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\news;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_news=news::all();
        return view('admin.admin_news', ['admin_news'=>$admin_news]); 
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
        $admin_news = new news();

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_news -> image = 'images/'.$imageName;
        }
        $admin_news->heading = request("heading");
        $admin_news->content = request("content");
        $admin_news->save();
        return redirect('/admin-news');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin_news = news::find($id);
        return view('admin.news_edit', ['admin_news'=>$admin_news]); 
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
        $admin_news = news::find($id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

             $admin_news -> image = 'images/'.$imageName;
        }
        $admin_news->heading = request("heading");
        $admin_news->content = request("content");
        $admin_news->save();
        return redirect('/admin-news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_news = news::find($id);
        $admin_news->delete();
        return redirect('/admin-news');
    }
}
