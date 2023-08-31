@extends('turbo-frame.base')

@section('page-title', 'Update')

@section('content')
    <div class="w-full max-w-3xl mx-auto px-4 my-5">
        <h1 class="text-3xl sm:text-4xl mb-6">Edit Task</h1>
        @if ($frame = turbo_frame())
            <turbo-frame id="{{ $frame }}">
                @include('turbo-frame.form.update')
            </turbo-frame>
        @else
            @include('turbo-frame.form.update')
        @endif
    </div>
@stop
