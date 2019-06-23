
{{ Form::open(array('url'=>$form_url)) }}

<div class="form-group">
    {{ Form::label('hall_id','Hall Id') }}
    {{ Form::select('hall_id', $halls, $model->hall_id, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('seat_row','Seat Row') }}
    {{ Form::text('seat_row', $model->seat_row, ['class' => 'form-control', 'required', 'pattern' => '^[0-9]+$']) }}
</div>
<div class="form-group">
    {{ Form::label('seat_place', 'Seat Place') }}
    {{ Form::text('seat_place', $model->seat_place, ['class' => 'form-control', 'required' => 'required', 'pattern' => '^[0-9]+$']) }}
</div>
<div class="form-group">
    {{ Form::label('type', 'Type') }}
    {{ Form::text('type', $model->type, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('status', 'Status') }}
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

{{ Form::close() }}