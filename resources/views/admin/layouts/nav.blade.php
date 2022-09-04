


{{-- users --}}


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Control all members
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/adminpanel/visitors/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/adminpanel/visitors ')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All users</p>
                </a>
              </li>
             
            </ul>
          </li>




{{-- companies --}}


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Control all companies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/adminpanel/companies/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/adminpanel/companies')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All companies</p>
                </a>
              </li>
             
            </ul>
          </li>


   {{-- Categories --}}


<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-users"></i>
    <p>
     Control all categories
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/adminpanel/categories/create')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Add category</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('/adminpanel/categories')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>All categories</p>
      </a>
    </li>
  </ul>
</li>







            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
               {{Auth::user()->name}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                 <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
           
 <form id="logout-form"  action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>

           
                  
                </a>
              </li>
             
             
            </ul>
          </li>
