
{{ Form::open(array('url'=>$form_url)) }}
<div class="form-group">
    {{ Form::label('name','Title') }}
    {{ Form::text('name', $model->name, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('url','URL') }}
    {{ Form::text('url', $model->url, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('short_content','Short Content') }}
    {{ Form::textarea('short_content', $model->short_content, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('content', 'Content') }}
    {{ Form::textarea('content', $model->content, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('trailer','Trailer') }}
    {{ Form::textarea('trailer', $model->trailer, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('film','Movie Link') }}
    {{ Form::textarea('film', $model->film, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('actor','Actors') }}
    {{ Form::textarea('actor', $model->actor, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('year','Release Date') }}
    {{ Form::text('year', $model->year, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('status','Status') }}
    {{ Form::text('status', $model->status, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('category_ids','Genre') }}
    {{ Form::select('category_ids[]', $categories, $model->category_ids, ['multiple' => 'multiple', 'class' => 'form-control']) }}
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

{{ Form::close() }}