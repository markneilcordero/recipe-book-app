@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Search Recipe') }}</div>

        <div class="card-body">
          <form action="" method="">
            <div class="input-group mb-3">
              <span class="input-group-text" id="searchRecipe">Search:</span>
              <input type="text" class="form-control" placeholder="Chicken Alfredo" aria-label="" aria-describedby="searchRecipe">
            </div>
          </form>
          <ol class="list-group list-group-numbered">
            <li class="list-group-item">
              Chicken Alfredo
              <p>Description: Creamy pasta dish with chicken</p>
              <p>Cooking Time: 30 minutes</p>
              <p>Difficulty: Easy</p>
            </li>
            <li class="list-group-item">
              BBQ Chicken Pizza
              <p>Description: Delicious pizza topped with BBQ sauce and chicken</p>
              <p>Cooking Time: 25 minutes</p>
              <p>Difficulty: Medium</p>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection