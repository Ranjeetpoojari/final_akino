@extends('admin.layouts.app')
@section('title','Language | Akino foundation')
@section('style')
<style>
    td{
        max-width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
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
                                <h4 class="card-title">All Gallery
                                    <a href="{{url('/admin/album/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th>Activity ID</th>
                                                <th> Name </th>
                                                <th> No of Images </th>
                                                <th> is Active </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($gallery)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($gallery as $item)
                                            @php
                                            $x = $x+1;
                                            $count = DB::select("SELECT count(*) as count_gallery FROM gallery_details where album_id = ".$item->id);
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td>
                                                    {{$item->activity_id}}
                                                </td>
                                                <td>
                                                    {{$item->name}}
                                                </td>
                                                <td>
                                                    {{$count[0]->count_gallery}}
                                                </td>
                                                <td>
                                                    {{$item->is_active}}
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/album/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    <a href="{{url('/admin/gallery/view/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-success btn-sm">View gallery</button>
                                                    </a>
                                                    <a href="{{url('/admin/gallery/create/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Upload gallery</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                    {{$gallery->links('vendor.pagination.bootstrap-4')}}
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