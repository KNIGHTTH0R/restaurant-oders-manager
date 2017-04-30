<table class="table table-responsive" id="produtos-table">
    <thead>
        <th>Nome</th>
        <th>Quant Min</th>
        <th>Quant</th>
        <th>Preco</th>
        <th>Categoria Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($produtos as $produto)
        <tr>
            <td>{!! $produto->nome !!}</td>
            <td>{!! $produto->quant_min !!}</td>
            <td>{!! $produto->quant !!}</td>
            <td>{!! $produto->preco !!}</td>
            <td>{!! $produto->categoria_id !!}</td>
            <td>
                {!! Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('produtos.show', [$produto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('produtos.edit', [$produto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>