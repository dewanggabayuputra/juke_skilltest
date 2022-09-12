@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center" >
                        <a class="nav-link" href="{{ route('edit-biodata') }}">{{ __('Edit Biodata') }}</a>
                        <!-- <button class="btn btn-primary">Edit Biodata</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
