@extends('pages.layout')

@section('content')
    <h1>Articles</h1>

    <hr/>


{!! link_to('articles/create','新規作成', ['class' => 'btn btn-primary'] ) !!}
<hr/>
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ url('articles', $article->id) }}">
                    {{ $article->title }}
                </a>
            </h2>
            <div class="body">
                {{ $article->body }}
            </div>
        </article>
        {!! link_to(action('ArticlesController@edit', [$article->id]), '編集', ['class' => 'btn btn-primary']) !!}

        {!! delete_form(['articles', $article->id]) !!}

        <hr/>
    @endforeach
@endsection
