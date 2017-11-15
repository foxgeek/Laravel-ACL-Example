<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Suas postagens</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
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
                            @endforelse

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
