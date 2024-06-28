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
                    
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Categories
                                    <a href="{{url('/admin/categories/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th>Language Name </th>
                                                <th> Banner </th>
                                                <th> Icon </th>
                                                <th> Slug </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($category)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($category as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td>
                                                    {{$item->name}}
                                                </td>
                                                <td>
                                                    <img src="{{url($item->banner)}}" alt="{{$item->name}}" srcset="">
                                                </td>
                                                <td>
                                                    <img src="{{url($item->icon)}}" alt="{{$item->name}}" srcset="">
                                                </td>
                                                <td>
                                                    {{$item->slug}}
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/categories/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                    {{$category->links('vendor.pagination.bootstrap-4')}}
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