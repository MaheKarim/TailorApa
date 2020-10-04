@extends('backend._layout')


@section('title')
    Add Products Making Price
@endsection
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Product Making Price')
            </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{ url('/home') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Product Making Price Page</a>
                </li>

            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-title">Add Product Making Price Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">

                                <!-- error message -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <!-- error message end -->
                                <!-- Notification Start Here -->
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                            @endif
                                <!-- Notification End Here -->
                                <form action="{{ route('storeDataPriceMaking') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Add Product Name</label>
                                        <input type="text" class="form-control" name="dress_name" id="title"  placeholder="Enter Product Name" required>

                                        <br>
                                        <label for="text">Enter Product Making Price</label>
                                        <input type="text" class="form-control" name="dress_price" id="text" placeholder="Product Making Price" required>
                                        <br>

                                        <label for="text">Minimum Making Day</label>
                                        <input type="text" class="form-control" name="dress_making_day" id="text" placeholder="Minimum Dress Making Day" required>

                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="{{ route('makingPriceShow') }}" class="btn btn-danger">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection



