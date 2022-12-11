@extends('layouts.admin')

@section('content')
    <div id="content" class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">ADD A USER</h6>
                    <form action="{{ route('add_user') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="thumbnail">
                            @error('thumbnail')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password-confirm">Password Confimred</label>
                            <input class="form-control" type="password" name="password-confirm" id="password-confirm">
                            @error('password-cofirm')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" name="btn-add" value="Add a new User">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
