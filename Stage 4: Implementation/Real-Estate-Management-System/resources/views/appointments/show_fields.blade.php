<!-- Property Id Field -->
<div class="col-sm-12">
    {!! Form::label('property_id', 'Property Id:') !!}
    <p>{{ $appointment->property_id }}</p>
</div>

<!-- Client Id Field -->
<div class="col-sm-12">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $appointment->client_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $appointment->agent_id }}</p>
</div>

<!-- Appointment Date Field -->
<div class="col-sm-12">
    {!! Form::label('appointment_date', 'Appointment Date:') !!}
    <p>{{ $appointment->appointment_date }}</p>
</div>

<!-- Appointment Time Field -->
<div class="col-sm-12">
    {!! Form::label('appointment_time', 'Appointment Time:') !!}
    <p>{{ $appointment->appointment_time }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $appointment->status }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $appointment->notes }}</p>
</div>

