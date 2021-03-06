@extends('layouts.app')

@section('content')

    <div class="card-header">
        <h1> Dashboard - [Users] {{$user->name}} </h1>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.user.update.password', $user->id) }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Password </span>
                </div>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="btn-group mt-1" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('admin.user.show', $user->id) }}"> Back </a>
                <button class="btn btn-success" type="submit"> Update </button>
            </div>
        </form>

    </div>

@endsection
