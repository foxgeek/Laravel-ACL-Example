@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @forelse($posts as $post)
                <h2>{{ $post->title }}</h2>
                <p>
                    {{ $post->body }}
                </p>
                <strong style="display: block;">Autor: {{ $post->user->name }}</strong>
                @can('update-post', $post)
                <a href="{{ route('posts.edit', ['id'=> $post->id]) }}" class="btn btn-primary">Editar Post</a>
                @endcan
                <hr>
            @empty
                <h3>Nenhum post encontrado</h3>
                <p>Para criar os posts use a PostFactory.</p>
            @endforelse

        </div>
    </div>
</div>
@endsection
