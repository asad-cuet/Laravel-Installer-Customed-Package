@extends('vendor.installer.layouts.master')

@section('title', trans('Finishing'))
@section('container')
    <p class="paragraph" style="text-align: center;">{{ session('message')['message'] }}</p>
    <div class="buttons">
        <a href="{{ url('/') }}" class="button">{{ trans('Finish') }}</a>
    </div>
@stop
