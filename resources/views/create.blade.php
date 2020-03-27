@extends('templates.template')

@section('content')

<h1 class="text-center">@if(isset($book))Editar @else Cadastrar @endif</h1>    <hr>
    <div class="text-center mt-3 mb-4 " >
        <a href=" {{ url("books/") }} ">
            <button class="btn btn-success">Voltar</button>
        </a>
    </div>

    <div class="col-8 m-auto">


            @if(isset($errors) && count($errors)>0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach ($errors->all() as $erro)
                        {{$erro}}<br>
                    @endforeach
                </div>
            @endif

        @if(isset($book))Editar
            <form name="formEdit" id="formCad" method="post"  action=" {{ url("books/$book->id") }} " >
            @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post"  action=" {{ url('books') }} " >
        @endif

            @csrf

            <div class="form-group">
            <input class="form-control" type="text" name="title" id="title" value=" {{ $book->title ?? '' }} " placeholder="Tittle" required >
            </div>
            <div class="form-group">
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                @foreach ($users as $user)
                    <option value=" {{ $user->id }} "> {{$user->name}} </option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="pages" id="pages" value=" {{ $book->pages ?? '' }} " placeholder="Páginas" required>
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="price" id="price" value=" {{ $book->price  ?? '' }} " placeholder="Preço" required>
            </div>
            <div class="form-group">
            <input class="btn  btn-primary" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif" >
            </div>
        </form>
    </div>
@endsection
