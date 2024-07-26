@extends('layouts.nav')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="card-header">
        <div class="float-start py-2 px-4">
            Selamat datang kembali, {{ $user->name }}! Cek update terbaru dan lakukan pengaturan yang diperlukan di
            dashboard ini.
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <i class="bi bi-person-plus-fill mx-4" style="font-size: 64px"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                Total User<br>
                                <B>{{ $totalUsers }}</B>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 360px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="/dist/assets/img/profile.jpg" class="img-fluid rounded-start" alt="profile">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->name }}</h5>
                                <p class="card-text">{{ $user->email }}</p>
                                <p class="card-text"><small class="text-body-secondary">{{ $user->created_at}}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection