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
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 300px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Contact Me</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="/home">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Contact Me</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container pt-5">
        <div class="row px-3 pb-2">
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Address</h4>
                <p>Malang, East Java</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Phone</h4>
                <p>+62 82225679463</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Email</h4>
                <p>mafrizal575@gmail.com</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pb-5">
                <div class="contact-form" >
                    <div id="success"></div>
                    <form method="POST" action="{{ route('storeContact') }}">
                        @csrf
                        <div class="control-group">
                            <input style="border-radius: 7px" name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea style="border-radius: 7px" name="message" type="text" class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button style="border-radius: 7px" class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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