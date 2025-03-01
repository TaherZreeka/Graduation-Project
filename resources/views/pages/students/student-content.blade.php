<x-private-layout>
    <!-- Navbar -->
    <x-navbar role="{{ auth()->user()->role->name }}">
        <div class="nav">
            <a class="nav-link" href="/student/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                لوحة التحكم
            </a>
            <a class="nav-link getPopup" target="_blank" href="{{ route('frontend.institute') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-globe"></i></div>
                موقع العام
            </a>
            <a class="nav-link getPopup" href="{{ route('students.weather.index') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-sun"></i></div>
                تطبيق الطقس
            </a>
            <div class="sb-sidenav-menu-heading">الإضافات</div>
            <a class="nav-link" href="/student/profile">
                <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                حساب تعريفي
            </a>
            <a class="nav-link getPopup" href="/student/settings">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                إعدادات
            </a>
            <a class="nav-link getPopup" href="/logout">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                تسجيل الخروج
            </a>
        </div>
    </x-navbar>
    <x-nav-top></x-nav-top>
    <div id="layoutSidenav_content">
        <div class="container-fluid">
            <!-- Slotted content -->
            @yield('content')
            <!--  -->
        </div>
    </div>
    <!--  -->

</x-private-layout>