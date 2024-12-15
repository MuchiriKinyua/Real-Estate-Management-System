<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="appointments-table">
            <thead>
            <tr>
                <th>Property Id</th>
                <th>Client Id</th>
                <th>Agent Id</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Status</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->property_id }}</td>
                    <td>{{ $appointment->client_id }}</td>
                    <td>{{ $appointment->agent_id }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->appointment_time }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>{{ $appointment->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('appointments.show', [$appointment->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('appointments.edit', [$appointment->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $appointments])
        </div>
    </div>
</div>
