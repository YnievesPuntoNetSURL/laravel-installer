@extends('vendor.installer.layouts.master')

@section('template_title')
      Welcome To Laravel App
@endsection

@section('title')
  Laravel App
@endsection

@section('container')
    @if($error == 1045)
    <p class="text-center alert alert-info">
      <strong>Check You DataBase Credentials Again </strong>
      <strong> Note: </strong> If You Are On Local Development Please Restart Your Server Before Changing Credentials Now.
    </p>
    <p class="text-center alert alert-info">
     Do Not Worry If You Are Seeing This Message Then, It seems Like you are providing wrong credentials,
     Either your Database Name Or Password is Wrong Or
     You Wouldn't have Set Your DataBase Password for Xampp or Lamp Or Wampp or any other environment setup.
    </p>
    @else
    <p class="text-center alert alert-danger">
     Your Error Code is: {{$error}}. Please Create a Ticket For This And Inform Author. Thanks.
    </p>
    @endif
    <p class="text-center">
      <button onclick="window.history.go(-1); return false;" class="button">
        <i class="fa fa-angle-left fa-fw" aria-hidden="true"></i>
        Try Again
      </button>
    </p>
@endsection
