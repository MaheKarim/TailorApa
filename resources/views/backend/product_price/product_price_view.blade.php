@extends('backend._layout')

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show All Products Making Price')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex align-items-center">
                            <a href="{{ route('addPriceShow') }}" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Add Price Making
                            </a>
                        </div>

                    </div>
                    <div class="card-body">
                        <!-- Modal -->

                        <!-- Notification Start Here -->
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    <!-- Notification End Here -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Making Price</th>
                                    <th>Minimum Making Day</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($prices as $price)
                                    <tr>
                                        <td> {{ $price->dress_name }} </td>
                                        <td> {{ $price->dress_price }} </td>
                                        <td> {{ $price->dress_making_day }} </td>

                                        <td>
                                            <div class="form-button-action">

                                                <a href="{{ route('deletePriceMaking' , $price->id) }}" type="button" data-toggle="tooltip" title="delete" class="btn btn-link btn-danger" data-original-title="Remove">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
