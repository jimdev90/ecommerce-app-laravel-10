@extends('frontend.dashboard.layouts.master')
@section('content')
    <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
        <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i> Mi perfil</h3>
            <div class="wsus__dashboard_profile">
                <div class="wsus__dash_pro_area">
                    <h4>Información básica</h4>

                    <form action="{{ route('vendedor.perfil.actualizar') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <div class="wsus__dash_pro_img">
                                    <img
                                        src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('frontend/images/ts-2.jpg') }}"
                                        alt="{{ auth()->user()->name }}"
                                        class="img-fluid w-100">
                                    <input type="file" name="image">
                                </div>
                            </div>

                            <div class="col-md-12 mt-5">
                                <div class="wsus__dash_pro_single">
                                    <i class="fas fa-user-tie"></i>
                                    <input type="text" name="name" placeholder="Nombres" value="{{ auth()->user()->name }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="wsus__dash_pro_single">
                                    <i class="fal fa-envelope-open"></i>
                                    <input type="email" name="email" placeholder="Email" value="{{ auth()->user()->email }}">
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-12">
                            <button class="common_btn mb-4 mt-2" type="submit">Actualizar</button>
                        </div>
                    </form>

                    <div class="wsus__dash_pass_change mt-2">
                        <form action="{{ route('vendedor.perfil.actualizar-password') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <h4>Actualizar Contraseña</h4>
                                <div class="col-xl-4 col-md-6">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-unlock-alt"></i>
                                        <input type="password" name="current_password" placeholder="Contraseña actual">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input type="password" name="password" placeholder="Nueva contraseña">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button class="common_btn" type="submit">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
