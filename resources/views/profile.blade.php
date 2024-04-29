@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('User Profile') }}</div>

        <div class="card-body">
          <p>Username:</p>
          <p>Email:</p>
          <p>Saved Recipes:</p>
          <ul>
            <li>Spaghetti Carbonara</li>
            <li>Chocolate Chip Cookies</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection