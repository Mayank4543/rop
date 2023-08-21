@extends('layouts.app')
  
@section('title', 'Admin')
  
@section('contents')
    {{-- <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Admin list </h1>
        <a href="{{ route('admin.create')}}" class="btn btn-primary">Add Admin</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover table-sm  " style="width: 5px">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Name </th>
                <th>email</th>
                <th >Password</th>
                <th>Mobile No</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>  
            </tr>
        </thead>
        <tbody>
           
            @if($Admin->count() > 0)
                @foreach($Admin as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="vertical-align: bottom">{{ $rs->password }}</td>
                        <td class="align-middle">{{ $rs->mobile_no }}</td>
                        <td class="align-middle">{{ $rs->address }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                {{-- <a href="{{ route('admin.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a> --}}
                                {{-- <a  href="{{ route('admin.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.destroy',$rs->id)}}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data not found</td>
                </tr>
            @endif
        </tbody>
    </table> --}} 
       <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
                
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                  <p></p>
                </div>
                <a href="{{ route('admin.create') }}" type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text ">
                  <i class="mdi mdi-plus-circle"></i> Add Admin  </a>
              </div>
              <hr />
            @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
       @endif
              <h3 class="page-title">Admin Tables</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Spritual</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Wisdom</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" style="width: 100vh">
                  <div class="card-body">
                    <h4 class="card-title">Admin Table</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-bordered table-sm">
                        <thead>
                          <tr>
                             <th>Id</th>
                <th>Name </th>
                <th>email</th>
                <th >Password</th>
                <th>Mobile No</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>  
                          </tr>
                        </thead>
                        <tbody>
                               @if($Admin->count() > 0)
                           @foreach($Admin as $rs)
                          <tr>
                            <td >{{ $loop->iteration }}</td>
                        <td >{{ $rs->name }}</td>
                        <td >{{ $rs->email }}</td>
                        <td >{{ $rs->password }}</td>
                        <td >{{ $rs->mobile_no }}</td>
                        <td >{{ $rs->address }}</td>
                        <td >{{ $rs->status }}</td>                       

                       <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                {{-- <a href="{{ route('admin.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a> --}}
                                <a href="{{ route('admin.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                     @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data not found</td>
                </tr>
            @endif
             </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
</div>
@endsection