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

<!-- Transaction Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    {!! Form::text('transaction_type', null, ['class' => 'form-control', 'maxlength' => 30, 'maxlength' => 30]) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Transaction Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    {!! Form::text('transaction_date', null, ['class' => 'form-control','id'=>'transaction_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#transaction_date').datepicker()
    </script>
@endpush