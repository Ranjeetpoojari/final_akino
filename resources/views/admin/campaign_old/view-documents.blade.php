@extends('admin.layouts.app')
@section('title','Language | Akino foundation')
@section('style')

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
                                <h4 class="card-title">Documents 
                                    <a href="{{url('/admin/campaign/document/create/'.encrypt($campaign_id))}}"><button class="btn btn-info btn-sm">Upload New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <div class="row">
                                        @foreach ($documents as $item)
                                            <div class="col-md-3">
                                                <img src="{{url($item->attachment)}}" alt="" style="width:200px;height:280px">
                                                <button class="btn btn-danger btn-sm mt-3" onclick="deleteDocumentAttachment({{$item->id}})">Delete</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    @section('script')

    <script>
        function deleteDocumentAttachment(id){
            var txt;
            if (confirm("Are you sure to delete this attachment file")) {
                $.get("/admin/campaign/document/delete/"+id, {}, function(res){
                    if(res == "success"){
                        location.reload();
                    }else{
                        alert("Something went wrong")
                    }
                })
            } 
        }
    </script>
    @stop
    @stop