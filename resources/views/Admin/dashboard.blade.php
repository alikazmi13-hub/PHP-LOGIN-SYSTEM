@extends('layouts.admin-app')

@section('content')
<div class="container">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Project</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hey! Admin You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
