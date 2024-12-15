<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clients-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Client Type</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->full_name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->client_type }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('clients.show', [$client->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('clients.edit', [$client->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $clients])
        </div>
    </div>
</div>
