@extends('admin.layouts.app')
@section('title','Language | Akino Foundation')
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
                                <h4 class="card-title">All Campaigns
                                    <a href="{{url('/admin/campaign/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="alert alert-success">
                                                <th> # </th>
                                                <th> Name </th>
                                                <th>Fund</th>
                                                <th> No of Doc </th>
                                                <th>Status</th>
                                                <th> is Active </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($campaigns)
                                            @php
                                            if(isset($_GET['page'])){
                                                $x = ($_GET['page']-1)*15;
                                            }else{
                                                $x = 0;
                                            }
                                            @endphp
                                            @foreach ($campaigns as $item)
                                            @php
                                            $x = $x+1;
                                            $count = DB::select("SELECT count(*) as count_gallery FROM document_details where campaign_id = ".$item->id);
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td>
                                                    {{$item->title}}
                                                </td>
                                                <td>{{$item->fund_amount}}</td>
                                                <td>
                                                    {{$count[0]->count_gallery}}
                                                </td>
                                                <td>{{$item->status}}</td>
                                                <td>
                                                    {{$item->is_active}}
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/campaign/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    <a href="{{url('/admin/campaign/document/view/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">View Doc</button>
                                                    </a><br>
                                                    <a href="{{url('/admin/campaign/document/create/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Upload Doc</button>
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                    {{$campaigns->links('vendor.pagination.bootstrap-4')}}
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