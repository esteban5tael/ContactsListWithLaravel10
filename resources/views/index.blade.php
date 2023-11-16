@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    {{ __('Index') }} | Contacts
@endsection

@section('content')
    <div class="row  m-2">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <h3>This Is A Simple Contacts List With Laravel 10.</h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img src="{{ asset('assets/img/contactlist.png') }}" alt="Address Icon" width="500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    {{-- <script></script> --}}
@endsection
