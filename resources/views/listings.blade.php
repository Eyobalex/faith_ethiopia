@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h1>Listings</h1>
                    </div>
                    <div class="card-body">

                        @foreach ($listings as $listing)

                            <div class="card m-2">
                                <div class="card-header">{{$listing->title}}</div>
                                <div class="card-body">
                                    <p>{{$listing->description}}</p>
                                    <ul>
                                        <li>Location: {{$listing->location}}</li>
                                    </ul>
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary">Apply</button>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
