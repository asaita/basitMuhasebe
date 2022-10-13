@extends('layouts.admin.master')

@section('title')login
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
    <section>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-xl-12 p-0">
	                <div class="login-card">
	                    <form class="theme-form login-form" action="{{route('login')}}" method="POST">
                            {{csrf_field()}}
							@include('layouts.partials.errors')
	                        <h4>Giriş Yap</h4>
	                        <div class="form-group">
	                            <label>Email</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-email"></i></span>
	                                <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com" />
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>Password</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-lock"></i></span>
	                                <input class="form-control" type="password" name="password" required="" placeholder="*********" />
	                                <div class="show-hide"><span class="show"> </span></div>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="checkbox">
	                                <input id="checkbox1" type="checkbox" />
	                                <label class="text-muted" for="checkbox1" name="rememberme">Beni Hatırla</label>
	                            </div>
	                            <!-- <a class="link" href="#">Forgot password?</a> -->
	                        </div>
	                        <div class="form-group"><button class="btn btn-primary" type="submit">Giriş Yap</button></div>
	                        
	                       
	                        <p>Hesabınız Yok mu?<a class="ms-2" href="{{ route('sign-up') }}">Kayıt Oluştur</a></p>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	
    @push('scripts')
    @endpush

@endsection