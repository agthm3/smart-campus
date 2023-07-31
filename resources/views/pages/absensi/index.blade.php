@extends('layouts.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">
                                Selamat Datang!
                            </h2>
                        </div>
                    </div>
                    @if (Auth::user()->auth == 'admin')
                        <div class="row align-items-center mb-2">
                            <div class="col-lg-2 ">
                                <a href="{{ route('lab.create') }}"
                                    class="form-control bg-primary text-white text-bold">Tambah
                                    Ruangan +</a>
                            </div>
                        </div>
                    @endif

                    <!-- widgets -->
                    <div class="row my-4">
                        @foreach ($labAreas as $item)
                            <div class="col-md-4">
                                <div class="card shadow mb-4" style="cursor:pointer"
                                    onclick="document.getElementById('form-{{ $item->id }}').submit()">

                                    <form action="{{ route('rekapabsensi.store', $item) }}" method="post"
                                        id="form-{{ $item->id }}">

                                        @csrf
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted mb-1">Laboratorium</small>
                                                    <h3 class="card-title mb-0">
                                                        {{ $item->name }}
                                                    </h3>
                                                    <input type="hidden" name="labarea_id" value="{{ $item->id }}"
                                                        id="simpleinput" class="form-control">
                                                </div>
                                                <div class="col-4 text-right">
                                                    <span class="sparkline inlinebar"></span>
                                                </div>
                                            </div>
                                            <!-- /. row -->
                                        </div>

                                    </form>
                                    @if (Auth::user()->auth == 'admin')
                                        <h3 class="card-title mb-0">
                                            <form action="{{ route('labarea.destroy', $item) }}" method="post">
                                                @method('delete')
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
                                                <button type="submit"
                                                    class="form-control bg-danger text-white">Hapus</button>
                                            </form>
                                        </h3>
                                    @endif

                                    <!-- /. card-body -->
                                </div>
                                <!-- /. card -->
                            </div>
                        @endforeach

                    </div>
                    <!-- end section -->
                </div>
                <!-- /.col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">
                            Notifications
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-box fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Package has uploaded
                                                successfull</strong></small>
                                        <div class="my-0 text-muted small">
                                            Package is zipped and
                                            uploaded
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-download fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Widgets are updated
                                                successfull</strong></small>
                                        <div class="my-0 text-muted small">
                                            Just create new layout
                                            Index, form, table
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-inbox fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Notifications have been
                                                sent</strong></small>
                                        <div class="my-0 text-muted small">
                                            Fusce dapibus, tellus ac
                                            cursus commodo
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-link fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Link was attached to
                                                menu</strong></small>
                                        <div class="my-0 text-muted small">
                                            New layout has been attached
                                            to the menu
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                        <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">
                            Clear All
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">
                            Shortcuts
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
