@include('layout.styles')


<section class="sign_in pt_5 xs_pt_80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-lg-4 d-none d-lg-block wow fadeInLeft">
                <div class="sign_in_img">
                    <img src="/assets/images/sign_in_img_1.jpg" alt="Sign In" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-xxl-5 col-md-10 col-lg-7 col-xl-6 wow fadeInRight">
                <div class="sign_in_form">
                    <h3>Admin Sign In 👋</h3>
                    <form action="{{ route('admin.login.store') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        @error('email')
                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                        @enderror
                        @if (session('error'))
                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                        @endif
                        <input type="password" name="password" placeholder="Password">

                        @error('password')
                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                        @enderror
                        @if (session('error'))
                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                        @endif
                        <div class="forgot">
                            <a href="forgot_password.html">Forgot Password</a>
                        </div>
                        <button type="submit" class="common_btn">Sign In<span></span></button>
                    </form>

                    <p class="dont_account">Don’t have an account? <a href="{{ route('admin.register') }}">Sign Up</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.scripts')
