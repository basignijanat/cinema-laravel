@extends('admin.layouts.admin')

@section('title', 'Page Title')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Update Movie</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
    <?= view('admin.movie.form', ['model' => $data, 'form_url' => 'admin/movie/update/'.$id, 'categories' => $categories]) ?>

@endsection