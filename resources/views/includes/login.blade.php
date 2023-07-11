@extends('layouts.auth');

@section('content')
    <div class="wrapper vh-100">

        <div class="row align-items-center h-100">

            <form action="{{ route('login') }}" method="post" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('dashboard.index') }}">
                    <img src="assets/images/logo.png" style="width: 30%" alt="" />
                </a>
                <h1 class="h6 mb-3">Sign in ke Smart Campus</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control form-control-lg"
                        placeholder="Email address" required="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control form-control-lg"
                        placeholder="Password" required="">
                </div>

                <button class="btn mb-2 btn-lg btn-primary btn-block" type="submit">Login</button>
                <small>Belum punya akun? <span><a href="{{ route('register') }}">Buat akun sekarang!</a></span></small>
                <p class="mt-5 mb-3 text-muted">© Smart Campus</p>
            </form>
        </div>
    </div>
@endsection
