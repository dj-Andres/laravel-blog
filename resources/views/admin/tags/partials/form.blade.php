<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre']) !!}

    @error('nombre')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null,['class'=>'form-control','placeholder'=>'Ingrese el slug de la categoria','readonly']) !!}

    @error('slug')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}

    @error('color')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror
</div>