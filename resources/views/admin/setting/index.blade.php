@extends('admin.layouts.admin')

<?
    use App\Setting;
?>

@section('title', trans('backend.settings'))

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Setting List</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/setting/create" class="btn btn-success">Create Setting</a>
                            </div>
                        </div>
                    </div>
                    <div class=""></div>
                    <div class="card-body">
                        <!--div class="table-responsive">
                            <table class="table">
                                <meta name="csrf-token" content="">
                                <thead class=" text-primary">
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Value
                                </th>
                                <th class="text-center">

                                </th>
                                </thead>
                                <tbody-->
                        {{ $settings }}
                            {{ Form::open(array('url'=>'/admin/setting')) }}

                            @foreach ($settings as $model)
                                <div class="form-group">
                                    {{ Form::label($model->name, $model->name) }}
                                    {{ Form::text($model->name, $model->value, ['class' => 'form-control']) }}
                                </div>
                            @endforeach
                            <div class="form-group">
                                <div class="col md-1">
                                    {{ Form::submit('Save', ['name' => 'save', 'class' => 'btn btn-success']) }}
                                </div>
                            </div>

                            {{ Form::close() }}
                                <!--/tbody>
                            </table-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection