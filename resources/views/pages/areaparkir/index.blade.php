@extends('layouts.app')
@section('content')
        <main role="main" class="main-content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <!-- Striped rows -->
                                <div class="col-md-12 my-4">
                                    <h2 class="h4 mb-1">
                                        Area Parkir Yang Tersedia
                                    </h2>
                                    <p class="mb-4">
                                        Tambah area parkir untuk diakses oleh
                                        user
                                    </p>
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="toolbar row mb-3">
                                                <div class="col">
                                                    <form class="form-inline">
                                                        <div class="form-row">
                                                            <div
                                                                class="form-group col-auto"
                                                            >
                                                                <label
                                                                    for="search"
                                                                    class="sr-only"
                                                                    >Search</label
                                                                >
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    id="search"
                                                                    value=""
                                                                    placeholder="Search"
                                                                />
                                                            </div>
                                                            <div
                                                                class="form-group col-auto ml-3"
                                                            >
                                                                <label
                                                                    class="my-1 mr-2 sr-only"
                                                                    for="inlineFormCustomSelectPref"
                                                                    >Status</label
                                                                >
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col ml-auto">
                                                    <div
                                                        class="dropdown float-right"
                                                    >
                                                        <a href="">
                                                            <button
                                                                class="btn btn-primary float-right ml-3"
                                                                type="button"
                                                            >
                                                                Tambah Area
                                                                Parkir +
                                                            </button></a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- table -->
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr role="row">
                                                        <th>No</th>
                                                        <th>Area Parkir</th>
                                                        <th>Max Mobil</th>
                                                        <th>Max Motor</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Parkir Elektro</td>
                                                        <td>10</td>
                                                        <td>20</td>

                                                        <td>
                                                            <button
                                                                class="btn btn-sm dropdown-toggle more-horizontal"
                                                                type="button"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                            >
                                                                <span
                                                                    class="text-muted sr-only"
                                                                    >Action</span
                                                                >
                                                            </button>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right"
                                                            >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="#"
                                                                    >Edit</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="#"
                                                                    >Remove</a
                                                                >
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Parkir COT</td>
                                                        <td>10</td>
                                                        <td>20</td>

                                                        <td>
                                                            <button
                                                                class="btn btn-sm dropdown-toggle more-horizontal"
                                                                type="button"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                            >
                                                                <span
                                                                    class="text-muted sr-only"
                                                                    >Action</span
                                                                >
                                                            </button>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right"
                                                            >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="#"
                                                                    >Edit</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="#"
                                                                    >Remove</a
                                                                >
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Parkir CSA</td>
                                                        <td>10</td>
                                                        <td>20</td>

                                                        <td>
                                                            <button
                                                                class="btn btn-sm dropdown-toggle more-horizontal"
                                                                type="button"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                            >
                                                                <span
                                                                    class="text-muted sr-only"
                                                                    >Action</span
                                                                >
                                                            </button>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right"
                                                            >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="#"
                                                                    >Edit</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="#"
                                                                    >Remove</a
                                                                >
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <nav
                                                aria-label="Table Paging"
                                                class="mb-0 text-muted"
                                            >
                                                <ul
                                                    class="pagination justify-content-end mb-0"
                                                >
                                                    <li class="page-item">
                                                        <a
                                                            class="page-link"
                                                            href="#"
                                                            >Previous</a
                                                        >
                                                    </li>
                                                    <li class="page-item">
                                                        <a
                                                            class="page-link"
                                                            href="#"
                                                            >1</a
                                                        >
                                                    </li>
                                                    <li class="page-item">
                                                        <a
                                                            class="page-link"
                                                            href="#"
                                                            >2</a
                                                        >
                                                    </li>
                                                    <li class="page-item">
                                                        <a
                                                            class="page-link"
                                                            href="#"
                                                            >3</a
                                                        >
                                                    </li>
                                                    <li class="page-item">
                                                        <a
                                                            class="page-link"
                                                            href="#"
                                                            >Next</a
                                                        >
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- simple table -->
                            </div>
                        </div>
                        <!-- .col-12 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container-fluid -->
                <div
                    class="modal fade modal-notif modal-slide"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="defaultModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="defaultModalLabel">
                                    Notifications
                                </h5>
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item bg-transparent">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span
                                                    class="fe fe-box fe-24"
                                                ></span>
                                            </div>
                                            <div class="col">
                                                <small
                                                    ><strong
                                                        >Package has uploaded
                                                        successfull</strong
                                                    ></small
                                                >
                                                <div
                                                    class="my-0 text-muted small"
                                                >
                                                    Package is zipped and
                                                    uploaded
                                                </div>
                                                <small
                                                    class="badge badge-pill badge-light text-muted"
                                                    >1m ago</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item bg-transparent">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span
                                                    class="fe fe-download fe-24"
                                                ></span>
                                            </div>
                                            <div class="col">
                                                <small
                                                    ><strong
                                                        >Widgets are updated
                                                        successfull</strong
                                                    ></small
                                                >
                                                <div
                                                    class="my-0 text-muted small"
                                                >
                                                    Just create new layout
                                                    Index, form, table
                                                </div>
                                                <small
                                                    class="badge badge-pill badge-light text-muted"
                                                    >2m ago</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item bg-transparent">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span
                                                    class="fe fe-inbox fe-24"
                                                ></span>
                                            </div>
                                            <div class="col">
                                                <small
                                                    ><strong
                                                        >Notifications have been
                                                        sent</strong
                                                    ></small
                                                >
                                                <div
                                                    class="my-0 text-muted small"
                                                >
                                                    Fusce dapibus, tellus ac
                                                    cursus commodo
                                                </div>
                                                <small
                                                    class="badge badge-pill badge-light text-muted"
                                                    >30m ago</small
                                                >
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item bg-transparent">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span
                                                    class="fe fe-link fe-24"
                                                ></span>
                                            </div>
                                            <div class="col">
                                                <small
                                                    ><strong
                                                        >Link was attached to
                                                        menu</strong
                                                    ></small
                                                >
                                                <div
                                                    class="my-0 text-muted small"
                                                >
                                                    New layout has been attached
                                                    to the menu
                                                </div>
                                                <small
                                                    class="badge badge-pill badge-light text-muted"
                                                    >1h ago</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </div>
                                <!-- / .list-group -->
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary btn-block"
                                    data-dismiss="modal"
                                >
                                    Clear All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="modal fade modal-shortcut modal-slide"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="defaultModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="defaultModalLabel">
                                    Shortcuts
                                </h5>
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5">
                                <div class="row align-items-center">
                                    <div class="col-6 text-center">
                                        <div
                                            class="squircle bg-success justify-content-center"
                                        >
                                            <i
                                                class="fe fe-cpu fe-32 align-self-center text-white"
                                            ></i>
                                        </div>
                                        <p>Control area</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <div
                                            class="squircle bg-primary justify-content-center"
                                        >
                                            <i
                                                class="fe fe-activity fe-32 align-self-center text-white"
                                            ></i>
                                        </div>
                                        <p>Activity</p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-6 text-center">
                                        <div
                                            class="squircle bg-primary justify-content-center"
                                        >
                                            <i
                                                class="fe fe-droplet fe-32 align-self-center text-white"
                                            ></i>
                                        </div>
                                        <p>Droplet</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <div
                                            class="squircle bg-primary justify-content-center"
                                        >
                                            <i
                                                class="fe fe-upload-cloud fe-32 align-self-center text-white"
                                            ></i>
                                        </div>
                                        <p>Upload</p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-6 text-center">
                                        <div
                                            class="squircle bg-primary justify-content-center"
                                        >
                                            <i
                                                class="fe fe-users fe-32 align-self-center text-white"
                                            ></i>
                                        </div>
                                        <p>Users</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <div
                                            class="squircle bg-primary justify-content-center"
                                        >
                                            <i
                                                class="fe fe-settings fe-32 align-self-center text-white"
                                            ></i>
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