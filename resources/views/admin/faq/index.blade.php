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
                                <h4 class="card-title">All FAQs
                                    <a href="{{url('/admin/faq/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th>Questions </th>
                                                <th>Position</th>
                                                <th> is Active </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($faqs)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($faqs as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td>
                                                    {{$item->question}}
                                                </td>
                                                <td>{{$item->position}}</td>
                                                <td>
                                                    @if ($item->is_active == "active")
                                                        <mark class="bg-success text-white">{{$item->is_active}}</mark>
                                                    @else
                                                        <mark class="bg-warning text-white">{{$item->is_active}}</mark>
                                                    @endif
                                                    
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/faqs/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    @if ($item->is_active == "active")
                                                    <a href="{{url('/admin/faqs/inactive/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-danger btn-sm">Inactive</button>
                                                    </a>
                                                    @endif
                                                    @if ($item->is_active == "inactive")
                                                    <a href="{{url('/admin/faqs/active/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-success btn-sm">Active</button>
                                                    </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                    {{$faqs->links('vendor.pagination.bootstrap-4')}}
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