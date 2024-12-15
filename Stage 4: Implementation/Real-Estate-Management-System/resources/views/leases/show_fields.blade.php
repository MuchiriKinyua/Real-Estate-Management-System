<!-- Property Id Field -->
<div class="col-sm-12">
    {!! Form::label('property_id', 'Property Id:') !!}
    <p>{{ $lease->property_id }}</p>
</div>

<!-- Client Id Field -->
<div class="col-sm-12">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $lease->client_id }}</p>
</div>

<!-- Start Date Field -->
<div class="col-sm-12">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $lease->start_date }}</p>
</div>

<!-- End Date Field -->
<div class="col-sm-12">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{{ $lease->end_date }}</p>
</div>

<!-- Monthly Rent Field -->
<div class="col-sm-12">
    {!! Form::label('monthly_rent', 'Monthly Rent:') !!}
    <p>{{ $lease->monthly_rent }}</p>
</div>

<!-- Payment Status Field -->
<div class="col-sm-12">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{{ $lease->payment_status }}</p>
</div>

