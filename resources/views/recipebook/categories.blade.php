@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Categories') }}</div>

        <div class="card-body">
          <ol>
            <li>Breakfast</li>
            <li>Lunch</li>
            <li>Dinner</li>
            <li>Dessert</li>
          </ol>
        </div>
      
      </div>
    </div>
  </div>
</div>
@endsection