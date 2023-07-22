@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <title>Galaxy</title>

    <!-- Favicon -->
    <link href="{{asset('Template/img/favicon.ico')}}" rel="icon">

    <!-- Font Awesome -->
    <link href="{{asset('Template/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('Template/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Template/css/style.min.css')}}" rel="stylesheet">
</head>


<body>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width: 100%" src="{{asset('img/home.jpeg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 style="color: white; font-size: 40px">Welcome {{ Auth::user()->name,}}, This is my Personal Blog!</h2>
                        <hr>
                    </div>
                </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- GYM Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">About me?</h4>
            <h4 class="">
                <hr>
                <div class="container pt-5 team">
                        <div style="display: block; margin-left: auto; margin-right: auto; width: 30%;">
                            <div class="card border-0 bg-secondary text-center text-white">
                                <img class="card-img-top" src="{{asset('Template/img/afrizal.jpg')}}" alt="">
                                <div class="card-social d-flex align-items-center justify-content-center">
                                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://twitter.com/hlfheartd_gdbye"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.instagram.com/aafrizal._"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="card-body bg-secondary">
                                    <p class="card-text">Muhammad Afrizal Hamimudin</p>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <h4>
                Hello Everyone, I'm thrilled to introduce myself as an Informatics Engineering 
                student with a strong passion for website development.
                 My name is Muhammad Afrizal Hamimudin, and I'm currently pursuing my 
                 studies in Informatics Engineering at State Polytechnic of Malang. 
                 From an early age, I've always been fascinated by the digital world and the way 
                 technology empowers us to create innovative solutions.
                 What I find most interesting about website development is the ability to transform ideas into reality.
                  Crafting intuitive user interfaces and ensuring smooth user experiences bring me immense
                   joy and satisfaction. I believe that a well-designed website can not only convey 
                   information effectively but also evoke emotions and leave a lasting impression on visitors.</h4>    
                <hr>
                <h4 class="text-primary font-weight-bold">Projects Done</h4>
                <h4>Several Projects have been created by me during my Study Program as an Informatics
                    student. Click link below to see my project through github link!
                </h4>
            </h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{asset('Template/img/feature-1.png')}}" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Trade for all (TROLL)</h4>
                        <a href="https://github.com/Powppo/troll.git">Project Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{asset('Template/img/feature-1.png')}}" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Photography Website</h4>
                        <a href="https://github.com/Powppo/webFinalProject.git">Project Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{asset('Template/img/feature-1.png')}}" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Galaxy Gym Fitness Website</h4>
                        <a href="https://github.com/Powppo/GalaxyWeb.git">Project Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{asset('Template/img/feature-1.png')}}" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Student Admission System</h4>
                        <p>Frontend
                            <a href="https://github.com/Powppo/final_react.git">Project Link</a>
                        </p>
                        <p>Backend
                            <a href="https://github.com/Powppo/final_react.git">Project Link</a>
                        </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->    

    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <div class="">
                        <h2 class="text-white mb-3">Interests</h2>
                        <p>I have a huge interest in design and Web Development. Especially using Laravel Framework.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                    <div class="">
                        <h2 class="text-white mb-3">Stand Out Skills</h2>
                        <p>Leadership, Communication, Time management, Able to Work Independently.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <div class="">
                        <h2 class="text-white mb-3">Hobbies</h2>
                        <p>Developing Website, Reading, Illustrating, and Fitness.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
@endsection
