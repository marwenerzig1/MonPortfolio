<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','title inconnu')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!----======== CSS ======== -->
    <link href="/css/navbar.css"  rel="stylesheet">
    <link href="/css/style.css"  rel="stylesheet">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--ha4ii base de donnes-->
                    <img src="{{ asset('images/tt.jpg') }}" style="border-radius: 50%;" alt="">
                </span>

                <div class="text logo-text">
                    <!--ha4ii base de donnes-->
                    <span class="name">Marwene Rzig</span>
                    <!--ha4ii base de donnes-->
                    <span class="profession">Full Stack developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="">
                        <a href="/" style="background-color: @yield('home')">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/information" style="background-color: @yield('information')">
                            <i class='bx bxs-info-circle icon'></i>
                            <span class="text nav-text">Information</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="project" style="background-color: @yield('project')">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Project</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="contact"  style="background-color: @yield('contact')">
                            <i class='bx bxs-envelope icon'></i>
                            <span class="text nav-text">Contact</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="https://www.facebook.com/marwene.rzig.5/">
                        <i class='bx bxl-facebook-circle bx-flip-horizontal bx-tada icon' ></i>
                        <span class="text nav-text">Facebook</span>
                    </a>
                </li>
                <li class="">
                    <a href="https://www.linkedin.com/in/marwene-rzig-5ab28b195/">
                        <i class='bx bxl-linkedin-square bx-tada icon' ></i>
                        <span class="text nav-text">LinkedIn</span>
                    </a>
                </li>
                <li class="">
                    <a href="https://github.com/marwenerzig1">
                        <i class='bx bxl-github bx-tada icon' ></i>
                        <span class="text nav-text">Github</span>
                    </a>
                </li>
                <li class="">
                    <a href="https://www.instagram.com/marwenerzig/">
                        <i class='bx bxl-instagram bx-tada icon' ></i>
                        <span class="text nav-text">Instegram</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div id="particles-js"></div>
        @yield('content')
    </section>

    <script src="{{ asset('/js/particles.js') }}" defer></script>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),

      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

    </script>

</body>
</html>