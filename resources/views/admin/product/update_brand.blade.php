@extends('layouts.admin')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-light text-dark font-weight-bold">
                        EDIT A BRAND
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store_product_brand', $product_brand->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Brand Name</label>
                                <input class="form-control" type="text" name="name" id="name"
                                    value="{{ $product_brand->name }}">
                                @error('name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="role">Status</label>
                                {{ Form::select('status', ['Pending' => 'Pending', 'Active' => 'Active'], $product_brand->status, ['class' => 'form-control']) }}
                                @error('status')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <br>

                            <input type="submit" class="btn btn-primary" name="btn-update" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
