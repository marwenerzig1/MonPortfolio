@extends('base.navbar') 
@section('title','Home') 

@section('home','black') 

<style>
.Bloc {
    position: absolute;
    top: 20%;
    left: 10%;
}
.img_marwene {
    border-radius: 50%;
    width: 50% ; 
    float: left;
}
.name {
    font-weight: bold ; 
    font-size: 40px ; 
    color : white ; 
}
.surname {
    font-weight: 50 ; 
    font-size: 35px ; 
    color : white ; 
    word-spacing: 5.2px;

}
.sursurname {
    color : #ffd700 ; 
    font-size: 25px ; 
    margin-top: 2px ; 
}
.textee {
   position: relative;
   left: 150px ; 
   top: 80px ; 
}
</style>

@section('content')
    <div class="Bloc">
        <div class="img">
            <img src="{{ asset('images/marwene.jpg') }}" class="img_marwene" alt="">
        </div>
        <div class="textee">
            <h1 class="name">Welcome to My Personal Portfolio , </h1>
            <h6 class="surname">I'm Marwene Rzig</h6>
            <p class="sursurname">a Full Stack Developer</p>
        </div>
    </div>
@endsection