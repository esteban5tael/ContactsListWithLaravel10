@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    {{ __('Contacts') }}
@endsection

@section('content')
    <div class="row  m-2">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>{{ __('Contacts') }}</h3>
                            <a href="{{ route('contacts.create') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i>&nbsp; {{ __('Create') }} {{ __('Contacts') }}</a>
                            <hr>
                        </div>
                    </div>
                    {{-- Session Messages --}}
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- Session Messages --}}


                    <div class="row ">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered dataTable no-footer table-hover" id="table">
                                <thead>
                                    <th>{{ __('Actions') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Last Name') }}</th>
                                    <th>{{ __('Phone') }}</th>
                                    <th>{{ __('Address') }}</th>
                                    <th>{{ __('Email') }}</th>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>
                                                <a href="{{ route('contacts.edit', $contact) }}"
                                                    class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm m-1"
                                                        onclick="return confirm('¿Are You Sure You Want To Delete This Record?')">{{ __('Delete') }}</button>
                                                </form>

                                            </td>
                                            <td>{{ $contact->category->name }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->lastname }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->address }}</td>
                                            <td>{{ $contact->email }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card text-center m-2">
                        <p style="text-transform: capitalize">You have a total of {{ $contacts->count() }} contacts.</p>
                    </div>
                    <div class="m-2">
                        <p style="text-transform: capitalize"> {{ $contacts->links() }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
