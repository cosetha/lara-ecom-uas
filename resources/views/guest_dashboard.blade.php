<!DOCTYPE html>
<html class="bg-color-1">
<head>
    <title>{{$title}}</title>
    <!-- CSS -->
    @include('includes.head')
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
</head>
<body>
    <div class="main bg-color-1">
        <div class="header-top pt-4 bg-color-2">
        <div class="container p-3">
            <div class="row">
                <div class="header-logo mr-5 ml-5"><img src="{{url('/assets/laravel-logo.png')}}" width="40px" height="30px"></div>                    
                    <div class="container-search p-1">
                        <form type="search">
                            <input class="header-search" placeholder="SEARCH HERE">
                            <button class="btn-search bg-color-2" type="submit">SEARCH</button>
                        </form>
                    </div>
                <div class="header-account"><a href="{{url('/login')}}">LOGIN</a> | <a href="{{url('/register')}}">DAFTAR</a></div>
            </div>
        </div>
        </div>

        <div class="jumbo-tron">
            <div class="hero-image"></div>
        </div>
        
        <div class="card-container">
            <div class="row">
                <div class="cardmenu-1">
                    <h3>LARAVEL</h3><hr>
                    <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="180">
                </div>
                <div class="cardmenu-1">
                    <h3>LARAVEL</h3>
                    <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="180">
                </div>
                <div class="cardmenu-1">
                    <h3>LARAVEL</h3>
                    <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="180">
                </div>
                <div class="cardmenu-1">
                    <h3>LARAVEL</h3>
                    <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="180">
                </div>
            </div>
        </div>

        <div class="card-container">
            <div class="row">
                <div class="cardmenu-2">
                    <h4>Produk Terlaris</h4><hr>
                    <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="50">
                </div>
            </div>
        </div>

        <div class="card-container">
            <div class="cardmenu-3">
                <h4>Produk 1</h4><hr>
                <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="50">
            </div>
            <div class="cardmenu-3">
                <h4>Produk 2</h4><hr>
                <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="50">
            </div>
            <div class="cardmenu-3">
                <h4>Produk 3</h4><hr>
                <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="50">
            </div>
            <div class="cardmenu-3">
                <h4>Produk 4</h4><hr>
                <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="50">
            </div>
            <div class="cardmenu-3">
                <h4>Produk 5</h4><hr>
                <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="50">
            </div>
            <div class="cardmenu-3">
                <h4>Produk 6</h4><hr>
                <img src="{{url('/assets/laravel-logo.png')}}" width="100" height="50">
            </div>
        </div>
    </div>
</body>
<!-- FOOTER -->
<footer class="bg-color-2">
    <div class="container">
        <div class="row align-items-center space">
            <div class="col-md-4">
                <h4>Footer</h4>
                <p>Lorem Ipsum</p>
            </div>
            <div class="col-md-4">
                <h4>Footer</h4>
                <p>Lorem Ipsum</p>
            </div>
            <div class="col-md-4">
                <h4>Footer</h4>
                <p>Lorem Ipsum</p>
            </div>
            <div class="col-md-12 pt-4">
                <p class="copyright">
                    Copyright @ 2020
                </p>
            </div>
        </div>
    </div>
</footer>
    <!-- JS SCRIPT -->
    <script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}">
    <script src="{{url('/assets/library/bootstrap-4.4.1-dist/js/bootstrap.js')}}">
</html>