 
 

@extends('layouts.parent')


@section('title','Journal entity')

@section('css')

<style>

</style>

@endsection

@section('content')

<table class="table table-sm">
    <thead>
        <tr>
            <th>Type</th>
            <th>Shipment code</th>
            <th>Amount</th>
            <th>Created at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($all_entities as $entity)
        <tr>
            <td>{{ $entity->type }}</td>
            <td>
                <a href="{{route('categories.edit',$entity->shipment->id)}}" class="ag-courses-item_link">
                    {{ $entity->shipment->shipment_code }}
                </a>
            </td>
            <td>{{ $entity->amount }}</td>
            <td>{{ $entity->created_at }}</td>
             
        </tr>
       @endforeach
    </tbody>
</table>


@endsection


@section('js')
<script>
<script>
@endsection
