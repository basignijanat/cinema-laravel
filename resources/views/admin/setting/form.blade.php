{{ Form::open(array('url'=>$form_url)) }}

<div class="form-group">
    {{ Form::label('name','Назание') }}
    {{ Form::text('name', $model->name, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('value','URL') }}
    {{ Form::text('value', $model->value, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <div class="col md-1">
        {{ Form::submit('Save', ['name' => 'save', 'class' => 'btn btn-success']) }}
    </div>
    <div class="col md-1">
        <? if (strpos($form_url, 'update')):?>
        <div class="form-group">
            {{ Form::submit('Apply', ['name' => 'apply', 'class' => 'btn btn-default']) }}
        </div>
        <? endif;?>
    </div>
</div>

{{ Form::close() }}