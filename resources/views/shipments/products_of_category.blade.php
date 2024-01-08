 

@extends('layouts.parent')


@section('title','Home')

@section('css')

<style>
    :root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  background: #111 !important;
}

.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 5px solid;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}
</style>

@endsection

@section('content')

<div class="container mx-auto mt-4">
  <div class="row">
      @foreach ($products as $product)
    <div class="col-md-4">

      <div class="card" style="width: 18rem;">
  <!-- <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title">{{ $product->product_name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">The price</h6>
    <p class="card-text" style="text:bold;">
        {{ $product->price }}
    </p>
        <a href="{{route('categories.makeShipment',$product->id)}}" class="ag-courses-item_link">Create new shipment</a>
     
  </div>
  </div>
    </div> 
    @endforeach   
</div></div>
    

@endsection

