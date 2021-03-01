<div class="input-gorup">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la publicación']) !!}

    @error('nombre')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror

</div>

<div class="input-gorup">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre el slug','readonly']) !!}

    @error('slug')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

    @error('category_id')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->nombre }}
        </label>
    @endforeach
    
    @error('tags')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label class="mr-2">
        {!! Form::radio('status', 0, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 1) !!}
        Publicado
    </label>
    
    @error('status')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="" srcset="">    
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624_960_720.jpg" alt="" srcset="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen de muestra en caso que de que no suba una !') !!}
            {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}

            @error('file')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}

    @error('extract')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

    @error('body')
      <div class="alert alert-danger mt-2" role="alert">
            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
       </div>
    @enderror
</div>
