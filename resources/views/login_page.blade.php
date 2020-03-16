<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/highchart-8.0.4/code/css/highcharts.css')}}">

</head>
<body>
<section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">
                <div class="col-md-4 offset-md-4">
                    @if(\Session::has('alert'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                    @endif
                    @if(\Session::has('alert-success'))
                        <div class="alert alert-success">
                            <div>{{Session::get('alert-success')}}</div>
                        </div>
                    @endif
                    <form action="{{url('/login/action')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Tulis email disini"><br>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Tulis password disini"><br>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-success">Login</button>
                            <a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>