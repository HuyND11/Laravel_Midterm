@extends('layouts.mainLayout')

@section('title', 'create')

@section('content')
    <form action="/food" method="post">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="discountPrice" class="form-label">Discount Price</label>
            <input type="text" class="form-control" id="ram" name="discountPrice">
            @error('discountPrice')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Category</label>
            <select class="form-select" name="category_id" >
                @foreach ($categoryList as $category )
                    <option value={{$category->id}}>{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ram" class="form-label"> Description</label>
            <input type="text" class="form-control" id="ram" name="description">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Iamge</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection
