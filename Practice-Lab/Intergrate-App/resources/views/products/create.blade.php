@extends('layouts.app')

@section('content')
      
            <div class="col-lg-8 col-md-10 mx-auto">
             <h2>New Product</h2>

             <form action="{{route('products.store')}}" method = "POST">
              @csrf
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Category</label>
                    <select  class="form-control" name="category_id" required  >
                   <option>Please select one</option>
                   @foreach($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                 </select>
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required value="{{old('name')}}" >
                    
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Unit Price</label>
                    <input type="text" class="form-control" placeholder="Unit Price" name= "unit_price"  required  value="{{old('email')}}">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Quantity In Stock</label>
                    <input type="number" class="form-control" placeholder="Quantity in stock" name="qty_in_stock" required >
                   
                  </div>
                </div>
               
                <br>
                <button type="submit" class="btn btn-primary" >Purchase Now</button>
              </form>
          </div>
       
     <hr>
@endsection