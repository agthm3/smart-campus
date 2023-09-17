@extends('layouts.app')

@section('content')
    {{-- @dd($allUser->rfid) --}}
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Detail <span class="text-warning"> {{ $allUser->name }}</span></h2>
                    <p class="text-muted">Berikut adalah detail dari user</p>
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">


                                    <form action="{{ route('allusers.update', $allUser->id) }}" method="POST">
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
                                        @method('patch')
                                        <label for="Nama">Nama</label>
                                        <input name="name" type="text" class="form-control"
                                            value="{{ $allUser->name }}" id="Nama">
                                        <label for="Email" class="mt-2">Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $allUser->email }}" id="Email">
                                        <label for="rfid" class="mt-2">RFID</label>
                                        <input name="rfid" type="text" class="form-control"
                                            value="{{ $allUser->rfid }}" id="rfid">
                                        <button type="submit"
                                            class="form-control mt-2 bg-primary text-white">Simpan</button>
                                    </form>


                                </div> <!-- /.col -->

                            </div>
                        </div>
                    </div> <!-- / .card -->

                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

    </main> <!-- main -->
@endsection
