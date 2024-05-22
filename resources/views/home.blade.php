@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <ul>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">company</th>
                    <th scope="col">departure_station</th>
                    <th scope="col">arrival_station</th>
                    <th scope="col">departure_time</th>
                    <th scope="col">arrival_time</th>
                    <th scope="col">train_code</th>
                    <th scope="col">carriages</th>
                    <th scope="col">on_time</th>
                    <th scope="col">cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{$train->id}}</th>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriages}}</td>
                    <td>{{$train->on_time}}</td>
                    <td>{{$train->cancelled}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
</main>

@endsection