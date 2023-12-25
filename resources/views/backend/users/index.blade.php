@extends('backend.layout.master')
@section('content')
<div class="container">
    <div class="row">
    <div class="card-body">
                            <div class="table-responsive " >
                            @if(Session::has('add'))
                            <div class="alert alert-success" role="alert">
  تم الاضافة بنجاح
</div>@endif
@if(Session::has('edit'))
                            <div class="alert alert-success" role="alert">
  تم التعديل بنجاح

</div>@endif

@if(Session::has('delete'))
                            <div class="alert alert-success" role="alert">
  تم الحذف بنجاح
</div>@endif
        <div class="col-4 float-end">
        <a href="" class="btn btn-primary mb-5  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
</svg></a>

</div>
</div></div>

          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Table</h6>
                  <p class="text-sm mb-20">
                    For basic styling—light padding and only horizontal
                    dividers—use the class table.
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="lead-info">
                            <h6>image</h6>
                          </th>
                          <th class="lead-info">
                            <h6>name</h6>
                          </th>
                          <th class="lead-email">
                            <h6>Email</h6>
                          </th>
                          <th class="lead-phone">
                            <h6>Phone No</h6>
                          </th>
                          <th class="lead-company">
                            <h6>Role</h6>
                          </th>
                          <th class="lead-company">
                            <h6>order status</h6>
                          </th>
                          <th class="lead-company">
                            <h6>status</h6>
                          </th>
                          <th class="lead-company">
                            <h6>city</h6>
                          </th>
                          <th class="lead-company">
                            <h6>bank</h6>
                          </th>
                          <th class="lead-company">
                            <h6>bank_account</h6>
                          </th>
                          <th class="lead-company">
                            <h6>location_latitude</h6>
                          </th>
                          <th class="lead-company">
                            <h6>location_longitude</h6>
                          </th>
                          <th>
                            <h6>Action</h6>
                          </th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        @foreach($user as $users)
                        <tr>
                        <td class="min-width">
                            <div class="lead">
                              <div class="lead-image">                           
                              <img src="{{asset('storage/'.$users->location_image)}}" alt="" width="100px"/>
</div></div>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">{{$users->name}}</a></p>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">{{$users->email}}</a></p>
                          </td>
                          <td class="min-width">
                            <p>{{$users->phone}}</p>
                          </td>
                          <td class="min-width">
                          <p>{{$users->role}}</p>

                             </td>
                             <!-- status  -->
                          <td class="min-width">
                          <form method="post" action="{{route('active',$users->id)}}">
         @csrf
                                                @method('post')
                                               
<input type="hidden" value="Acceptance" name="action">
<input type="hidden"  name="ids">
<button type="submit" value="Acceptance" class="btn btn-success btn-sm" >Acceptance </button>

</form>


<form method="post" action="{{route('active',$users->id)}}">
         @csrf
                                                @method('post')
<input type="hidden" value="pending" name="action">
<input type="hidden"  name="ids">
<button type="submit" value="pending" class="btn btn-warning btn-sm" >pending </button>
</form>
                          </td>

                          <td class="min-width">
                            @if($users->status =='Acceptance')
                            <p class="btn btn-success text-white ">{{$users->status}}</p>
                            

                            @else
                            <p class="btn btn-warning text-white ">{{$users->status}}</p>

                            @endif
                          </td>
                          <td class="min-width">
                            <p>{{$users->city}}</p>
                          </td>

                          <td class="min-width">
                            <p>{{$users->bank}}</p>
                          </td>
                          <td class="min-width">
                            <p>{{$users->bank_account}}</p>
                          </td>
                          <td class="min-width">
                            <p>{{$users->location_latitude}}</p>
                          </td>
                          <td class="min-width">
                            <p>{{$users->location_longitude}}</p>
                          </td>
                          <td>
                            <div class="action">

                     
                          <a href="" class="btn btn-primary">  
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
</svg></a>

                   
                     
                        {!! Form::open(['method' => 'DELETE','style'=>'display:inline']) !!}
                       {!! Form::submit('Delete ', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                                        
                  
                      
                            </div>
                          </td>
                        </tr>
                        @endforeach
                        <!-- end table row -->
                         <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          {{$user->onEachSide(1)->links()}}

          
          <!-- ========== tables-wrapper end ========== -->
       
      <!-- ========== table components end ========== -->
@endsection