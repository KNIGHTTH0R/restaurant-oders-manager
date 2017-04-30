<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Quant Min Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quant_min', 'Quant Min:') !!}
    {!! Form::number('quant_min', null, ['class' => 'form-control']) !!}
</div>

<!-- Quant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quant', 'Quant:') !!}
    {!! Form::number('quant', null, ['class' => 'form-control']) !!}
</div>

<!-- Preco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco', 'Preco:') !!}
    {!! Form::number('preco', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    {!! Form::number('categoria_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('produtos.index') !!}" class="btn btn-default">Cancel</a>
</div>
