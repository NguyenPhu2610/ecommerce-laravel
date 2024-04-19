@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <p>{{ trans('auth.failed')}}</p>
                <p>{{ __('Home')}}</p>
                <p>{{ __('About')}}</p>
                <p>{{ __('Cart')}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection