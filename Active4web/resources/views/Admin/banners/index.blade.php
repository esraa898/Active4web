@extends('Admin.layouts.master')

@section('title','banners')
@section('css')
<link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
@endsection

@section('content')

   <!-- Base styles-->
   <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Banners</h5><

                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="example-style-1">
                        <thead>
                       
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
            
                        
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $key=> $banner)
                          <tr>
                            <td>{{$key +1}}</td>
                           <td>{{$banner->title}}</td>
                            <td> <img style= "width:100px;" src="{{asset('images/banner/'.$banner->image)}}"></td>
                            <td>             <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo" data-whatever="@mdo">edit</button></td>
                      
                    <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">{{$banner->name}}</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('Admin.banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                                @csrf 
                                @method  ('PUT')
                                <div class="mb-3"> 
                                <input type="hidden" id="id" value="{{$banner->id}}"/>
                                <label class="col-form-label" for="recipient-name">title</label>
                                <input class="form-control" id="recipient-name" type="text" name="title" value="{{$banner->title}}">
                              </div>
                              <div class="mb-3">
                               
                                <label class="col-form-label" for="recipient-name">image </label>
                                <input class="form-control" id="recipient-name" name="image" type="file" value="{{$banner->link}}">
                              </div>
                            
                           
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">edit</button>
                          </div>
                         </form>
                        </div>
                      </div>
                    </div>
                        <  
                          </tr>
                         @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                           <th>ID</th>
                            <th>title</th>
                            <th>Link</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Base styles Ends-->
@endsection

@section('js')
<script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>  <script src="../assets/js/tooltip-init.js"></script>
@endsection
