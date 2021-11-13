@extends('layouts.app')

@section('title', 'Larablog-v2')

@section('content')

<div class="h3">
    Всего постов: <span>33</span>
</div>

<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">

        <div class="row">
            <div class="col-8">
            <h3 class="mb-0">{{ $post->title }}</h3>
            </div>
            <div class="col-4">
                <strong class="d-inline-block mb-2 text-primary">Катнгория: <span>{{ $post->category->name }}</span></strong>
            </div>
        </div>
        
        <p class="card-text mb-auto mt-3">
        {{ $post->text }}
        </p>
        <div class="row mt-3">
            <div class="col-8">
                <div class="mb-1 text-muted">{{ $post->created_at }}</div>
            </div>
            
            <div class="col-4">
                <a href="#" class="btn btn-warning me-3">Редактировать</a>
                <a href="#" class="btn btn-danger">Удалить</a>
            </div>
        </div>
        
        
    </div>
</div>




@endsection

