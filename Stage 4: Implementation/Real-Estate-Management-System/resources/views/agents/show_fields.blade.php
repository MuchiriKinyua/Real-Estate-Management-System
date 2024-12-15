<!-- Property Id Field -->
<div class="col-sm-12">
    {!! Form::label('property_id', 'Property Id:') !!}
    <p>{{ $agent->property_id }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $agent->full_name }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $agent->phone }}</p>
</div>

<!-- Agency Name Field -->
<div class="col-sm-12">
    {!! Form::label('agency_name', 'Agency Name:') !!}
    <p>{{ $agent->agency_name }}</p>
</div>

