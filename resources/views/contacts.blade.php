@extends('loyats.app')

@section('title-block')
Contacts
@endsection

@section('content')
<h1>Constacts</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>

        @endforeach
    </ul>

</div>
@endif

<form action="{{route('contacts-form')}}" method="post">

@csrf
    <div class="form-group">
        <label for="name">Введіть ім'я</label>
        <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">

    </div>

    <div class="form-group">
        <label for="email">Введіть email</label>
        <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control">

    </div>

    <button type="submit" class="btn btn-succes">Відправити</button>

   

</form>
@endsection