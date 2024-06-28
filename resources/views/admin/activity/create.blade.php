@extends('admin.layouts.app')
@section('title','Impact | Create')
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
                    <div class="col-lg-2 grid-margin stretch-card">
                    </div>
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{$text}}</h4>
                                @if (Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if (Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{ url('/admin/activity/store') }}" method="POST" enctype="multipart/form-data"
                                        accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="activity_id" value="{{ isset($activity->id) ? $activity->id : '' }}">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Title</label>
                                            <input type="text" class="form-control" name="title" id="activitytitle" placeholder="Title"
                                                value="{{ isset($activity->title) ? $activity->title : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Slug</label>
                                            <input type="text" class="form-control" name="slug" id="activityslug" placeholder="Slug"
                                                value="{{ isset($activity->slug) ? $activity->slug : '' }}" required>
                                        </div>
                                        <!--<div class="form-group">-->
                                        <!--    <label for="exampleInputUsername1">Video Link</label>-->
                                        <!--    <input type="text" class="form-control" name="video" id="activitytitle" placeholder="Video link here.."-->
                                        <!--        value="{{ isset($activity->video) ? $activity->video : '' }}" required>-->
                                        <!--</div>-->
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Location</label>
                                            <input type="text" class="form-control" name="location" id="exampleInputUsername1"
                                                placeholder="Location" value="{{ isset($activity->location) ? $activity->location : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Main Image</label>
                                            <input type="file" class="form-control" name="Main_image" id="exampleInputUsername1" placeholder="Images" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Index Image</label>
                                            <input type="file" class="form-control" name="index_banner" id="exampleInputUsername1" placeholder="Images" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Activity Date</label>
                                            <input type="date" class="form-control" name="activity_date" id="exampleInputUsername1"
                                                placeholder="Activity Date" value="{{ isset($activity->activity_date) ? $activity->activity_date : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea rows="5" class="form-control" name="description" style="height: 100px"
                                                placeholder="Description" required>{{ isset($activity->description) ? $activity->description : '' }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="is_active">Status</label>
                                            <select class="form-control" name="is_active" id="is_active">
                                                <option value="active" {{ isset($activity->is_active) && $activity->is_active == "active" ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ isset($activity->is_active) && $activity->is_active == "inactive" ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </form>
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
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var titleInput = document.getElementById('activitytitle');
            var slugInput = document.getElementById('activityslug');
    
            titleInput.addEventListener('input', function () {
                var title = titleInput.value;
                
                // Convert spaces to hyphens and make lowercase
                var slug = title.replace(/\s+/g, '-').toLowerCase();
    
                // Update the slug field
                slugInput.value = slug;
            });
        });
    </script>
    @stop
    @stop