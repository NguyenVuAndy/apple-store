@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="thank-you-section">
       <h1>Cam on ban <br> da mua hang!</h1>
       <p>Email xac nhan da duoc gui, vui long kiem tra email.</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button">Quay ve trang chu</a>
       </div>
   </div>




@endsection
