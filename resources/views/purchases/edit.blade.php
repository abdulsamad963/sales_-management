@extends('customer.layout')
@section('content')

<div class="container" style="padding-top: 12%">

    <div class="card">

      <h4>

        قم بتحديث الصفحة في حال لم تجد تعديل على البيانات
        </h4>
  
     <div class=" card-body">
                <p class="card-text">أسم القطعة التي تريد التعديل عليها:-->> {{$purchases->name}}</p>
                {{-- <a href="{{route('purchases.index')}}">Back</a> --}}
    </div>
  </div>

</div>
</div>
   


<div class="container" style="padding-top: 2%" >
<form action="{{ route('purchasess.update',$purchases->id)}}"method="POST" >
    @csrf 
    @method('PUT')
    <div class="form-group">
      <label for="exampleFormControlInput1">أسم القطعة</label>
      <input type="text" name="name" class="form-control"  value="{{$purchases->name}}">
    </div>


   <div class="form-group">
        <label for="exampleFormControlInput1">النوع</label>
        <input type="text" name="type" class="form-control"  value="{{$purchases->type}}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">السعر</label>
        <input type="number" name="price" class="form-control"  value="{{$purchases->price}}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">الملاحظات</label>
        <input type="text" name="Notes" class="form-control"  value="{{$purchases->Notes}}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">المبلغ المدفوع</label>
        <input type="number" name="amount" class="form-control"  value="{{$purchases->amount}}">
      </div> 





      </textarea>
    </div>



<div class="form-group">

   <button type="submit" class="btn btn-primary">save</button> 


</div>
 
  </form>
    
</div>

@endsection
