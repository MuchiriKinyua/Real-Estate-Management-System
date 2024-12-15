<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $client->full_name }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $client->phone }}</p>
</div>

<!-- Client Type Field -->
<div class="col-sm-12">
    {!! Form::label('client_type', 'Client Type:') !!}
    <p>{{ $client->client_type }}</p>
</div>

