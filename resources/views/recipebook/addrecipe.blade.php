@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add Recipe') }}</div>

        <div class="card-body">
          <form action="" method="">
            @csrf
            <div class="mb-3">
              <label for="recipeName" class="form-label">Recipe Name:</label>
              <input type="text" class="form-control" id="recipeName">
            </div>
  
            <div class="mb-3">
              <label for="ingredients" class="form-label">Ingredients:</label>
              <input type="text" class="form-control" id="ingredients">
            </div>
  
            <div class="mb-3">
              <label for="preparationSteps" class="form-label">Preparation Steps:</label>
              <input type="text" class="form-control" id="preparationSteps">
            </div>
  
            <div class="mb-3">
              <label for="cookingTime" class="form-label">Cooking Time:</label>
              <input type="text" class="form-control" id="cookingTime">
            </div>
  
            <div class="mb-3">
              <label for="difficultyLevel" class="form-label">Difficulty Level:</label>
              <input type="text" class="form-control" id="difficultyLevel">
            </div>
  
            <div class="mb-3">
              <label for="servings" class="form-label">Servings:</label>
              <input type="text" class="form-control" id="servings">
            </div>
  
            <div class="mb-3">
              <input type="submit" class="btn btn-success" value="Submit">
              <input type="reset" class="btn btn-danger" value="Cancel">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection