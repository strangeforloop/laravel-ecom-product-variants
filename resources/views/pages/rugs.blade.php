@extends('layouts.app')


@section('content')
    <h1>Rugs</h1>
    <form method="post" action="{{ route('products.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="color">Color: </label>
            <select name="color">
                <option value="default">default</option>
                <option value="ivory">ivory</option>
                <option value="ruby">ruby</option>
            </select>
        </div>
        <div class="form-group">
            <label for="length">Length: </label>
            <select name="length">
                <option value="default">default</option>
                <option value="short">short</option>
                <option value="long">long</option>
              </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>  
@endsection 