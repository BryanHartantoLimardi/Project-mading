@extends('template.bootstrap')

@section('title, post')
@section('body-container')

<body style="background-color:black">

<div class="container" style="">
    <div class="row kotak" style="position:absolute;">
        <div class="kotak-kuning">
            <h2 style="margin-top:15px; font-style:bold;">Post Pertanyaanmu</h2>
        </div>
        <div class="col-bg-2">            
            <div class="bulat-kiri"></div><p style="margin-bottom:10px;">Wilson AIken Tedjakusuma
                <br />
                <span style="background-color:#FFC600; height:30px; padding-left:15px; padding-right:15px; border-radius:2px;">murid</span>            
            </p> 
            <b>Ajukan Pertanyaan</b>
            <div class="body-contents">
                <textarea class="tulis-pertanyaan">tuliskan pertanyaan mu disini</textarea>
                <br />
                <select class="pilih mb-2"   value="test">
                    <option>pilih kategori</option>
                    <option>pilih kategori</option>
                    <option>pilih kategori</option>
                </select>
                <br />
                <input type="submit" value="tanyakan pertanyaan mu" style="background-color:#FFC600; padding:10px; border-radius:10px; border-width:0;  width:250px;">
            </div>     
            
                              
        </div>

         
        

    </div>
</div>