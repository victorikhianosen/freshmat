@extends('admin.layout.app')

@section('dashboard_content')
    <main>

        <style>
            .image-preview {
                max-width: 100px;
                margin-right: 10px;
            }
        </style>

        <section class="checkout pt_10 xs_pt_75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 wow fadeInUp">


                        <form class="checkout_form" action="{{ route('admin.change.password.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <h3>Change Password</h3>
                            <div class="row">

                                <input type="hidden" value="{{ $adminDetails = Auth::guard('isadmin')->user()->email }}" name="email" />

                                <!-- Current Password -->
                                <div class="col-lg-12">
                                    <div class="checkout_input_box">
                                        <label>Current Password</label>
                                        <input type="text" placeholder="Current Password" name="current_password" value="{{ old('current_password') }}">
                                        @error('current_password')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- password -->
                                <div class="col-lg-12">
                                    <div class="checkout_input_box">
                                        <label>New Password</label>
                                        <input type="text" placeholder="New password" name="password"
                                            value="{{ old('password') }}">
                                        @error('password')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="checkout_input_box">
                                        <label>Confirm Password</label>
                                        <input type="text" placeholder="Confirmation Password" name="password_confirmation"
                                            value="{{ old('password_confirmation') }}">
                                        @error('password_confirmation')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <!-- Submit Button -->
                                <div class="col-xl-12">
                                    <button type="submit" class="common_btn w-100">Change Password</button>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </section>
    </main>


@endsection
