@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">Create Category</div>

                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="post">
                            @csrf
                            <div class="from-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control
                                    @error('name')
                                        is-invalid
                                    @enderror
                                    ">
                            </div>
                            @error('name')
                                <span><strong class="text-danger">{{$message}}</strong></span>
                            @enderror
                            <div class="from-group my-3">
                                <button
                                    type="submit"
                                    class="btn btn-outline-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
