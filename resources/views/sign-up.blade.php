@extends('layouts.admin.master')	
@section('title')Sign Up
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
@endpush

@section('content')
    <section>
	    <div class="container-fluid p-0">
	        <div class="row m-0">
	            <div class="col-12 p-0">
	                <div class="login-card">
	                    <form class="theme-form login-form" action="{{route('register')}}" method="POST">
							{{csrf_field()}}
	                        <h4>Hesabınızı Oluşturun</h4>
	                        <div class="form-group">
	                            <label>Ad Soyad</label>
	                            <div class="small-group">
	                                <div class="input-group">
	                                    <span class="input-group-text"><i class="icon-user"></i></span>
	                                    <input class="form-control" type="text" name="ad" required="" placeholder="Adınız" />
	                                </div>
	                                <div class="input-group">
	                                    <span class="input-group-text"><i class="icon-user"></i></span>
	                                    <input class="form-control" type="text" name="soyad" required="" placeholder="Soyadınız" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>Email</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-email"></i></span>
	                                <input class="form-control" type="email" name ="email" required="" placeholder="Test@gmail.com" />
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>Şifre</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-lock"></i></span>
	                                <input class="form-control" type="password" name="password" required="" placeholder="*********" />
	                                <div class="show-hide"><span class="show"> </span></div>
	                            </div>
	                        </div>
	                       
	                        <div class="form-group">
	                            <button class="btn btn-primary btn-block" type="submit">Hesap Oluştur</button>
	                        </div>
	                  
	                        
	                        <p>Zaten Hesabınız Var Mı?<a class="ms-2" href="#">Giriş Yap</a></p>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>


    @push('scripts')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    @endpush

@endsection