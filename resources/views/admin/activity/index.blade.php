@extends('admin.layouts.app')
@section('title','Language | Akino foundation')
@section('style')
<style>
    td{
        max-width: 300px;
        overflow: hidden;
    }
 
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
                                <h4 class="card-title">All  Activities
                                    <a href="{{url('/admin/activity/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> Id </th>
                                                <th>Title </th>
                                                <th>Location</th>
                                                <th>Main image</th>
                                                <th>Index image</th>
                                                <th>Video</th>
                                                <th>Activity Date </th>
                                                <th> is Active</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($activity)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($activity as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                             <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td>
                                                    {{$item->title}}
                                                </td>
                                                <td>
                                                    {{$item->location}}
                                                </td>
                                              
                                                <td>
                                                    <img src="{{$item->Main_image}}" alt="{{$item->title}}" srcset="">
                                                </td>
                                                <td>
                                                    <img src="{{$item->index_banner}}" alt="{{$item->title}}" srcset="">
                                                </td>
                                                <td>
                                                    {{$item->video}}
                                                </td>
                                                <td>
                                                   {{\Carbon\Carbon::parse($item->activity_date)->format("d-M-Y")}}
                                                </td>
                                                <td>
                                                    {{$item->is_active}}
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/gallery/create/'.encrypt($item->id))}}?type=activity">
                                                        <button type="button" class="btn btn-info btn-sm" title="Upload Gallary"><i class="fa fa-upload" aria-hidden="true"></i></button>
                                                    </a>
                                                    <a href="{{ url('/activitydetail', ['encryptedId' => encrypt($item->id)]) }}">
                                                        <button type="button" class="btn btn-success btn-sm" title="View"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                    </a>
                                                    <a href="{{url('/admin/activity/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                    </a>
                                              
                                                    <!-- Add show/hide button -->
                                                    @if ($item->is_active == "active")
                                                    <a href="{{url('/admin/activity/inactive/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-danger btn-sm">Inactive</button>
                                                    </a>
                                                    @endif
                                                    @if ($item->is_active == "inactive")
                                                    <a href="{{url('/admin/activity/active/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-success btn-sm">Active</button>
                                                    </a>
                                                    @endif
                                        
                                                    <a href="{{ url('/admin/deleteactivity/' . $item->id) }}" 
                                                        onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this blog post?')) document.getElementById('delete-form-{{ $item->id }}').submit();"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                
                                                    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.activity.deleteactivity', ['id' => $item->id]) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                            </td>


                                            </tr>  
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                    {{$activity->links('vendor.pagination.bootstrap-4')}}
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

    @stop
    @stop