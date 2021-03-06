@extends('userpage.layout')
@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-7"
                style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <!-- Modal Update -->
            <div class="modal fade" id="exampleModal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="updateAccount" action="/updateAccountUser" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$user->id}}">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="name_register" name="name_register"
                                        placeholder="Full Name" value="{{ $user->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Username</label>
                                    <input type="text" class="form-control" id="username_register"
                                        name="username_register" placeholder="username" value="{{$user->username}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input type="email" class="form-control" id="email_register" name="email_register"
                                        placeholder="name@example.com" value="{{$user->email}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_register"
                                        name="phone_register" placeholder="phone number" value="{{$user->phone_number}}" required >
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Address</label>
                                    <input type="text" class="form-control" id="address_register"
                                        name="address_register" placeholder="Adress" value="{{$user->address}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Gender</label>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="gender_register" value="Gentlemen"
                                            id="customRadio1" {{$user->gender == 'Gentlemen' ? "checked" : ""}} active>
                                        <label class="custom-control-label" for="customRadio1" >Gentlemen</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender_register" value="Ladies"
                                            id="customRadio2" {{$user->gender == 'Ladies' ? "checked" : ""}}>
                                        <label class="custom-control-label" for="customRadio2">Ladies</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Picture Profile</label>
                                    <input type="file" class="form-control" id="name_img" name="name_img" placeholder=""
                                        required>
                                </div>
                                <input type="hidden" class="form-control" id="role_register" name="role_register">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Password</label>
                                    <input type="password" class="form-control" id="password_register"
                                        name="password_register"
                                        placeholder="Left it blank if you won't change your password" required>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary"
                                onclick="$('#updateAccount').submit()">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ asset($user->picture) }}" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="h-100">
                                <h5 class="mb-1 text-center">
                                    {{ $user->name }}
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm text-center">
                                    {{ $user->role_id == 1 ? 'Admin' : 'User' }}
                                </p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-primary" onclick="$('#exampleModal_update').modal('show');">
                            <span class="btn-inner--icon">
                                <!-- <i class="ni ni-button-play"></i> -->
                                <i class="fas fa-user-edit text-sm mx-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Edit Profile"></i>
                            </span>
                            <span class="btn-inner--text mx-1">Edit</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <!--<div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Profile Information</h6>
                                </div>
                            </div>-->
                        </div>
                        <div class="card-body p-3">
                            <h2>
                                Profile Information
                            </h2>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                        Name:</strong> &nbsp; {{ $user->name }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Mobile:</strong> &nbsp; {{ $user->phone_number }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Email:</strong> &nbsp; {{ $user->email }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Address:</strong> &nbsp; {{ $user->address }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Gender:</strong> &nbsp; {{ $user->gender }}</li>
                                <li class="list-group-item border-0 ps-0 pb-0">
                                    <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Platform Settings</h6>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault">Email me when someone follows me</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault1">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault2" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault3">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault3">New launches and projects</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault4" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault4">Monthly product updates</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 pb-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault5">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free
                    Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
