@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Recipe Detail') }}</div>

        <div class="card-body">
          <p>Recipe:</p>
          <p>Ingredients:</p>
          <ul>
            <li>200g spaghetti</li>
            <li>100g pancetta</li>
            <li>2 eggs</li>
          </ul>
          <p>Preparation Steps:</p>
          <ol>
            <li>Cook spaghetti according to package instr</li>
          </ol>
          <p>Cooking Time: 30 minutes</p>
          <p>Difficulty Level: Easy</p>
          <p>Servings:2</p>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection