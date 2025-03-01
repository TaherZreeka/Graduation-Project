<x-private-layout>

    <!-- Navbar -->
    <x-navbar role="{{ auth()->user()->role->name }}">
        <div class="nav">
            <a class="nav-link" href="/admin/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                لوحة التحكم
            </a>
            <a class="nav-link getPopup" target="_blank" href="{{ route('frontend.institute') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-globe"></i></div>
                موقع العام
            </a>
            <a class="nav-link getPopup" href="{{ route('admin.weather.index') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-sun"></i></div>
                تطبيق الطقس
            </a>
            <x-nav-link idNumber="1" link_name="الطلاب" icon_class="fa-solid fa-user-graduate">
                <x-sub-nav-link href="/admin/students/create">إضافة</x-sub-nav-link>
                <x-sub-nav-link href="/admin/students/show">قائمة</x-sub-nav-link>
            </x-nav-link>

            <x-nav-link idNumber="2" link_name="المدرسين" icon_class="fa-solid fa-chalkboard-user">
                <x-sub-nav-link href="/admin/teachers/create">إضافة</x-sub-nav-link>
                <x-sub-nav-link href="/admin/teachers/show">قائمة</x-sub-nav-link>
            </x-nav-link>

            <x-nav-link idNumber="3" link_name="المواضيع" icon_class="fa-solid fa-book">
                <x-sub-nav-link href="/admin/subjects/create">إضافة</x-sub-nav-link>
                <x-sub-nav-link href="/admin/subjects/show">قائمة</x-sub-nav-link>
                <x-sub-nav-link href="/admin/subjects/assign">تعيين المعلمين</x-sub-nav-link>
            </x-nav-link>

            <x-nav-link idNumber="4" link_name="الجداول" icon_class="fa-solid fa-school">
                <x-sub-nav-link href="/admin/streams/create">إضافة</x-sub-nav-link>
                <x-sub-nav-link href="/admin/streams/show">قائمة</x-sub-nav-link>
            </x-nav-link>

            <x-nav-link idNumber="5" link_name="الفصول الدراسية" icon_class="fa-solid fa-chalkboard">
                <x-sub-nav-link href="/admin/class/create">إضافة</x-sub-nav-link>
                <x-sub-nav-link href="/admin/class/show">قائمة</x-sub-nav-link>
            </x-nav-link>

            <div class="sb-sidenav-menu-heading">إضافات</div>
            <a class="nav-link" href="/admin/profile">
                <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                حساب تعريفي
            </a>
            <a class="nav-link getPopup" href="/admin/settings">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                إعدادات
            </a>
            <a class="nav-link getPopup" href="/admin/messages">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-message"></i></div>
                رسائل
            </a>
            <a class="nav-link getPopup" href="/logout">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                تسجيل الخروج
            </a>
        </div>
    </x-navbar>
    <x-nav-top></x-nav-top>

    <div id="layoutSidenav_content">
        <div class="container-fluid mt-2">
            <!-- Slotted content -->
            @yield('content')
            <!--  -->
        </div>
    </div>
    <!--  -->

</x-private-layout>