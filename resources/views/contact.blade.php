@extends('base.navbar') 
@section('title','Contact') 

@section('contact','black') 

<style>
    .Bloc {
    position: absolute;
    top: 20%;
    left: 8%;
    }
    .txt1 {
        font-family: cursive;
        font-size: 35px ; 
        color: white ; 
    }
    .txt2 {
        font-family: cursive;
        font-size: 25px ; 
        color: white ; 
    }
    .email {
        color: #ffd700 ;
        font-size: 40px ;  
        padding-right: 15px ; 
        position: relative; 
        top : 9px ; 
    }
    .phone {
        color: #14a007 ;
        font-size: 40px ;  
        padding-right: 15px ; 
        position: relative; 
        top : 9px ; 
    }
    .title_contact {
        font-family: cursive ;
        font-size: 45px ; 
        font-weight: bold ; 
        color: #ffd700 ;   
    }
    @media screen and (max-width: 1024px) {
    .Bloc {
        width: 100%; 
    }
    }
    @media screen and (max-width: 768px) {
    .Bloc {
        position: absolute;
        top: 10%;
        left: 8%;
        width: 90%;
    }
    .txt1 {
        width: 90% ; 
    }
    .txt3 {
        width: 90% ; 
    }
    }
    @media screen and (max-width: 480px) {
    .txt3 {
        width: 70% ; 
    }
    }
</style>

@section('content')
    <div class="Bloc">
        <h1 class="title_contact">Contact :</h1>
        <br>
        <h2 class="txt1">Wanna get in touch or talk about a project ?<br>Feel free to contact me via email at</h2>
        <h2 class="txt3"> <span class="email"><i class='bx bxs-envelope bx-tada bx-rotate-90' ></i></span> <a href = "mailto: rzig.marwene@yahoo.com" style="text-decoration: none"><span class="txt2">rzig.marwene@yahoo.com</span> </a></h2>
        <h2 class="txt1" >or call me on</h2>
        <h2> <span class="phone"><i class='bx bx-phone bx-tada' ></i></span> <span class="txt2"> (+216)  <a href="tel:53667475" style="text-decoration: none"><span class="txt2">53 667 475</span></a></span></h2>
    </div>
@endsection