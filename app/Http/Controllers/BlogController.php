<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return response([
            'status' => true,
            'message'=> "All Blogs",
            'data'=> $blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->save();
        return response()->json([
            'status' => true,
            'message' => "Blog added",
            'data' => $blog,
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return response([
            'status' => true,
            'message'=> "blog",
            'data'=> $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->input('Utitle');
        $blog->description = $request->input('Udescription');
        $blog->save();
        return response()->json([
            'status' => true,
            'message' => "Updated",
            'data' => $blog,
        ]);
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
        //āš
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /* $blog = Blog::delete($id);
        return response()->json([
            "data" => $blog,
            'message'=> "BLOG DELETED"
        ]);*/
        return "lohs";
    }
}
