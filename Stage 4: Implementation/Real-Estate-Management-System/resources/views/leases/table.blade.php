<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="leases-table">
            <thead>
            <tr>
                <th>Property Id</th>
                <th>Client Id</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Monthly Rent</th>
                <th>Payment Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($leases as $lease)
                <tr>
                    <td>{{ $lease->property_id }}</td>
                    <td>{{ $lease->client_id }}</td>
                    <td>{{ $lease->start_date }}</td>
                    <td>{{ $lease->end_date }}</td>
                    <td>{{ $lease->monthly_rent }}</td>
                    <td>{{ $lease->payment_status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['leases.destroy', $lease->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('leases.show', [$lease->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('leases.edit', [$lease->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $leases])
        </div>
    </div>
</div>
