<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts._header')
</head>
<body>
    <div id="app">
        <main class="container">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 font-weight-normal">
                        Hostel
                    </h1>
                    <p class="lead font-weight-normal">
                        Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.
                    </p>
                    <a class="btn btn-primary" href="{{ route('rooms.list') }}">
                        Ver quartos!
                    </a>
                </div>
                {{-- <div
                    class="product-device shadow-sm d-none d-md-block">
                </div>
                <div
                    class="product-device product-device-2 shadow-sm d-none d-md-block">
                </div> --}}
            </div>
        </main>
    </div>
</body>
</html>
