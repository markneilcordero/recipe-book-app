@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">
          {{ __('Welcome to Recipe Book!') }}<br>
          {{ __('Explore delicious recipes and start cooking!') }}
        </div>

        <div class="card-body">
          <p>Featured Recipes</p>
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