<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mading;

class MadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function mainpage()
    {
        $posts = mading::all();
        return view('home.indexafterlogin', ["posts"=>$posts]);
    }
    public function detailprofile()
    {
        return view ('home.detailprofile.index');
    }
    public function profile()
    {
        return view('profile.profile');
    }

    public function edit_profile()
    {
        return view('profile.editprofile');
    }
    public function about_profile()
    {
        return view('profile.aboutprofile');
    }
    public function pertanyaan_profile()
    {
        return view('profile.editprofile');
    }
    public function modal()
    {
        return view('popup.modal');
    }
    public function QandA()
    {
        $post = mading::latest()->get();
        return view('popup.Q&A', ["post"=>$post]);
    }
    public function member()
    {
        return view('popup.member');
    }
    public function post()
    {
        return view('popup.post');
    }
    public function addpost()
    {
        return view('popup.coba');
    }    

    public function karya()
    {
        return view('popup.karya');
    }

    public function chat()
    {
        return view('popup.chat');
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
        $post = new mading();


        $post->pertanyaan = $request->pertanyaan;
        $post->kategori = $request->kategori;
        $post->save();

        return redirect('/Q&A');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
