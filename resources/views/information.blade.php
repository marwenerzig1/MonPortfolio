@extends('base.navbar') 
@section('title','Information') 

@section('information','black') 

<style>
    .title_contact {
        font-family: cursive ;
        font-size: 45px ; 
        font-weight: bold ; 
        color: #ffd700 ;   
    }
    .paragraphe {
        color: white ; 
        font-family: cursive;
        font-size: 25px ; 
        margin-top: 20px ; 
    }      
  .text1 {
    position: absolute;
    top: 5%;
    left: 5%;
    right: 5%;
  }


</style>

@section('content')
    <div class="text1"> 
        <h1 class="title_contact">About me :</h1>
        <p class="paragraphe">I am a developer , from Tunisia with a great capacity for organization and initiative as well as advanced knowledge in design and development. I would like to bring to your my passion, my computer knowledge and my excellent interpersonal skills. I'm passionate about programming and always eager to learn new technologies and i'm always open to new challenges and new objectives.</p>
        <br>
        <h1 class="title_contact">Technologies :</h1>
        <p class="paragraphe">I've worked with a range of technologies in the web and mobile development world.</p>


            <div class="row" id="langage">
              <div class="col-lg-4 text-center">
                <img src="images/laravel.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >Laravel</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/react.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >React Native</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/react.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >React js</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img src="images/php.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >Php</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/java.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >Java</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/android.png" alt="Generic placeholder image" width="200px" height="150px">
                <h2 style="color: beige" >Android (java)</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/mongo.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >MongoDB</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/bootstrap.png" alt="Generic placeholder image" width="200px" height="150px">
                <h2 style="color: beige" >Bootstrap</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/js.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >Java Script</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/git.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >Git</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/mysql.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >MySql</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/pythonv.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >Python</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/ps.png" alt="Generic placeholder image" width="150px" height="150px">
                <h2 style="color: beige" >Photoshop</h2>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 text-center">
                <img  src="images/Illustrator-Logo.png" alt="Generic placeholder image" width="250px" height="150px">
                <h2 style="color: beige" >Illustrator</h2>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <br>
    </div>
@endsection