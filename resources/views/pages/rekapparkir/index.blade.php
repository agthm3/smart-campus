@extends('layouts.app')


@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row"></div>

                    <div class="row">
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">Rekapitulasi Parkir</h2>
                            <p class="mb-3">
                                Lihat Log parkir lebih detail
                            </p>
                            <div class="card shadow">
                                <div class="col ml-auto mt-3">
                                    <div class="dropdown float-right">
                                        <a href="">
                                            <button class="btn btn-primary float-right ml-3" type="button">
                                                Print Rekapitulasi
                                            </button></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table table-hover table-borderless border-v">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Invoice No</th>
                                                <th>Invoice Date</th>
                                                <th>Order #</th>
                                                <th>Bill To</th>
                                                <th>Status</th>
                                                <th>Grand Total</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse"
                                                data-parent="#c-2474" href="#collap-2474">
                                                <td>3599</td>
                                                <td>
                                                    2020-09-12 11:21:03
                                                </td>
                                                <td>3951</td>
                                                <td>Alexander Ellis</td>
                                                <td>
                                                    <span class="badge badge-pill badge-success mr-2">S</span><small
                                                        class="text-muted">Paid</small>
                                                </td>
                                                <td>$37.39</td>
                                                <td>$80.11</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-2474" class="collapse show in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Fringilla
                                                            Ornare
                                                            Consulting
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            287-8300
                                                            Nisl. St.
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (899)
                                                            881-3833
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Papua New
                                                            Guinea
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr class="accordion-toggle collapsed" id="c-3954" data-toggle="collapse"
                                                data-parent="#c-3954" href="#collap-3954">
                                                <td>3954</td>
                                                <td>
                                                    2020-10-11 19:09:12
                                                </td>
                                                <td>4038</td>
                                                <td>Casey Caldwell</td>
                                                <td>
                                                    <span class="badge badge-pill badge-success mr-2">S</span><small
                                                        class="text-muted">Paid</small>
                                                </td>
                                                <td>$30.74</td>
                                                <td>$46.14</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-3954" class="collapse in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Tristique
                                                            Ltd
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            4577 Cras
                                                            St.
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (977)
                                                            220-6518
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Central
                                                            African
                                                            Republic
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>

                                            <tr class="accordion-toggle collapsed" id="c-2429" data-toggle="collapse"
                                                data-parent="#c-2429" href="#collap-2429">
                                                <td>2429</td>
                                                <td>
                                                    2020-11-26 02:45:30
                                                </td>
                                                <td>4603</td>
                                                <td>Jack Adams</td>
                                                <td>
                                                    <span class="badge badge-pill badge-warning mr-2">W</span><small
                                                        class="text-muted">Pending</small>
                                                </td>
                                                <td>$20.84</td>
                                                <td>$28.51</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-2429" class="collapse in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Orci Luctus
                                                            Et Inc.
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            P.O. Box
                                                            228, 7512
                                                            Lectus Ave
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (537)
                                                            315-1481
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Bonaire,
                                                            Sint
                                                            Eustatius
                                                            and Sabac
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr class="accordion-toggle collapsed" id="c-3987" data-toggle="collapse"
                                                data-parent="#c-3987" href="#collap-3987">
                                                <td>3987</td>
                                                <td>
                                                    2020-02-13 19:29:45
                                                </td>
                                                <td>4261</td>
                                                <td>Samantha Hansen</td>
                                                <td>
                                                    <span class="badge badge-pill badge-success mr-2">S</span><small
                                                        class="text-muted">Paid</small>
                                                </td>
                                                <td>$83.19</td>
                                                <td>$48.48</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-3987" class="collapse in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Ap #377-5357
                                                            Sed Road
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            P.O. Box
                                                            228, 7512
                                                            Lectus Ave
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (238)
                                                            386-0247
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Canada
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr class="accordion-toggle collapsed" id="c-3165" data-toggle="collapse"
                                                data-parent="#c-3987" href="#collap-3165">
                                                <td>3165</td>
                                                <td>
                                                    2020-05-05 22:33:28
                                                </td>
                                                <td>3308</td>
                                                <td>Carla Ochoa</td>
                                                <td>
                                                    <span class="badge badge-pill badge-primary mr-2">P</span><small
                                                        class="text-muted">Invoiced</small>
                                                </td>
                                                <td>$99.92</td>
                                                <td>$38.62</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-3165" class="collapse in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Suspendisse
                                                            LLC
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Ap #410-5363
                                                            Non, Avenue
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (587)
                                                            675-3258
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Chad
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr class="accordion-toggle collapsed" id="c-5429" data-toggle="collapse"
                                                data-parent="#c-5429" href="#collap-5429">
                                                <td>5429</td>
                                                <td>
                                                    2020-11-26 02:45:30
                                                </td>
                                                <td>4603</td>
                                                <td>Jack Adams</td>
                                                <td>
                                                    <span class="badge badge-pill badge-warning mr-2">W</span><small
                                                        class="text-muted">Pending</small>
                                                </td>
                                                <td>$20.84</td>
                                                <td>$28.51</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-5429" class="collapse in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Dolor
                                                            Incorporated
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            8250
                                                            Molestie St.
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (934)
                                                            582-9495
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            British
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr class="accordion-toggle collapsed" id="c-3951" data-toggle="collapse"
                                                data-parent="#c-3951" href="#collap-3951">
                                                <td>3951</td>
                                                <td>
                                                    2020-10-11 19:09:12
                                                </td>
                                                <td>4038</td>
                                                <td>Casey Caldwell</td>
                                                <td>
                                                    <span class="badge badge-pill badge-success mr-2">S</span><small
                                                        class="text-muted">Paid</small>
                                                </td>
                                                <td>$30.74</td>
                                                <td>$46.14</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-3951" class="collapse in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Urna Et PC
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            3132 Mi Av.
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (459)
                                                            982-1284
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Burkina Faso
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr class="accordion-toggle collapsed" id="c-3599" data-toggle="collapse"
                                                data-parent="#c-3599" href="#collap-3599">
                                                <td>3599</td>
                                                <td>
                                                    2020-09-12 11:21:03
                                                </td>
                                                <td>3951</td>
                                                <td>Alexander Ellis</td>
                                                <td>
                                                    <span class="badge badge-pill badge-primary mr-2">P</span><small
                                                        class="text-muted">Invoiced</small>
                                                </td>
                                                <td>$37.39</td>
                                                <td>$80.11</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collap-3599" class="collapse in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-1">
                                                            Company
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Mi
                                                            Consulting
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Address
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            921-6311 Nam
                                                            Av.
                                                        </dd>
                                                        <dt class="col-sm-1">
                                                            Phone
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            (759)
                                                            501-2397
                                                        </dd>
                                                        <dt class="col-sm-1 text-truncate">
                                                            Region
                                                        </dt>
                                                        <dd class="col-sm-2">
                                                            Singapore
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end section -->
                </div>
                <!-- .col-12 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog"
            aria-labelledby="defaultModalLabel" aria-hidden="true">
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
