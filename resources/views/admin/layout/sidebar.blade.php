<div class="col-xl-3 col-lg-4 wow fadeInLeft">
    <div class="dashboard_sidebar">
        <div class="dashboard_sidebar_user">
            <div class="img">
                <img src="/assets/images/dashboard_user_img.png" alt="dashboard" class="img-fluid w-100">
                <label for="profile_photo"><i class="far fa-camera"></i></label>
                <input type="file" id="profile_photo" hidden>
            </div>
            <h3>{{ Auth::guard('isadmin')->user()->first_name }}</h3>
            <p>Paris, France</p>
        </div>
        <div class="dashboard_sidebar_menu">
            <ul>
                <li><a class="active" href="{{ route('admin.dashboard') }}"><i class="fas fa-user"></i>
                        Personal
                        Info</a></li>
                <li><a href="{{ route('admin.product') }}"><i class="fas fa-shopping-basket"></i>Products</a>
                <li><a href="{{ Route('admin.product.create') }}"><i class="fas fa-shopping-basket"></i>Add Product</a>
                {{-- <li><a href=""><i class="fas fa-shopping-basket"></i>Show Product</a>
                <li><a href=""><i class="fas fa-shopping-basket"></i>Edit Product</a> --}}
                </li>
                <li><a href="{{ route('admin.category') }}"><i class="fas fa-star"></i>Category</a></li>
                <li><a href="{{ route('admin.tag') }}"><i class="fas fa-star"></i>Tag</a></li>
                <li><a href="{{ route('admin.change.password') }}"><i class="fas fa-key"></i> Change Password</a></li>

                <li><a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
