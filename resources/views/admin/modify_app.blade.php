<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.link')

</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and
                            more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                           target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                            class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 100px">

            <form action="{{url('#')}}" method="post">

                @csrf
                <div style="padding: 15px;">
                    <label>Név:</label>
                    <input type="text" style="color:black" name="name" value="{{$data->name}}">

                </div>

                <div style="padding: 15px;">
                    <label>Neptun kód: </label>
                    <input type="text" style="color:black" name="nk" value="{{$data->nk}}"
                           placeholder="Add meg az új Neptun kódot">
                </div>

                <div style="padding: 15px;">
                    <label>Ettől</label>
                    <input type="datetime-local" style="color:black" name="starttime" value="{{$data->starttime}}">
                </div>
                <div style="padding: 15px;">
                    <label>Eddig</label>
                    <input type="datetime-local" style="color:black" name="endtime" value="{{$data->endtime}}">
                </div>

                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success" style="background: green">
                </div>
            </form>
        </div>

    </div>
</div>

</body>
</html>
