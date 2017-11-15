@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Post</h2>
                <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="body" id="body" cols="100" rows="10">{{ $post->body }}</textarea>
                    </div>
                    <input type="submit" value="Atualizar Post" class="btn btn-primary">
                </form>

            </div>
        </div>
    </div>
@endsection