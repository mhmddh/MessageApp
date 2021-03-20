@extends('master')

@section('title','Homepage')

@section('content')



<div class="container">
    <h1 class="display-1">MessageApp <img width="100" height="100" src="/images/message-logo.jpg"> </h1>

<h2 class="display-3">
    Post a Message
</h1>


  <form action="/create" method="POST">
    {{ csrf_field() }}
    <input class="form-control" type="text" name="title" placeholder="Title">
    <br/>
    <input class="form-control" type="text" name="content" placeholder="Content">
    <br/>
    <button class="btn btn-primary" type="submit"> Submit</button>
</form>


<br/>

<h3 class="display-4">Recent Messages:</h3>



<table class='table table-striped' aria-labelledby="tableLabel">
    <thead>
      <tr>
        <th>Message Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($messages as $message)

        <td>{{$message->title}}</td>
        <td>{{ $message->content }}</td>
        <td>{{$message->created_at->diffForHumans()}}</td>

        <td>
            <a  href="/message/{{$message->id}}" class="btn btn-primary">Edit</a>
            <a  href="/delete/{{$message->id}}" class="btn btn-danger">Delete </a>

            &nbsp;
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection


