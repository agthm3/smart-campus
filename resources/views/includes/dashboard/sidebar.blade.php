 <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
     <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
         <i class="fe fe-x"><span class="sr-only"></span></i>
     </a>
     <nav class="vertnav navbar navbar-light">
         <!-- nav bar -->
         <div class="w-100 mb-4 d-flex">
             <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('dashboard.index') }}">
                 <img src="{{ asset('assets/images/logo.png') }}" style="width: 30%" alt="" />
             </a>
         </div>
         <ul class="navbar-nav flex-fill w-100 mb-2">
             <li class="nav-item dropdown">
                 <a href="{{ route('dashboard.index') }}" class="nav-link">
                     <i class="fa fa-solid fa-bars"></i>
                     <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                 </a>
             </li>
         </ul>
         <p class="text-muted nav-heading mt-4 mb-1">
             <span>Components</span>
         </p>
         <ul class="navbar-nav flex-fill w-100 mb-2">
             <li class="nav-item dropdown">
                 <a href="#tables" data-toggle="collapse" aria-expanded="false" class=" nav-link">
                     <i class="fa fa-solid fa-bars"></i>
                     <span class="ml-3 item-text">Sistem Absensi </span> <i class="fas fa-chevron-right"
                         style="float: right"></i>
                 </a>
                 <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                     <li class="nav-item">
                         <a class="nav-link pl-3" href="{{ route('absensi.index') }}"><span
                                 class="ml-1 item-text">Absensi</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link pl-3" href="{{ route('datamahasiswa.index') }}"><span
                                 class="ml-1 item-text">Data
                                 Mahasiswa</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link pl-3" href="{{ route('rekapabsensi.index') }}"><span
                                 class="ml-1 item-text">Rekap
                                 Absensi</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item dropdown">
                 <a href="#parking" data-toggle="collapse" aria-expanded="false" class=" nav-link">
                     <i class="fa fa-solid fa-bars"></i>
                     <span class="ml-3 item-text">Sistem Parkir</span> <i class="fas fa-chevron-right"
                         style="float: right"></i>
                 </a>
                 <ul class="collapse list-unstyled pl-4 w-100" id="parking">
                     <li class="nav-item">
                         <a class="nav-link pl-3" href="{{ route('openbarier.index') }}"><span
                                 class="ml-1 item-text">Open
                                 Barier</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link pl-3" href="{{ route('rekapparkir.index') }}"><span
                                 class="ml-1 item-text">Rekap
                                 Parkir</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link pl-3" href="{{ route('areaparkir.index') }}"><span
                                 class="ml-1 item-text">Area
                                 Parkir</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item dropdown">
                 <a href="{{ route('pendinguser.index') }}" class="nav-link">
                     <i class="fa fa-solid fa-bars"></i>
                     <span class="ml-3 item-text">Pending User</span>
                 </a>
             </li>
             <li class="nav-item dropdown">
                 <a href="{{ route('indoormonitoring.index') }}" class="nav-link">
                     <i class="fa fa-solid fa-bars"></i>
                     <span class="ml-3 item-text">Indoor Monitoring</span>
                 </a>
             </li>
         </ul>

         <p class="text-muted nav-heading mt-4 mb-1">
             <span>Pengaturan</span>
         </p>
         <ul class="navbar-nav flex-fill w-100 mb-2">
             <li class="nav-item dropdown">
                 <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                     <i class="fe fe-shield fe-16"></i>
                     <span class="ml-3 item-text">Autentikasi</span>
                 </a>
                 <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                     <a class="nav-link pl-3" href="./auth-login.html"><span class="ml-1">Login 1</span></a>
                     <a class="nav-link pl-3" href="./auth-login-half.html"><span class="ml-1">Login
                             2</span></a>
                     <a class="nav-link pl-3" href="./auth-register.html"><span class="ml-1">Register</span></a>
                     <a class="nav-link pl-3" href="./auth-resetpw.html"><span class="ml-1">Reset
                             Password</span></a>
                     <a class="nav-link pl-3" href="./auth-confirm.html"><span class="ml-1">Confirm
                             Password</span></a>
                 </ul>
             </li>
         </ul>
     </nav>
 </aside>
