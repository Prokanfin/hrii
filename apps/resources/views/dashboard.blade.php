
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<!--navbar-->  
@extends('layouts.master')
@section('navbar')

<!--/navbar--> 

<!--sidebar-->
@section('sidebar')
<!--/sidebar-->


<!--grid menu-->

<!--/grid menu-->

<!-- content -->
@section('content')
<div class="row">
    <!--Calendar-->
    <div class="col-sm-8">
        Calendar
    </div> <!--/Calendar-->
    <!--กล่อง 4 กล่อง-->
    <div class="4">
        กล่อง 4 กล่อง
       @if(Request::is('dashboard'))
         hello
       @endif
        
    </div>
</div>   
@endsection

<!-- /Page -->
<!-- End Page -->
<!-- Footer -->
@section('footer')

