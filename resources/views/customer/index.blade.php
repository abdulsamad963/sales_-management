@extends('customer.layout')
@section('content')

<div class="jumbotron">

 
<style>


</style>
<a href="{{ url('/back') }}">العودة للصفحة الرئيسية</a>
 

  <p>لأضافة زبون جديد</p> 
  <a class="btn btn-primary btn-lg" href="{{ route('customers.create') }}" role="button"  >إضغط هنا </a>
</div>

<div class="container">

@if ($message =Session::get('success'))
    
@endif
<div class="alert alert-primary" role="alert">
{{$message}}
</div>
</div>



<button class="btn-success" style="font-family: Georgia, 'Times New Roman', Times, serif" onclick='printPage()'>print</button>

{{-- 
<input type="text" id="name" onkeyup="filterSrch(1,'name')" placeholder="بحث عن طريق الاسم">
 --}}




<div class="body">
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>












        <th scope="col">on</th>
       <th scope="col"> الأسم</th>
         <th scope="col">الرقم</th>
        <th scope="col">العنوان</th>
        <th scope="col">الملاحظات</th>
        <th scope="col">  إظهار المشتريات</th>
        <th scope="col">تعديل</th>
        <th scope="col">حذف</th>


      </tr>
    </thead>
    <tbody>  @php 
       $i=1; 
   
    @endphp
      @foreach ($customers as $item)
          
  
      <tr>
            
        <td>{{$i++}}</td> 
      <td>{{$item->name}}</td> 
         <td>{{$item->num}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->comments}}</td>
 
 
       
        <td>
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <a  class="btn btn-primary" href="{{ route('customers.show' ,$item->id )}}">show</a>
              </div>
            </td>
              <div class="col-sm">
                <td>
                <a  class="btn btn-success" href="{{ route('customers.edit',$item->id )}}">Edit</a>
              </div>
              <div class="col-sm">
            </td>

                <form action="{{ route('customers.destroy',$item->id ) }}" method="POST">
                    <td>
                  @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
                  </form>

              </div>
            </div>
          </div>
      

        </td>
      </tr>
   @endforeach
    </tbody>
  </table>
</div>
  {{$customers->links() }}



    <script>
    function printPage()
    {
        // body=document.getElementById('body').innerHTML;
       
        // document.getElementById('body').innerHTML=body;
         window.print();
    }
</script>
  
</div>
@endsection