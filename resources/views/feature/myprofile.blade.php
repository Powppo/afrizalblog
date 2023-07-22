@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <div>

    <div class="d-flex flex-column text-center mb-5">
        <h4 class="display-4 font-weight-bold " class="text-black">My Profile</h4>
        <br>
        <h4 class="text-primary">Click Edit to Customize your Profile!</h4>
        <br>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">ID</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0" value="{{ $user->id }}">{{$user['id']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0" value="{{ $user->name }}">{{$user['name']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">Email Address</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0" value="{{ $user->email }}"> {{$user['email']}}</p>
              </div>
            </div>
        
        <br>
    <div class="row mb-0" >
        <div class="col-md-8 offset-md-2">
          <form method="GET" action= {{ route('editProfile', $user->id) }}>
            <div class="row justify-content-center" method="GET" action= {{ route('editProfile', $user->id) }}>
                <button class="btn btn-outline-primary" type="submit" id="edit" style="border-radius: 7px">Edit</button>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection
</html>