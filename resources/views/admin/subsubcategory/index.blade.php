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
                                <h4 class="card-title">All ourworks
                                    <a href="{{url('/admin/subsubcategory/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> Id </th>
                                                <th>Category</th>
                                                <th>Main image</th>
                                                <th>Title </th>
                                                <th>Slogan</th>
                                                <th> is Active</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($subsubcategory as $item)
                                                @php
                                                    $x = $loop->index + 1;
                                                @endphp
                                                <tr>
                                                    <td class="py-1">{{ $x }}</td>
                                                    <td>{{ $item->category }}</td>
                                                    <td><img src="{{ $item->main_image }}" alt="{{ $item->main_image }}" srcset=""></td>
                                                    {{-- <td><img src="{{ $item->banner }}" alt="{{ $item->banner }}" srcset=""></td> --}}
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->slogan }}</td>
                                                    <td>{{ $item->is_active }}</td>
                                                    <td>   
                                                       
                                                        <a href="{{url('/admin/gallery/create/'.encrypt($item->id))}}?type=ourwork">
                                                        <button type="button" class="btn btn-info btn-sm" title="Upload Gallary"><i class="fa fa-upload" aria-hidden="true"></i></button>
                                                    </a>

                                                        <a href="{{url('workdetail', ['subcategory_id' => encrypt($item->subcategory_id)])}}" target="_new">
                                                            <button type="button" class="btn btn-success btn-sm" title="View"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                        </a> 
                                                    <a href="{{ url('/admin/subsubcategory/edit/' . encrypt($item->id)) }}">
                                                            <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                    
                                                        @if ($item->is_active == "active")
                                                            <a href="{{ url('/admin/subsubcategory/inactive/' . encrypt($item->id)) }}">
                                                                <button type="button" class="btn btn-danger btn-sm">Inactive</button>
                                                            </a>
                                                        @endif
                                                        @if ($item->is_active == "inactive")
                                                            <a href="{{ url('/admin/subsubcategory/active/' . encrypt($item->id)) }}">
                                                                <button type="button" class="btn btn-success btn-sm">Active</button>
                                                            </a>
                                                        @endif
{{--                                                       
                                                        <a href="{{ url('/admin/ourworkdelete/' . $item->id) }}" 
                                                        onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this ourwork post?')) document.getElementById('delete-form-{{ $item->id }}').submit();"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    
                                                        <form id="delete-form-{{ $item->id }}" action="{{ route('admin.ourwork.delete', ['id' => $item->id]) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('delete')
                                                        </form> 
                                                        --}}
                                                    </td>
                                                   </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="10">No ourworks found</td>
                                                </tr>
                                            @endforelse
                                        </tbody> 
                                    </table>
                                    {{$subsubcategory->links('vendor.pagination.bootstrap-4')}} 
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