@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                <div class="breadcrumb-item"><a href="#">Slider</a></div>
                <div class="breadcrumb-item">Crear</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Crear Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="banner">Banner</label>
                                    <input id="banner" type="file" class="form-control" name="banner">
                                </div>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="starting_price">Starting Price</label>
                                    <input id="starting_price" type="number" class="form-control" name="starting_price" value="{{ old('starting_price') }}">
                                </div>
                                <div class="form-group">
                                    <label for="btn_url">Button Url</label>
                                    <input id="btn_url" type="url" class="form-control" name="btn_url" value="{{ old('btn_url') }}">
                                </div>
                                <div class="form-group">
                                    <label for="serial">Serial</label>
                                    <input id="serial" type="number" class="form-control" name="serial" value="{{ old('serial') }}">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="" selected>Seleccione...</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
