@extends('layouts.app')

@section('title', 'Новый пост')

@section('content')

<form method="post" action="{{ route('post.store') }}"> 
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Заглавие</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
        <div id="titlelHelp" class="form-text">Введите тему поста</div>
    </div>

    <label for="category" class="form-label">Категория</label>
        <select  name="category" class="form-select" aria-label="category">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    <div id="categorylHelp" class="form-text">Выберете категорию поста</div>

   <div class="mb-3">
        <label for="text" class="form-label">Текс поста</label>
        <textarea name="text" class="form-control" id="text" aria-describedby="text"></textarea>
        <div id="textlHelp" class="form-text">Введите текс поста</div>
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection