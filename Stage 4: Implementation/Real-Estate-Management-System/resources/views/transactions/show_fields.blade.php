<!-- Property Id Field -->
<div class="col-sm-12">
    {!! Form::label('property_id', 'Property Id:') !!}
    <p>{{ $transaction->property_id }}</p>
</div>

<!-- Client Id Field -->
<div class="col-sm-12">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $transaction->client_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $transaction->agent_id }}</p>
</div>

<!-- Transaction Type Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    <p>{{ $transaction->transaction_type }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $transaction->amount }}</p>
</div>

<!-- Transaction Date Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    <p>{{ $transaction->transaction_date }}</p>
</div>

