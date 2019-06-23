@extends('admin.layouts.admin')

@section('title', 'Create Place')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Create Place</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
    <?= view('admin.place.form', ['model' => $model, 'form_url' => 'admin/place/create', 'halls' => $halls]) ?>

@endsection