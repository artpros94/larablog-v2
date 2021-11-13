@extends('layouts.app')

@section('title', 'Larablog-v2')

@section('content')

<div class="h3">
    Всего постов: <span>{{ count($posts) }}</span>
</div>
@foreach($posts as $post)
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        
        <h3 class="mb-0">{{ $post->title }}</h3>
        <p class="card-text mb-auto mt-3">
            {{ $post->text }}
        </p>
        <div class="row mt-3">
            <div class="col-4">
            <div class="mb-1 text-muted">{{ $post->created_at }}</div>
            </div>
            <div class="col-4">
                <strong class="d-inline-block mb-2 text-primary">Категория: <span>{{ $post->category->name }}</span></strong>
            </div>
            <div class="col-4">
                <a href="{{ route('post.show', $post->id ) }}" class="">Читать далее...</a>
            </div>
        </div>
        
        
    </div>
</div>
@endforeach


@endsection

