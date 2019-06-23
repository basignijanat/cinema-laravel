{{ Form::open(array('url'=>$form_url)) }}

<div class="form-group">
    {{ Form::label('name','Назание') }}
    {{ Form::text('name', $model->name, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('url','URL') }}
{{ Form::text('url', $model->url, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('short_content','Краткое описание') }}
{{ Form::textarea('short_content', $model->short_content, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('content','Описание') }}
{{ Form::textarea('content', $model->content, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::hidden ('image', $model->image) }}
</div>
<div class="form-group">
{{ Form::label('status','Status') }}
{{ Form::text('status', $model->status, ['class' => 'form-control']) }}
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