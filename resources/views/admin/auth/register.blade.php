@include('layout.styles')

<section class="sign_up pt_10 xs_pt_80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-lg-4 d-none d-lg-block wow fadeInLeft">
                <div class="sign_in_img">
                    <img src="/assets/images/sign_in_img_2.jpg" alt="Sign In" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-xxl-5 col-md-10 col-lg-7 col-xl-6 wow fadeInRight">
                <div class="sign_in_form">
                    <h3>Admin Sign Up 👋</h3>
                    <form action="{{ route('admin.register.store') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Enter email address"
                            value="{{ old('email') }}">
                        @error('email')
                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                        @enderror
                        @if (session('error'))
                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                        @endif
                        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">

                        @error('password')
                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                        @enderror
                        @if (session('error'))
                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                        @endif
                        <input type="password" name="password_confirmation" placeholder="Confirm password"
                            value="{{ old('password_confirmation') }}">

                        @error('password_confirmation')
                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                        @enderror
                        @if (session('error'))
                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                        @endif
                        <button type="submit" class="common_btn">Sign Up<span></span></button>
                    </form>

                    <p class="dont_account">Already have an account? <a href="{{ route('admin.login') }}">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.scripts')
