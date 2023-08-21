@extends('layouts.app')
  
@section('title', 'Create Admin')
  
@section('contents')
    {{-- <h1 class="mb-0">Add Data</h1>
    <hr />
    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
            <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Name">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
            <div class="col">
               <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                    @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
           
        </div>
 
        <div class="row mb-3">
            <div class="col">
                <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

            </div>
           
        </div>
         <div class="row mb-3">
            <div class="col">
                  <input name="mobile_no" type="text" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Mobile no">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

            </div>
           
        </div>

         <div class="row mb-3">
            <div class="col">

               <input name="address" type="text" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Address">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
           
        </div>
         <div class="row mb-3">
            <div class="col">
               <label for="status">Status:</label>
             <select id="status" name="status">
                     <option value="active" class="badge badge-success">Active</option>
                     <option value="inactive" selected class="badge badge-warning">Inactive</option>
                  <option value="delete" class="badge badge-danger">Delete</option>
                </select>
             </div>
           
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form> --}}
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
                    <h4 class="card-title">Admin</h4>
                      <form class="forms-sample" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputUsername1">Admin name</label>
                            <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Name" required>
                          @error('name')
                           <span class="invalid-feedback">{{ $message }}</span>
                           @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                       <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address" required>
                         @error('email')
                          <span class="invalid-feedback">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password" required>
                        @error('password')
                           <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password" required>
                      @error('password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                       @enderror
                      </div>
                        <div class="form-group">
                        <label for="exampleInputMobileNo">Mobile_no</label>
                         <input name="mobile_no" type="text" class="form-control form-control-user @error('mpassword_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Mobile no" required>
                        @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                       @enderror
                      </div>
                        <div class="form-group">
                        <label for="exampleInputAddress">Address</label>
                       <input name="address" type="text" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Address" required>
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="status" required>
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
                         
