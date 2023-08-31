@extends('turbo-frame.base')

@section('page-title', 'Create')

@section('content')
    <div class="w-full max-w-3xl mx-auto px-4">
        <h1 class="text-3xl sm:text-4xl mb-6">Create Task</h1>
        @if ($frame = turbo_frame())
            <turbo-frame id="{{ $frame }}">
                @include('turbo-frame.form.create')
            </turbo-frame>
        @else
            @include('turbo-frame.form.create')
        @endif
    </div>
@stop
