@extends('backend._layout')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Custom Booking Page')
            </h4>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-title">Enter Your Booking Information</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">


                            <!-- Notification End Here -->
                                <form action="{{ route('OrdercustomBooking') }}" method="POST">
                                    <!--  -->
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Body Size</label>
                                        <input type="text" class="form-control" name="body_size" id="text" value="{{ old('body_size') }}" placeholder="Enter Body Size">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Chest Size</label>
                                        <input type="text" class="form-control" name="chest_size" id="text" value="{{ old('chest_size') }}" placeholder="Enter Chest Size">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Neck Size</label>
                                        <input type="text" class="form-control" name="neck_size" id="text" value="{{ old('neck_size') }}" placeholder="Enter Neck Size">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Sleeve Size</label>
                                        <input type="text" class="form-control" name="sleeve_size" id="text" value="{{ old('sleeve_size') }}" placeholder="Enter Sleeve Size">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Pant / Payjama Size</label>
                                        <input type="text" class="form-control" name="pant_size" id="text" value="{{ old('pant_size') }}" placeholder="Enter Pant Size">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Waist Size</label>
                                        <input type="text" class="form-control" name="waist_size" id="text" value="{{ old('waist_size') }}" placeholder="Enter Waist Size">
                                    </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <a href="{{ route('user.dashboard') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
