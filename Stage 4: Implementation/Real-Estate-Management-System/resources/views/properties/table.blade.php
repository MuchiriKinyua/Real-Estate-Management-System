<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="properties-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Property Type</th>
                <th>Price</th>
                <th>Status</th>
                <th>Description</th>
                <th>Agent Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->address }}</td>
                    <td>{{ $property->city }}</td>
                    <td>{{ $property->state }}</td>
                    <td>{{ $property->postal_code }}</td>
                    <td>{{ $property->property_type }}</td>
                    <td>{{ $property->price }}</td>
                    <td>{{ $property->status }}</td>
                    <td>{{ $property->description }}</td>
                    <td>{{ $property->agent_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('properties.show', [$property->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('properties.edit', [$property->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $properties])
        </div>
    </div>
</div>
