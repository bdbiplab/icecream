@extends('icecreams.layout')

@section('content')
    <h1>Menu</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($icecreams as $icecream)
                <tr>
                    <th scope="row">{{ $icecream->id }}</th>
                    <td>{{ $icecream->type }}</td>
                    <td>{{ $icecream->name }}</td>
                    <td>{{ $icecream->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
