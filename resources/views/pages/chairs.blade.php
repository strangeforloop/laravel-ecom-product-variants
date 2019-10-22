{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'ECOMAPP')}}</title>
    </head>
    <body>
        <h1>Chairs</h1>
        <p>This is the chairs page</p>
    </body>
</html> --}}

@extends('layouts.app')

@section('content')
    <h1>Chairs</h1>
    <form method="post" action="{{ route('products.store') }}">
        <div class="form-group">
            <label for="legType">Leg Type: </label>
            <select name="legTypes">
                <option value="default">default</option>
                <option value="round-dowel">round-dowel</option>
                <option value="tapered">tapered</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fabricType">Fabric Type: </label>
            <select name="fabricType">
                <option value="default">default</option>
                <option value="heavy-cloth">heavy-cloth</option>
                <option value="leather">leather</option>
              </select>
        </div>
        <div class="form-group">
            <label for="color">Color: </label>
            <select name="color">
                <option value="default">default</option>
                <option value="ivory">ivory</option>
                <option value="ruby">ruby</option>
              </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
 </form>  
@endsection

