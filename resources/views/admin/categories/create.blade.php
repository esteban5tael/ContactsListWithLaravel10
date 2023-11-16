@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    {{ __('Create') }} {{ __('Cateogries') }}
@endsection

@section('content')
    <div class="row  m-2">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
{{-- Error Messages --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- Error Messages --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('categories.store') }}" method="POST">
                                @csrf
                                {{--  --}}


                                <div class="mb-3">
                                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">{{__('Description')}}</label>
                                    <textarea class="form-control" name="description" id="description" cols="15" rows="10" required>{{old('description')}}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">{{__('Create')}}</button> &nbsp;
                                <a class="btn btn-primary" href="{{route('categories.index')}}">{{__('Back')}}</a>

                                {{--  --}}
                            </form>
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
