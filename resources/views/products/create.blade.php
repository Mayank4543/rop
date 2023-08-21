@extends('layouts.app')

  
@section('title', 'Create Wisdom')

  
@section('contents')

    {{-- <h1 class="mb-0">Add Data</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="content" class="form-control" placeholder="Content">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="author_name" class="form-control" placeholder="Author Name">
            </div>
           
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div> --}}
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"></h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Spritual</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Wisdom </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Wisdom </h4>
                    <form class="form-sample"  action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                               <input type="text" name="title" class="form-control" placeholder="Title" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                            <input type="text" name="content" class="form-control" placeholder="Content" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Author_name</label>
                            <div class="col-sm-9">
                              <input type="text" name="author_name" class="form-control" placeholder="Author Name" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                      
                    </form>
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
        
        </div>
  
@endsection