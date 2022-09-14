<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Post::all();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->first_name = $request->first_name;
        $post->last_name = $request->last_name;
        $post->contact_num = $request->contact_num;
        $post->user_name = $request->user_name;
        $post->email = $request->email;
        $post->select_company = $request->select_company;
        $post->user_type = $request->user_type;
        $result = $post->save();
        if($result){
            return ["result"=>"Post added successfully"];
        }else{
            return ["result"=>"Post not added"];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Post ::find($id);
        return $result;
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
        $post = Post::find($id);
        $post->first_name = $request->first_name;
        $post->last_name = $request->last_name;
        $post->contact_num = $request->contact_num;
        $post->user_name = $request->user_name;
        $post->email = $request->email;
        $post->select_company = $request->select_company;
        $post->user_type = $request->user_type;
        $result = $post->save();
        if($result){
            return ["result"=>"Post updated successfully"];
        }else{
            return ["result"=>"Post not Updated"];
        }

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
    }
}
