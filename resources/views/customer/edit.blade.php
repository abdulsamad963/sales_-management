@extends('customer.layout')
@section('content')
<div class="container" style="padding-top: 12%">

    <div class="card">


  
     <div class=" card-body">
                <p class="card-text">product name: {{$customer->name}}</p>
                <a href="{{route('customers.index')}}">Back</a>
    </div>
  </div>

</div>
</div>
   


<div class="container" style="padding-top: 2%" >
<form action="{{ route('customers.update',$customer->id)}}"method="POST" >
    @csrf 
    @method('PUT')
    <div class="form-group">
      <label for="exampleFormControlInput1">اسم الزبون</label>
      <input type="text" name="name" class="form-control"  value="{{$customer->name}}">
    </div>


    <div class="form-group">
        <label for="exampleFormControlInput1">رقم الزبون</label>
        <input type="text" name="num" class="form-control"  value="{{$customer->num}}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">العنوان</label>
        <input type="text" name="address" class="form-control"  value="{{$customer->address}}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">الملاحظات</label>
        <input type="text" name="comments" class="form-control"  value="{{$customer->comments}}">
      </div>




      </textarea>
    </div>



<div class="form-group">

   <button type="submit" class="btn btn-primary">save</button> 


</div>
 
  </form>
    
</div>

@endsection
