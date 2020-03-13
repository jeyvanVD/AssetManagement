@extends('layout')
@section('page_info')
    <h3>Asset List</h3>
@endsection

@section('contents')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Category</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Serial Number</th>
            <th scope="col">Date of Purchase</th>
            <th scope="col">Series Number</th>
            <th scope="col">User</th>
            <th scope="col">Availability</th>
        </tr>
        </thead>
        <tbody>
        @foreach($assets as $asset)
            <tr>
            <th scope="row">{{$asset->category}}</th>
            <td>{{$asset->brand}}</td>
            <td>{{$asset->model}}</td>
            <td>{{$asset->serial_number}}</td>
            <td>{{$asset->date_of_purchase}}</td>
            <td>{{$asset->series_number}}</td>
            <td>{{$asset->user}}</td>
            <td>{{$asset->availability}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

