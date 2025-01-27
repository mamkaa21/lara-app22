<?php
namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
       $articles = Posts::latest()->paginate(15);
       return view('frontend.blog',compact('articles'));
   }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $post)
    {
        //
    }
}
