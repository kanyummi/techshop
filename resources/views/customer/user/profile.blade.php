@extends('layouts.customer')

@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Thông tin khách hàng</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{route('home_page')}}">Trang chủ</a></li>
                        <li class="active">Thông tin</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="bg-light rounded h-100 p-4">
                        <form action="{{ route('update-profile', $profile->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Họ và tên</label>
                                <input class="form-control" type="text" name="name" id="name"
                                    value="{{ $profile->name }}">
                                @error('name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" disabled type="email" name="email" id="email"
                                    value="{{ $profile->email }}">
                                @error('email')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <br>
                            <a href="{{route('reset-password', $profile->id)}}" style="margin-right: 16px;" class="text-primary">Đổi mật khẩu</a>

                            <input type="submit" class="btn btn-danger" name="btn-update" value="Cập nhật thông tin">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
