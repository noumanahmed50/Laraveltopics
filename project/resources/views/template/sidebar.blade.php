<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">
        <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" />
        <span class="logo-name">Admin</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="dropdown active" style="display: block;">
        <div class="sidebar-profile">
          <div class="siderbar-profile-pic">
            <img src="{{asset('images/admin.png')}}" class="profile-img-circle box-center" alt="User Image">
          </div>
          <div class="siderbar-profile-details">
            <div class="siderbar-profile-name"> Admin </div>
            
          </div>
          
        </div>
      </li>
      
      <li class="menu-header">Main</li>
      <li class="dropdown active">
       
        
        
        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href="{{route('user-list')}}">User</a></li>
        </ul>

        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href="{{route('read-topics')}}">Laravel-Topics</a></li>
        </ul>
        

        
        
      </li>
      
      
    </ul>
  </aside>
</div>