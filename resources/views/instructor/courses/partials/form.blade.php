<div class="mb-4">
    {!! Form::label('title','Titulo del Curso') !!}
    {!! Form::text('title',null,['class'=>'form-control block w-full mt-1'.($errors->has('title')? ' border-red-600' : '')]) !!}
    @error('title')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('slug','Slug del Curso') !!}
    {!! Form::text('slug',null,['readonly'=>'readonly','class'=>'form-control block w-full mt-1'.($errors->has('slug')? ' border-red-600' : '')]) !!}
    @error('slug')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('subtitle','Subtitulo del Curso') !!}
    {!! Form::text('subtitle',null,['class'=>'form-control block w-full mt-1'.($errors->has('subtitle')? ' border-red-600' : '')]) !!}
    @error('subtitle')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('description','Descripcion del Curso') !!}
    {!! Form::textarea('description',null,['class'=>'form-control block w-full mt-1'.($errors->has('description')? ' border-red-600' : '')]) !!}
    @error('description')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-5 my-8">
    <div>
        {!! Form::label('category_id','Categoria') !!}
        {!! Form::select('category_id', $categories,null, ['class'=>'form-input block w-full mt-1']) !!}
    </div>
    <div>
        {!! Form::label('level_id','Niveles') !!}
        {!! Form::select('level_id', $levels,null, ['class'=>'form-input block w-full mt-1']) !!}
    </div>
    <div>
        {!! Form::label('price_id','Precios') !!}
        {!! Form::select('price_id', $prices,null, ['class'=>'form-input block w-full mt-1']) !!}
    </div>
</div>
<h1 class="text-2xl font-bold mb-8">Portada del curso</h1>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <figure>
        @isset($course->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/4491461/pexels-photo-4491461.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        @endisset
    </figure>
    <div>
        {!! Form::label('file', 'Seleccionar imagen', ['class' =>  ($errors->has('file') ? 'text-red-500' : '')]) !!}
        {!! Form::file('file', ['class' => 'block mt-1', 'accept' => 'image/*']) !!}
        @error('file')
            <b class="block text-xs text-red-500 mt-1">{{ $message }}</b>
        @enderror
    </div>
</div>
