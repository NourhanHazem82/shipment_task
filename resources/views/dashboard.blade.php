 

@extends('layouts.parent')


@section('title','Home')

@section('css')
<style>
  body{
    background-color : black;
  }
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.center {
  padding: 70px 0;
  border: 3px solid green;
  text-align: center;
}

</style>
@endsection 

@section('content')

<!-- ___________________________________________ -->

  <img alt="Budget Cars" src="{{ url('/images/logo_camelcasetech.png')}}" >

<!-- <div >
  </div> -->
  <!-- <p style="color:white;" >Welcome To CamelCase for Shipping. </p> -->

@endsection

@section('js')

<script>
</script>


@endsection


