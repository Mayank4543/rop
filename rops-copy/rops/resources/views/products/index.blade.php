@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
    {{-- <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Wisdom</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Task</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author_name</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            {{-- {{dd($product)}} --}}
            {{-- @if($Wisdom->count() > 0)
                @foreach($Wisdom as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->content }}</td>
                        <td class="align-middle">{{ $rs->author_name }}</td>
                        {{-- <td class="align-middle">{{ $rs->description }}</td>   --}}
                        {{-- <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a> --}}
                                {{-- <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')"> --}}
                                    {{-- @csrf
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
        </tbody>  --}}
    {{-- </table>  --}}
    {{-- ************************************************************New table --}}
    <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
                
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                 
                </div>
                <a href="{{ route('products.create') }}" type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-plus-circle"></i> Add Task  </a>
              </div>
              <hr />
            @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
       @endif
              <h3 class="page-title">Wisdom Tables</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Spritual</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Wisdom</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Wisdom Table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                             <th>Id</th>
                           <th>Title</th>
                          <th>Content</th>
                           <th>Author_name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                               @if($Wisdom->count() > 0)
                           @foreach($Wisdom as $rs)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rs->title }}</td>  
                            <td> {{ $rs->content }}  </td>                        
                            <td> {{ $rs->author_name }}  </td>                        

                       <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
