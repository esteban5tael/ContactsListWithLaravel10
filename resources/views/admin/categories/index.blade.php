@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    {{ __('Cateogries') }}
@endsection

@section('content')
    <div class="row  m-2">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>{{ __('Categories') }}</h3>
                            <a href="{{ route('categories.create') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i>&nbsp; {{ __('Create') }} {{ __('Categories') }}</a>
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


                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered dataTable no-footer table-hover" id="table">
                                <thead>
                                    <th>{{ __('Actions') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Description') }}</th>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <a href="{{ route('categories.edit', $category) }}"
                                                    class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm m-1"
                                                        onclick="return confirm('¿Are You Sure You Want To Delete This Record?')">{{ __('Delete') }}</button>
                                                </form>

                                            </td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
