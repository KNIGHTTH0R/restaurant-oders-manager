<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $produto->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $produto->nome !!}</p>
</div>

<!-- Quant Min Field -->
<div class="form-group">
    {!! Form::label('quant_min', 'Quant Min:') !!}
    <p>{!! $produto->quant_min !!}</p>
</div>

<!-- Quant Field -->
<div class="form-group">
    {!! Form::label('quant', 'Quant:') !!}
    <p>{!! $produto->quant !!}</p>
</div>

<!-- Preco Field -->
<div class="form-group">
    {!! Form::label('preco', 'Preco:') !!}
    <p>{!! $produto->preco !!}</p>
</div>

<!-- Categoria Id Field -->
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    <p>{!! $produto->categoria_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $produto->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $produto->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $produto->deleted_at !!}</p>
</div>

