@extends('layouts.dashboard')

@section('title')
    Daita Skincare &#8211; Pancarkan Pesona Cantikmu 
@endsection

@section('content')
        <!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Create New Product</h2>
                    <p class="dashboard-subtitle">Create your own product</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card card-list p-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Product Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Price</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea name="editor"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Cara Penggunaan</label>
                                                <textarea name="howtouse" id cols="30" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Bahan - bahan</label>
                                                <textarea name="ingredients" id cols="30" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Thumbnails</label>
                                                <input type="file" class="form-control pt-1">
                                                <p class="text-muted">
                                                    Kamu dapat memilih lebih dari satu gambar.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-success btn-block px-5">
                                            Save Now
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush



