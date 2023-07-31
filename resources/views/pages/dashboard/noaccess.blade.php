@extends('layouts.app')

@section('content')
    <div class="wrapper vh-100">
        <div class="align-items-center h-100 d-flex w-50 mx-auto">
            <div class="mx-auto text-center">
                <h1 class="display-1 m-0 font-weight-bolder text-muted" style="font-size:80px;">ANDA BUKAN ADMIN</h1>
                <h1 class="mb-1 text-muted font-weight-bold">OOPS!</h1>
                <h6 class="mb-3 text-muted">Hanya admin yang dapat mengakses halaman ini.</h6>
                <a href="{{ route('dashboard.index') }}" class="btn btn-lg btn-primary px-5">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>
@endsection
