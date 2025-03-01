<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول | نظام إدارة الجامعة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Sweetalert 2 cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>

    <!-- Popup messages -->
    @if (session('success'))
    <script>
        Swal.fire({
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    @endif

    @if (session('warning'))
    <script>
        Swal.fire({
            icon: "warning",
            title: "{{ session('warning') }}",
            showConfirmButton: true,
        });
    </script>
    @endif

    @if (session('error'))
    <script>
        Swal.fire({
            icon: "error",
            title: "{{ session('error') }}",
            showConfirmButton: true,
        });
    </script>
    @endif
    @if (session('info'))
    <script>
        Swal.fire({
            icon: "info",
            title: "{{ session('info') }}",
            showConfirmButton: true,
        });
    </script>
    @endif
    <!--  -->

    <!-- Content -->
    <section class="d-flex justify-content-center align-items-center bg-dark" style="min-height: 100vh;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-8">
                    <div class="card card-registration my-4">
                        <div class="row g-0 h-100">
                            <!-- Image column -->
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                    alt="Sample photo" class="img-fluid h-100"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; object-fit: cover;" />
                            </div>
                            <!-- Form column -->
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black h-100">
                                    <form action="/" method="post">
                                        @csrf
                                        <h3 class="mb-5 text-uppercase">تسجيل الدخول</h3>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example97">بريد إلكتروني</label>
                                            <input type="text" name="email" id="form3Example97"
                                                class="form-control form-control" />
                                            <x-form-error name="email" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example98">كلمة المرور</label>
                                            <input type="password" name="password" id="form3Example98"
                                                class="form-control form-control" />
                                            <x-form-error name="password" />
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" class="btn btn-warning btn ms-2">تسجيل الدخول</button>
                                            <button type="button" class="btn btn-light btn">إعادة ضبط</button>
                                        </div>
                                        <a href="/register">ليس لدي حساب</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
