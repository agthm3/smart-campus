<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />

    {{-- <script src="https://kit.fontawesome.com/795e24dc42.js" crossorigin="anonymous"></script> --}}
    <title>SmartCampus Universitas Hasanuddin</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}">
    <!-- Fonts CSS -->
    {{-- <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" /> --}}
    <!-- Icons CSS -->
    {{-- @include('includes.resources.css') --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/feather.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
<link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">> --}}

    <!-- Date Range Picker CSS -->
    {{-- <link rel="stylesheet" href="asset('css/daterangepicker.css')" /> --}}
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled /> --}}
</head>

<body class="vertical light">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fa fal fa-bars"></i>
            </button>

            <form class="form-inline mr-auto  text-muted">
                <i class="fa far fa-search"></i> <input
                    class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                    placeholder=" Type something..." aria-label="Search" />
            </form>
            <ul class="nav">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2"> <small>{{ Auth::user()->name }}</small>
                            <img src="{{ asset('assets/avatars/face-1.jpg') }}" alt="..."
                                class="avatar-img rounded-circle" />
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activities</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a class="dropdown-item " href="#"> <button type="submit"> Logout</button></a>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        @include('includes.dashboard.sidebar')
        @yield('content')
        <!-- main -->
    </div>
    <!-- .wrapper -->
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('dashboard/js/popper.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('dashboard/js/moment.min.js') }}"></script> --}}
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('dashboard/js/simplebar.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('dashboard/js/daterangepicker.js') }}"></script> --}}
    {{-- <script src="{{ asset('dashboard/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('dashboard/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('dashboard/js/config.js') }}"></script>
    <script src="{{ asset('dashboard/js/d3.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('dashboard/js/topojson.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('dashboard/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('dashboard/js/Chart.min.js') }}"></script> --}}
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    {{-- <script src="{{ asset('dashboard/js/gauge.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/select2.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('dashboard/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('dashboard/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/uppy.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/quill.min.js') }}"></script> --}}
    {{-- <script>
        $(".select2").select2({
            theme: "bootstrap4",
        });
        $(".select2-multi").select2({
            multiple: true,
            theme: "bootstrap4",
        });
        $(".drgpicker").daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
                format: "MM/DD/YYYY",
            },
        });
        $(".time-input").timepicker({
            scrollDefault: "now",
            zindex: "9999" /* fix modal open */ ,
        });
        /** date range picker */
        if ($(".datetimes").length) {
            $(".datetimes").daterangepicker({
                timePicker: true,
                startDate: moment().startOf("hour"),
                endDate: moment().startOf("hour").add(32, "hour"),
                locale: {
                    format: "M/DD hh:mm A",
                },
            });
        }
        var start = moment().subtract(29, "days");
        var end = moment();

        function cb(start, end) {
            $("#reportrange span").html(
                start.format("MMMM D, YYYY") +
                " - " +
                end.format("MMMM D, YYYY")
            );
        }
        $("#reportrange").daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    Today: [moment(), moment()],
                    Yesterday: [
                        moment().subtract(1, "days"),
                        moment().subtract(1, "days"),
                    ],
                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                    "Last 30 Days": [
                        moment().subtract(29, "days"),
                        moment(),
                    ],
                    "This Month": [
                        moment().startOf("month"),
                        moment().endOf("month"),
                    ],
                    "Last Month": [
                        moment().subtract(1, "month").startOf("month"),
                        moment().subtract(1, "month").endOf("month"),
                    ],
                },
            },
            cb
        );
        cb(start, end);
        $(".input-placeholder").mask("00/00/0000", {
            placeholder: "__/__/____",
        });
        $(".input-zip").mask("00000-000", {
            placeholder: "____-___",
        });
        $(".input-money").mask("#.##0,00", {
            reverse: true,
        });
        $(".input-phoneus").mask("(000) 000-0000");
        $(".input-mixed").mask("AAA 000-S0S");
        $(".input-ip").mask("0ZZ.0ZZ.0ZZ.0ZZ", {
            translation: {
                Z: {
                    pattern: /[0-9]/,
                    optional: true,
                },
            },
            placeholder: "___.___.___.___",
        });
        // editor
        var editor = document.getElementById("editor");
        if (editor) {
            var toolbarOptions = [
                [{
                    font: [],
                }, ],
                [{
                    header: [1, 2, 3, 4, 5, 6, false],
                }, ],
                ["bold", "italic", "underline", "strike"],
                ["blockquote", "code-block"],
                [{
                        header: 1,
                    },
                    {
                        header: 2,
                    },
                ],
                [{
                        list: "ordered",
                    },
                    {
                        list: "bullet",
                    },
                ],
                [{
                        script: "sub",
                    },
                    {
                        script: "super",
                    },
                ],
                [{
                        indent: "-1",
                    },
                    {
                        indent: "+1",
                    },
                ], // outdent/indent
                [{
                    direction: "rtl",
                }, ], // text direction
                [{
                        color: [],
                    },
                    {
                        background: [],
                    },
                ], // dropdown with defaults from theme
                [{
                    align: [],
                }, ],
                ["clean"], // remove formatting button
            ];
            var quill = new Quill(editor, {
                modules: {
                    toolbar: toolbarOptions,
                },
                theme: "snow",
            });
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            "use strict";
            window.addEventListener(
                "load",
                function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms =
                        document.getElementsByClassName("needs-validation");
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(
                        forms,
                        function(form) {
                            form.addEventListener(
                                "submit",
                                function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add("was-validated");
                                },
                                false
                            );
                        }
                    );
                },
                false
            );
        })();
    </script>
    <script>
        var uptarg = document.getElementById("drag-drop-area");
        if (uptarg) {
            var uppy = Uppy.Core()
                .use(Uppy.Dashboard, {
                    inline: true,
                    target: uptarg,
                    proudlyDisplayPoweredByUppy: false,
                    theme: "dark",
                    width: 770,
                    height: 210,
                    plugins: ["Webcam"],
                })
                .use(Uppy.Tus, {
                    endpoint: "https://master.tus.io/files/",
                });
            uppy.on("complete", (result) => {
                console.log(
                    "Upload complete! We’ve uploaded these files:",
                    result.successful
                );
            });
        }
    </script>
    <script src="{{ asset('dashboard/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-56159088-1");
    </script> --}}
</body>

</html>
