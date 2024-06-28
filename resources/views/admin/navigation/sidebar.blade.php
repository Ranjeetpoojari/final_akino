<nav class="sidebar sidebar-offcanvas position-fixed" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/dashboard')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#campaign" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Campaign</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="campaign">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('/admin/campaign/create')}}">New Campaign</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/admin/campaign/view')}}">All Campaign</a></li>
          </ul>
        </div>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/faqs')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">FAQs</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/testimonial')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Testimonial</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/impact')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Our Impact</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/campagiancategory')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Campaign Category </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/blog')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Our Blogs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/activity')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Activity</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/gallery')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Gallery</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/volunteer')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Volunteer</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/subsubcategory')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Program Subcategory</span>
        </a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/categories')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/ourwork')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Our WorkDetail</span>
        </a>
      </li>
   

      

      

      
    </ul>
  </nav>