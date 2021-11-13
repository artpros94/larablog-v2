@extends('layouts.app')

@section('title', 'Новый пост')

@section('content')

<form>
    
    <div class="mb-3">
        <label for="title" class="form-label">Заглавие</label>
        <input type="email" name="title" class="form-control" id="title" aria-describedby="title">
        <div id="titlelHelp" class="form-text">Введите тему поста</div>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Категория</label>
        <input type="email" name="category" class="form-control" id="category" aria-describedby="category">
        <div id="categorylHelp" class="form-text">Введите категорию поста</div>
    </div>

   <div class="mb-3">
        <label for="text" class="form-label">Текс поста</label>
        <textarea type="email" name="text" class="form-control" id="text" aria-describedby="text"></textarea>
        <div id="textlHelp" class="form-text">Введите текс поста</div>
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection