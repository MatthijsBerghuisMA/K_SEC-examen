@extends('layouts.master')
@section('content')
    <?php
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

    <div class="container">
        <div class="header card-header">{{ __('Crud') }}</div>

        <form action="{{route('update')}}" method="post" class="c-register">
            @csrf
            @method('PUT')
            <input type="hidden" name="cid" value="{{ $Info->id }}">
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" class="c-input" name="name" placeholder="Enter name" value="{{ $Info->name }}">
                <span class="invalid-feedback ">@error('name'){{ $message }} @enderror</span>
            </div>
            <div>
                <label for="text">Text</label>
                <input id="text" type="text" class="c-input" name="text" value="{{  $Info->text }}">
                <span class="invalid-feedback ">@error('text'){{ $message }} @enderror</span>
            </div>
            <div>
                <label for="description">Description</label>
                <input id="description" type="text" class="c-input" name="description" value="{{  $Info->description }}">
                <span class="invalid-feedback ">@error('text'){{ $message }} @enderror</span>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
