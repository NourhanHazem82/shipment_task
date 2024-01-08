 

@extends('layouts.parent')


@section('title','Shipment')

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
    

   

<!-- --------------------FORM----------------------------------------- -->
<form method="POST" 
    action="{{route('categories.update', [$shipment->id , $shipment->status , $shipment->total_price])}}"  >
{{ csrf_field() }} 

  <div class="form-group">
    <label class="card-title" style="color:white;">Shipment code</label>
    <input type="text" class="form-control" readonly value="{{ $shipment->shipment_code}}">
  </div>
  <div class="form-group">
    <label class="card-title" style="color:white;">Product</label>
    <input type="text" class="form-control" readonly value="{{ $shipment->product->product_name  }}">
  </div>
  <div class="form-group">
    <label class="card-title" style="color:white;">Quantity</label>
    <input type="number" class="form-control"  readonly value="{{ $shipment->total_quantity  }}">
  </div>
  <div class="form-group">
    <label class="card-title" style="color:white;">Total price</label>
    <input type="number" class="form-control"  readonly value="{{ $shipment->total_price  }}">
  </div>
  <div class="form-group">
    <label class="card-title" style="color:white;">Created at</label>
    <input type="text" class="form-control" readonly value="{{ $shipment->created_at  }}">
  </div>
  
  <div class="form-check">
<label class="card-title" style="color:white;">Status</label><br>
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Pending"
    {{ ($shipment->status=="Pending")? "checked" : "" }}
    {{ ($shipment->status=="Done")? "disabled" : "" }}
  >
  <label class="form-check-label" for="exampleRadios1" style="color:white;">
    Pending
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Progress"
  {{ ($shipment->status=="Progress")? "checked" : "" }}
    {{ ($shipment->status=="Done")? "disabled" : "" }}
  >
  <label class="form-check-label" for="exampleRadios2" style="color:white;">
    Progress
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios3" value="Done" 
  {{ ($shipment->status=="Done")? "checked" : "" }}
    {{ ($shipment->status=="Pending")? "disabled" : "" }}
 >
  <label class="form-check-label" for="exampleRadios3" style="color:white;">
    Done
  </label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- --------------------FORM----------------------------------------- -->


 
</div></div>
    

@endsection

