@extends('admin.layouts.master')

@section('page')
    Add Product
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-10 col-md-10">
            @include('admin.layouts.message')
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Product</h4>
                </div>

                <div class="content">
                    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            @include('admin.products._fields')

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"> Submit </button>
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
