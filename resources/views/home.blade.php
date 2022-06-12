@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <form action="{{route('addListing')}}" method="post">
                            @csrf
                        <!-- Text input -->
                        <div class="form-outline mb-4">
                          <input type="text" id="form6Example3" name='title' class="form-control" />
                          <label class="form-label" for="form6Example3">Title</label>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                          <input type="text" id="form6Example4" name='location' class="form-control" />
                          <label class="form-label" for="form6Example4">Location</label>
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                          <textarea class="form-control" id="form6Example7" name='description' rows="4"></textarea>
                          <label class="form-label" for="form6Example7">Description</label>
                        </div>



                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Post</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
