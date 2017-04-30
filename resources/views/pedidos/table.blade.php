<table class="table table-responsive" id="pedidos-table">
    <thead>
        <th>Data</th>
        <th>Status</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Cliente Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{!! $pedido->data !!}</td>
            <td>{!! $pedido->status !!}</td>
            <td>{!! $pedido->tipo !!}</td>
            <td>{!! $pedido->valor !!}</td>
            <td>{!! $pedido->cliente_id !!}</td>
            <td>
                {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pedidos.show', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pedidos.edit', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>