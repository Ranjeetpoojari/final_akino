@extends('admin.layouts.app')
@section('title','Show Images | Akino foundation')
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
                    
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Images of {{$album->name}}
                                    <a href="{{url('/admin/gallery/create/'.encrypt($album->id))}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="row">
                                @foreach ($images as $item)
                                <div class=" col-lg-3 mt-4">
                                    <img src="{{url($item->image)}}" alt="" class="img img-fluid" style="height: 150px"><br><br>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteImages({{$item->id}})">Delete</button>
                                </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->





            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    @section('script')
    <script>
        function deleteImages(id){
            $.get("/admin/gallary/delete/"+id, {}, function(res){
                if(res.status == "success"){
                    alert("Image Deleted successfull")
                    location.reload();
                }
            });
        }
    </script>
    @stop
    @stop