@extends('admin.layouts.app')
@section('title','Language | Akino foundation')
@section('style')
<style>
    td{
max-width: 300px;
overflow: hidden;
}
.sidebar>.nav {
height: 80vh!important;
overflow: scroll!important;
}
.sidebar .nav::-webkit-scrollbar {
width: 12px;
}

.sidebar .nav::-webkit-scrollbar-track {
background: transparent; 
}

.sidebar .nav::-webkit-scrollbar-thumb {
background: transparent;
}
</style>
@stop
@section('content')


<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('admin.navigation.navigation')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('admin.navigation.sidebar')
        <!-- partial -->


        <!-- partial -->
        <div class="main-panel" style="margin-left:auto;">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-2 grid-margin stretch-card"></div>
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create new</h4>
                                @if ( Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if ( Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{url('/admin/categories/update')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="subcategory_id" value="{{isset($category->id)?$category->id:''}}">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Puja Name</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputUsername1"
                                                placeholder="Puja Name" value="{{isset($category->name)?$category->name:''}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Banner</label>
                                            <input type="file" class="form-control" name="banner" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Icon</label>
                                            <input type="file" class="form-control" name="icon" >
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    @section('script')

    @stop
    @stop