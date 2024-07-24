@include('layout.styles')

@include('admin.layout.nav')


{{-- @yield('admin_content') --}}


<section class="dashboard pt_50 xs_pt_80">
    <div class="container">
        <div class="row">

            @include('admin.layout.sidebar')

            
            <div class="col-xl-9 col-lg-8 wow fadeInRight">


                @yield('dashboard_content')
            </div>
        </div>
    </div>
</section>

@include('layout.footer')

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>


@include('layout.scripts')



</body>



</html>
