

    @include('layout.styles')


    <!--=========================
        TOPBAR START
    ==========================-->

    @include('layout.header')
    <!--=========================
        HEADER 2 END
    ==========================-->


    <!--=========================
        MENU 2 START
    ==========================-->

    @include('layout.navbar')


    @yield('main_content')

    @include('layout.footer')
    <!--=========================
        FOOTER 2 END
    ==========================-->


    <!--==========================
        SCROLL BUTTON START
    ===========================-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--==========================
        SCROLL BUTTON END
    ===========================-->

    @include('layout.scripts')



</body>


<!-- Mirrored from htmldemo.themefax.com/freshmat/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 23:48:54 GMT -->

</html>
