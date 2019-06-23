@extends('admin.layouts.admin')

@section('title', 'Admin - Update Setting')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Update Setting</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
    <?= view('admin.setting.form', ['model' => $data, 'form_url' => 'admin/setting/update/'.$id]) ?>

@endsection