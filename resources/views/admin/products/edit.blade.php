@extends('admin.layouts.master')

@section('page')
    Edit Product
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-10 col-md-10">
            @include('admin.layouts.message')
            <div class="card">
                <div class="header">
                    <h4 class="title">Produt Product</h4>
                </div>

                <div class="content">
                    <form method="POST" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">

                                @include('admin.products._fields')

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                </div>

                            </div>

                        </div>

                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
