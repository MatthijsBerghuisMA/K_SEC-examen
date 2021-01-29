@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="header card-header">{{ __('Crud') }}</div>

        <form action="add" enctype="multipart/form-data" method="post" class="c-register">
            @csrf
            <div>
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" class="c-input" name="name" value="{{ old('name') }}">
                <span class="invalid-feedback ">@error('name'){{ $message }} @enderror</span>
            </div>
            <div>
                <label for="text">{{ __('Text') }}</label>
                <input id="name" type="text" class="c-input" name="text" value="{{ old('text') }}">
                <span class="invalid-feedback ">@error('text'){{ $message }} @enderror</span>
            </div>
            <div>
                <label for="description">{{ __('Description') }}</label>
                <input id="description" type="text" class="c-input" name="description" value="{{ old('description') }}">
                <span class="invalid-feedback ">@error('text'){{ $message }} @enderror</span>
            </div>
            <div>
                <label for="file">{{ __('File') }}</label>
                <input id="file" type="file" class="c-input" name="file" value="{{ old('file') }}">
                <span class="invalid-feedback ">@error('file'){{ $message }} @enderror</span>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
@endsection
