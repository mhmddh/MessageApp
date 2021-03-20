@extends('master')



@section('content')

<div class="container">

<h2 class="display-3">
    Edit your Message
</h1>

{!! Form::open(['action' => ['MessageController@update', $message->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $message->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
    {{Form::label('content', 'Content')}}
    {{Form::textarea('content', $message->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content'])}}
</div>


{{Form::hidden('_method','PUT')}}
{{Form::submit('Save', ['class'=>'btn btn-primary'])}}
<a class="btn btn-warning btn-close" href="/">Cancel</a>

{!! Form::close() !!}




