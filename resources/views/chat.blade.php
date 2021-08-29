@extends('template.bootstrap')

@section('title','chat')

@section('body-container')
<body style="background-color:black;">
<div class="container" >
    <div class="row kotak">
    
        <div class="col-bg-2"><h2 style="margin-top:20px; font-weight:bolder"><span class="iconify" data-icon="eva:arrow-ios-back-outline"></span> Group design &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="iconify width" data-icon="carbon:overflow-menu-horizontal" data-width="40"></span></h2>
            <hr />
            <p class="opacity">Selasa, 18 April 2021</p>
                
            <div class="bulat-kiri"></div><p>Bryan</p>
                <div class="kotak-chat">    
                    <div class="mt-1">
                        <p style="margin-left:15px;">Halo nama saya Bryan, salam kenal </p>
                    </div>
                </div>    
                <div class="bulat-kiri"></div><p>WIlson</p>
                <div class="kotak-chat-krg">
                    <div class="mt-1">    
                        <p style="margin-left:15px;">iya Halo, nama saya Wilson </p>
                    </div>
                </div>   
                <div class="bulat-kanan"></div><p style="text-align:right;" >You</p>
                <div class="kotak-chat-kanan">
                    <div class="mt-1">                    
                        <p style="margin-left:15px;">Halo nama saya evo, salam kenal </p>
                    </div>
                </div>
                <div class="bulat-kiri"></div><p>Raymond</p>
                <div class="kotak-chat-lbh"> 
                    <div class="mt-1">   
                        <p style="margin-left:15px;">Halo nama saya Raymond, salam kenal ya </p>
                    </div>
                </div> 
                <hr /> 
                  
        </div>
        
         <div class="inline-block">
            <span class="iconify" data-icon="gg:attachment" data-width="35" style="color: #ffc600;"></span>
        </div>
        <div class="inline-block-input">
            <input type="text" style="width:240px; height:30px; border-radius:5px; border-width:1px;" value="write your message">
        </div>  
        <div class="inline-block-go">
            <span class="iconify" data-icon="fluent:send-24-filled" data-width="30" style="color: #ffc600;"></span>
        </div>      
    </div>
    <div class="content-luar">
        <div class="luar">
            <span class="iconify" data-icon="bi:chat-fill" data-width="30" style="color: white;"></span>
        </div>
    </div>
    
    
</div>
</body>
