@props(['role'=>""])

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                {{$slot}}
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">تم تسجيل الدخول باسم:</div>
                <b title='Your Role'>
                    {{ $role }}
                </b>
            </div>
        </nav>
    </div>
