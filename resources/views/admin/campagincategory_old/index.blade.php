@extends('admin.layouts.app')
@section('title','Language | Chah Foundation')
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
                                    <a href="{{url('/admin/campagiancategory/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th>Title </th>
                                                <th> Banner </th>
                                                <th> Short Discription </th>
                                               
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($camp)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($camp as $item)
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
                                                    <img src="{{url($item->image)}}" alt="{{$item->image}}" srcset="">
                                                </td>
                                                <td>
                                                    {{$item->short_discription}}
                                                </td>
                                                {{-- <td>
                                                    <img src="{{url($item->icon)}}" alt="{{$item->name}}" srcset="">
                                                </td> --}}
                                               
                                                <td>
                                                    <a href="{{url('/admin/gallery/create/'.encrypt($item->id))}}?type=campaign">
                                                        <button type="button" class="btn btn-info btn-sm" title="Upload Gallary"><i class="fa fa-upload" aria-hidden="true"></i></button>
                                                    </a>
                                                    <a href="{{url('/admin/campagiancategory/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    <a href="{{ url('/admin/campagiancategory/delete/' . $item->id) }}" 
                                                        onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this Campaign Category post?')) document.getElementById('delete-form-{{ $item->id }}').submit();"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                
                                                    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.campagiancategory.delete', ['id' => $item->id]) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                    {{$camp->links('vendor.pagination.bootstrap-4')}}
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