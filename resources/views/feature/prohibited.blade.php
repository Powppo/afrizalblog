@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Galaxy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <!-- Favicon -->
     <link href="{{asset('Template/img/favicon.ico')}}" rel="icon">

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 
     <!-- Flaticon Font -->
     <link href="{{asset('Template/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{asset('Template/css/style.min.css')}}" rel="stylesheet">

<body class="bg-white">

    <!-- Page Header Start -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12 pb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card" style="border-radius: 20px">
                                    <div class="container-fluid page-header mb-5">
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5">
                                        <h2 class="text-primary">Please Login as an Advance User to access this feature!</h2>
                                        <br>
                                        <br>
                                        <img class="w-100" src="{{asset('img/warning2.png')}}" alt="Image" style="max-width: 60%">
                                        <br>
                                        <br>
                                        <p class="m-0 text-black"><a class="text-black" href="/home">
                                            <h3>Return to Home page?</h3>
                                                </a>
                                            </p>
                                            <h4>/</h4>
                                            <a class="text-black" method="POST" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <h3 style="margin-bottom: 110px">{{ __('Do you want to Register as an Advance User?') }}</h3>   
                                            </a>
              
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</html>