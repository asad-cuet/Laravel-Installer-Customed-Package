@extends('vendor.installer.layouts.master')

@section('title', trans('Tork Inc Installer'))
@section('container')
    <p class="paragraph" style="text-align: center;">{{ trans('Initaite the Software Installation') }}</p>
    <div class="buttons">
        <a href="{{ route('LaravelInstaller::environment') }}" class="button">{{ trans('Initiate') }}</a>
    </div>
@stop
