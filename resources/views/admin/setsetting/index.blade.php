{{ Form::open(array('url'=>'/admin/setsetting')) }}

@foreach ($settings as $model)
<div class="form-group">
    {{ Form::label('email', $model->name) }}
    {{ Form::text('email', $model->value, ['class' => 'form-control']) }}
</div>
@endforeach
<div class="form-group">
    <div class="col md-1">
        {{ Form::submit('Save', ['name' => 'save', 'class' => 'btn btn-success']) }}
    </div>
</div>

{{ Form::close() }}