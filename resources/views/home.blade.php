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
                    <div class="content">
                    <div class="title m-b-md">
                    @if(auth::check())
                        Welcome {{auth::user()->name}}
                    @else
                        Welcome
                    @endif
                </div>

               
            </div>

                     <div class="links">
                    <a href="/profile">Profile</a>
                    <a href="/article">Article</a>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
