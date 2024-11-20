@extends('layouts.master2')
@section('title')
تسجيل دخول - برنامج الفواتير
@stop

@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <img src="{{URL::asset('assets/img/brand/logo.png')}}" class="sign-favicon ht-40" alt="logo"></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>مرحبا بك</h2>
                                            <h5 class="font-weight-semibold mb-4"> تسجيل الدخول</h5>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label>البريد الالكتروني</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>كلمة المرور</label>

                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                  </span>
                                                    @enderror
                                                    <div class="form-group row">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('تذكرني') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-main-primary btn-block">
                                                    {{ __('تسجيل الدخول') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->

            <div  class=" col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent" >
                {{-- <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{URL::asset('assets/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>--}}
                
                <div id="carouselExample" class="carousel slide ">
                    <div class="carousel-inner text-center">
                        <!-- العنصر الأول -->
                        <div class=" col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p carousel-item">
                            <br>
                            <img src="{{ URL::asset('assets/img/media/login2.png') }}"style="width: 82%; hight:82%" alt="First Slide">
                        </div>
                        <!-- العنصر الثاني -->
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p carousel-item ">
                            <br>
                            <img src="{{ URL::asset('assets/img/media/login1.png') }}" style="width: 82%; hight:82%" alt="Second Slide" >
                        </div>
                        <!-- العنصر الثالث (نشط) -->
                        <div class=" col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p  carousel-item active">
                            <br>
                            <img src="{{ URL::asset('assets/img/media/login.png') }}" style="width: 82%; hight:82%"  alt="Third Slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                        <span class="visually"><h1 style="font-family: 'Manrope', Courier, monospace">></h1></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="false"></span>
                        <span class="visually"><h1 style="font-family: 'Manrope', Courier, monospace"><</h1></span>
                    </button>
                </div>
                
        </div>
    </div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection

