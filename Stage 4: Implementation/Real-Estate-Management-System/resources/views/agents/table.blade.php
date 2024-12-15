<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="agents-table">
            <thead>
            <tr>
                <th>Property Id</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Agency Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agents as $agent)
                <tr>
                    <td>{{ $agent->property_id }}</td>
                    <td>{{ $agent->full_name }}</td>
                    <td>{{ $agent->phone }}</td>
                    <td>{{ $agent->agency_name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('agents.show', [$agent->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('agents.edit', [$agent->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $agents])
        </div>
    </div>
</div>
