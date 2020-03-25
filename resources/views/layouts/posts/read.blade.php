@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-header"> {{ $post->title }}</div>
                <div class="card-body">
                    <p>By:{{ $post->users->name }}  <span style="float: right; !important">Created On: {{ $post->created_at }}</span></p>
                      <p> {{ $post->description }}</p>
                      <p> {{ $post->content }} </p>
                  </div>
              </div>
              <br>
              @endforeach
          </div>
      </div>
  </div>
  @endsection
