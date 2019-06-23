@extends('admin.layouts.admin')

@section('title', 'Create Category')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Create Category</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
    <?= view('admin.category.form', ['model' => $model, 'form_url' => 'admin/category/create']) ?>

@endsection