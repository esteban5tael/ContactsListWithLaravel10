@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    {{ __('Edit') }} {{ __('Contacts') }}
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
                            <form action="{{ route('contacts.update', $contact) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                {{--  --}}


                                <input type="hidden" name="user_id" id="user_id" value="{{ $contact->user->id }}">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">{{ __('Category') }}</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        @foreach ($categories as $id => $name)
                                            <option value="{{ $id }}"
                                                {{ $id == $contact->category_id ? 'selected' : '' }}>
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $contact->name) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="lastname" class="form-label">{{ __('Last Name') }}</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        value="{{ old('lastname', $contact->lastname) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone', $contact->phone) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Address') }}</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ old('address', $contact->address) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email', $contact->email) }}" required>
                                </div>

                                <button type="submit" class="btn btn-warning btn-sm">{{ __('Update') }}</button> &nbsp;
                                <a class="btn btn-primary btn-sm" href="{{ route('contacts.index') }}">{{ __('Back') }}</a>

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
