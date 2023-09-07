@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form
                            method="post"
                            class="needs-validation"
                            novalidate=""
                            action="{{ route('admin.perfil.actualizar') }}"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Actualizar Perfil</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-12">
                                        <div class="mb-3">
                                            <img width="100px" src="{{ asset(auth()->user()->image) }}" alt="">
                                        </div>
                                        <label>Imagen</label>
                                        <input name="image" type="file" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>Nombre</label>
                                        <input name="name" type="text" class="form-control"
                                               value="{{ auth()->user()->name }}" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input name="email" type="text" class="form-control"
                                               value="{{ auth()->user()->email }}" required="">

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form
                            method="post"
                            class="needs-validation"
                            novalidate=""
                            action="{{ route('admin.password.actualizar') }}"
                        >
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Actualizar Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-12">
                                        <label>Contraseña Actual</label>
                                        <input name="current_password" type="password" class="form-control">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Nueva Contraseña</label>
                                        <input name="password" type="password" class="form-control">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Confirmar Contraseña</label>
                                        <input name="password_confirmation" type="password" class="form-control">
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
