@extends('admin.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-9 offset-3 " style="margin-top:100px">
             <div class="card">
            <div class="card-body">
              <h5 class="card-title">cv  Table</h5>
             
              <!-- Bordered Table -->
              <table class="table table-bordered datatable" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">first Name</th>
                    <th scope="col">address</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
         @forelse($data as $row)
              <tr>
                  <th scope="row">{{$row->id}}</th>
                  <td>{{ $row->first_name }}</td>
                  <td>{{ $row->address}}</td>
                  <td><img src="{{url('public/admin/image/hero',$row->image)}}" class="img-fluid" width="40px "alt="img not"></td>
                  <td>

                    <a href="{{url('admin/hero/detail',$row->id)}}"  class="btn btn-outline-warning btn-sm "><i class="ri-eye-fill"></i></a>
                    <a href="{{url('admin/hero/edit',$row->id)}}"  class="btn btn-outline-success btn-sm "><i class="bx bxs-edit"></i></a>
                    <a href="{{url('admin/hero/delete',$row->id)}}"  class="btn btn-outline-danger btn-sm "><i class="ri-close-circle-fill"></i></a>
                   
               
                  </td>
              </tr>
       @empty
            <tr>
                <td colspan="5" style="color:red; text-align:center;">Data not found</td>
            </tr>
         
      @endforelse
         

                
          </tbody>
        </table>
             <!-- Laravel Pagination -->
              <div class="d-flex justify-content-end" style="margin-top:-40px;">
                {{ $data->links('pagination::bootstrap-4') }}
              </div>
         
    </div>
</div>
              <!-- End Bordered Table -->
    </div>
  </div>
  @endsection
