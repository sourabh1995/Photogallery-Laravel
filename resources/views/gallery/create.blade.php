@extends('layouts.main')

@section('content')

<div class="callout primary">
<div class="row column">
<h1>Hello! This is the portfolio of a very witty person.</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>
<div class="main">
	{!! Form::open(array('url' => '/store', 'enctype' => 'multipart/form-data')) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $value = null, $attributes = ['placeholder' => 'Gallery name', 'name' => 'name']) !!}
    {!! Form::label('description', 'Description') !!}
    {!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Gallery description', 'name' => 'description']) !!}
    {!! Form::label('cover_image', 'Cover Image') !!}
    {!! Form::file('cover_image') !!}
    {!! Form::submit('Submit', $attributes = ['class' => 'button'])!!}

	{!! Form::close() !!}

</div>
</div>
</div>


@stop