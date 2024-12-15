<!-- Property Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_id', 'Property Id:') !!}
    {!! Form::number('property_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client Id:') !!}
    {!! Form::number('client_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Agent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    {!! Form::number('agent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Appointment Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appointment_date', 'Appointment Date:') !!}
    {!! Form::text('appointment_date', null, ['class' => 'form-control','id'=>'appointment_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#appointment_date').datepicker()
    </script>
@endpush

<!-- Appointment Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appointment_time', 'Appointment Time:') !!}
    {!! Form::text('appointment_time', null, ['class' => 'form-control','id'=>'appointment_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#appointment_time').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>