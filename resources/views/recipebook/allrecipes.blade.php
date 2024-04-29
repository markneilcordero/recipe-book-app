@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('All Recipes') }}</div>

        <div class="card-body">
          <ol>
            <li>Spaghetti Carbonara</li>
            <li>Chicken Tikka Masala</li>
            <li>Chocolate Chip Cookies</li>
          </ol>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection