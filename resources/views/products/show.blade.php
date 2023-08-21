
@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
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
                   
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                               <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $Wisdom->title }}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                            <input type="text" name="content" class="form-control" placeholder="Content" value="{{ $Wisdom->content }}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Author_name</label>
                            <div class="col-sm-9">
                              <input type="text" name="author_name" class="form-control" placeholder="Author Name" value="{{ $Wisdom->author_name }}" readonly>
                            </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                          <div class="form-group row">
                              <label class="form-label">Created At</label>
                            <div class="col-sm-9">
                              <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $Wisdom->created_at }}" readonly>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                             <label class="form-label">Updated At</label>
                            <div class="col-sm-9">
                               <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $Wisdom->updated_at }}" readonly>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
























                    
{{--     <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $Wisdom->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $Wisdom->updated_at }}" readonly>
        </div>
    </div> --}}
@endsection