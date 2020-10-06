@include('frontend.inc.header')

<!-- Page Content -->
        <div id="page_wrapper">
            <!-- Registration Section Start -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mb-5">
                            <h3 class="mb-3 down-line">Welcome Message</h3>
                            <p>Adipiscing lacinia pede proin vulputate habitasse donec adipiscing. Cubilia Interdum hac turpis et dignissim vehicula porta nostra dictum nostra semper. Dictumst congue dictum. Nam massa id, netus interdum amet Metus turpis scelerisque
                                aptent sapien penatibus potenti.</p>

                            <h4 class="mb-5 mt-5 underline">Keep in a mind a few basic password roules :</h4>
                            <ul class="list-squire-check">
                                <li><span class="flaticon-checked-1 flat-small text-primary"></span> Change your passwords periodically</li>
                                <li><span class="flaticon-checked-1 flat-small text-primary"></span> Avoid re-using password for multiple site</li>
                                <li><span class="flaticon-checked-1 flat-small text-primary"></span> Use complex characters including uppercase and number</li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <h3 class="mb-4 down-line">Registration</h3>
                            <div class="form-icon-left form-boder">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control bg-light" name="name">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email Address</label>
                                            <input type="email" name="email" class="form-control bg-light">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control bg-light">
                                        </div>
                                        <div class="col-md-12">
                                            <label>PHN Number</label>
                                            <input type="text" name="phn_number" class="form-control bg-light">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control bg-light">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Re-enter Password</label>
                                            <input type="password" name="password_confirmation" class="form-control bg-light">
                                        </div>

                                        <div class="col-md-12 form-check">
                                            <button type="submit" class="btn btn-primary-fixed mb-3">Sign Up!</button>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="{{ url('login') }}" class="btn-link text-dark">Go to Login Page</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registration Section End -->
        </div>

@include('frontend.inc.footer')
