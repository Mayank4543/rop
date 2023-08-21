
@extends('layouts.app')
  
@section('title', 'Edit ')
  
@section('contents')
{{--     <h1 class="mb-0">Edit </h1>
    <hr />
    <form action="{{ route('admin.update', $Admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
            <input name="name" type="text" class="form-control form-control-user " id="exampleInputName" placeholder="Name" value="{{ $Admin->name }}">
                 
            </div>
            <div class="col">
               <input name="email" type="email" class="form-control form-control-user " id="exampleInputEmail" placeholder="Email Address" value="{{ $Admin->email}}">
                  
            </div>

        </div>
        <div class="row mb-3">
            <div class="col">
                <input name="password" type="password" class="form-control form-control-user " id="exampleInputPassword" placeholder="Password" value="{{ $Admin->password }}">
                   
            </div>
           
        </div>
        <div class="row mb-3">
            <div class="col">
                <input name="password_confirmation" type="password" class="form-control form-control-user " id="exampleRepeatPassword" placeholder="Repeat Password" value="{{ $Admin->password_confirmation }}">
            </div>
        </div>
         <div class="row mb-3">
            <div class="col">
                  <input name="mobile_no" type="text" class="form-control form-control-user " id="exampleRepeatPassword" placeholder="Mobile no" value="{{ $Admin->mobile_no }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">

               <input name="address" type="text" class="form-control form-control-user " id="exampleRepeatPassword" placeholder="Address" value="{{ $Admin->address }}">     
            </div>
           
        </div>
        <div class="row mb-3">
            <div class="col">
               <label for="status">Status:</label>
             <select id="status" name="status" value="{{ $Admin->status}}">
                     <option value="active">Active</option>
                     <option value="inactive" selected>Inactive</option>
                  <option value="delete">Delete</option>
                </select> --}}
             {{-- </div>
           
        </div>
         <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
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
                    <h4 class="card-title">Edit Data</h4>
                    <form class="form-sample"  action="{{ route('admin.update', $Admin->id) }}" method="POST">
                              @csrf
                           @method('PUT')
                     <div class="form-group">
                          <label for="exampleInputUsername1">Admin name</label>
                            <input name="name" type="text" class="form-control form-control-user " id="exampleInputName" placeholder="Name" value="{{ $Admin->name }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control form-control-user " id="exampleInputEmail" placeholder="Email Address" value="{{ $Admin->email}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                          <input name="password" type="password" class="form-control form-control-user " id="exampleInputPassword" placeholder="Password" value="{{ $Admin->password }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                         <input name="password_confirmation" type="password" class="form-control form-control-user " id="exampleRepeatPassword" placeholder="Repeat Password" value="{{ $Admin->password_confirmation }}">
                        <div class="form-group">
                        <label for="exampleInputMobileNo">Mobile_no</label>
                         <input name="mobile_no" type="text" class="form-control form-control-user " id="exampleRepeatPassword" placeholder="Mobile no" value="{{ $Admin->mobile_no }}">
                      </div>
                        <div class="form-group">
                        <label for="exampleInputAddress">Address</label>
                                <input name="address" type="text" class="form-control form-control-user " id="exampleRepeatPassword" placeholder="Address" value="{{ $Admin->address }}">     
            
                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="status" value="{{ $Admin->status}}" >
                                <option value="active" >Active</option>
                               <option  value="inactive" selected >Inactive</option>
                               <option value="delete" >Delete</option>
                              </select>
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