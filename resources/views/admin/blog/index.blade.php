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
                                <h4 class="card-title">All Blogs
                                    <a href="{{url('/admin/blog/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> Id </th>
                                                <th>Title </th>
                                                <th>Type</th>
                                                <th>views</th>
                                                <th>Content</th>
                                                <th>Main image</th>
                                                <th> is Active</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($blog as $item)
                                                @php
                                                    $x = $loop->index + 1;
                                                @endphp
                                                <tr>
                                                    <td class="py-1">{{ $x }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->type }}</td>
                                                    <td>{{ $item->views }}</td>
                                                    <td><img src="{{ $item->main_images }}" alt="{{ $item->main_images }}" srcset=""></td>
                                                    <td>{{ \Carbon\Carbon::parse($item->blog_date)->format("d-M-Y") }}</td>
                                                    <td>{{ $item->is_active }}</td>
                                                    <td>
                                                        <a href="{{url('blogdetail', ['id' => $item->id])}}">
                                                            <button type="button" class="btn btn-success btn-sm" title="View"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                        </a>
                                                        <a href="{{ url('/admin/blog/edit/' . encrypt($item->id)) }}">
                                                            <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                    
                                                        @if ($item->is_active == "active")
                                                            <a href="{{ url('/admin/blog/inactive/' . encrypt($item->id)) }}">
                                                                <button type="button" class="btn btn-danger btn-sm">Inactive</button>
                                                            </a>
                                                        @endif
                                                        @if ($item->is_active == "inactive")
                                                            <a href="{{ url('/admin/blog/active/' . encrypt($item->id)) }}">
                                                                <button type="button" class="btn btn-success btn-sm">Active</button>
                                                            </a>
                                                        @endif
                                                      
                                                        <a href="{{ url('/admin/delete/' . $item->id) }}" 
                                                            onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this blog post?')) document.getElementById('delete-form-{{ $item->id }}').submit();"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    
                                                        <form id="delete-form-{{ $item->id }}" action="{{ route('admin.blog.delete', ['id' => $item->id]) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                       
                                                    </td>
                                                   </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="10">No blogs found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{$blog->links('vendor.pagination.bootstrap-4')}}
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