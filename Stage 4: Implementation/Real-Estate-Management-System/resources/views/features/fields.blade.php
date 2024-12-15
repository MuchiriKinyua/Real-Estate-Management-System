<!-- Property Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_id', 'Property Id:') !!}
    {!! Form::number('property_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Feature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feature', 'Feature:') !!}
    {!! Form::text('feature', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>