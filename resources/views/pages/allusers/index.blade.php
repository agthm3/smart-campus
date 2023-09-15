@extends('layouts.app')

@section('content')
    <main role="main" class="main-content">
        <script src="https://kit.fontawesome.com/795e24dc42.js" crossorigin="anonymous"></script>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- Small table -->
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">Pending User</h2>
                            <p class="mb-3">
                                Konfirmasi akun, untuk memberikan akses
                                kepada User
                            </p>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="toolbar">
                                        <form class="form">
                                            <div class="form-row">
                                                <div class="form-group col-auto mr-auto">
                                                    <label class="my-1 mr-2 sr-only"
                                                        for="inlineFormCustomSelectPref1">Show</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                                                        <option value="">
                                                            ...
                                                        </option>
                                                        <option value="1">
                                                            12
                                                        </option>
                                                        <option value="2" selected>
                                                            32
                                                        </option>
                                                        <option value="3">
                                                            64
                                                        </option>
                                                        <option value="3">
                                                            128
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-auto">
                                                    <label for="search" class="sr-only">Search</label>
                                                    <input type="text" class="form-control" id="search1" value=""
                                                        placeholder="Search" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- table -->
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="all2" />
                                                        <label class="custom-control-label" for="all2"></label>
                                                    </div>
                                                </td>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Jabatan</th>
                                                <th>NIM/NIP</th>
                                                <th>
                                                    RFID
                                                </th>

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $item)
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="2474" />
                                                            <label class="custom-control-label" for="2474"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar avatar-md">
                                                            <img src="./assets/avatars/face-3.jpg" alt="..."
                                                                class="avatar-img rounded-circle" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">
                                                            <strong>{{ $item->name }}</strong>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 ">
                                                            {{ ucfirst($item->jabatan) }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 ">
                                                            {{ $item->nim }}
                                                        </p>
                                                        @if ($item->jabatan == 'dosen')
                                                            <p class="mb-0 bg-warning text-white">
                                                                NIP
                                                            </p>
                                                        @else
                                                            <p class="mb-0  bg-primary text-white">
                                                                NIM
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        {{ ucfirst($item->kendaraan) }}
                                                    </td>

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary " type="button"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fas fa-chevron-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- <td>
                                                        <button class="btn btn-sm more-horizontal" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="sr-only">Action</span><i
                                                                class="fas fa-caret-square-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <form action="{{ route('pendinguser.confirm', $item->id) }}"
                                                                method="post">
                                                                @method('patch')
                                                                @csrf
                                                                <input type="hidden" name="status" value="confirm">
                                                                <button type="submit"
                                                                    class="form-control bg-success text-white">Confirm</button>
                                                            </form>
                                                            <form action="{{ route('pendinguser.reject', $item->id) }}"
                                                                method="post">
                                                                @method('patch')
                                                                @csrf
                                                                <input type="hidden" name="status" value="reject">
                                                                <button type="submit"
                                                                    class="bg-danger text-white form-control">Reject</button>
                                                            </form>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <nav aria-label="Table Paging" class="mb-0  ">
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- customized table -->
                    </div>
                    <!-- end section -->

                    <!-- end section -->
                </div>
                <!-- .col-12 -->
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
                                        <div class="my-0   small">
                                            Package is zipped and
                                            uploaded
                                        </div>
                                        <small class="badge badge-pill badge-light  ">1m ago</small>
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
                                        <div class="my-0   small">
                                            Just create new layout
                                            Index, form, table
                                        </div>
                                        <small class="badge badge-pill badge-light  ">2m ago</small>
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
                                        <div class="my-0   small">
                                            Fusce dapibus, tellus ac
                                            cursus commodo
                                        </div>
                                        <small class="badge badge-pill badge-light  ">30m ago</small>
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
                                        <div class="my-0   small">
                                            New layout has been attached
                                            to the menu
                                        </div>
                                        <small class="badge badge-pill badge-light  ">1h ago</small>
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
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog"
            aria-labelledby="defaultModalLabel" aria-hidden="true">
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
