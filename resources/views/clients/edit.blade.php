@extends('layouts.app')

@section('title', 'Create Client')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('clients.update', $client) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <fieldset>
                            <legend>Edit Client</legend>
                            @include('clients.fields')
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
