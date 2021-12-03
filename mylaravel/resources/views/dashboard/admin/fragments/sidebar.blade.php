  <!--  BEGIN SIDEBAR  -->
  <div class="sidebar-wrapper sidebar-theme">

      <nav id="sidebar">
          <div class="shadow-bottom"></div>

          <ul class="list-unstyled menu-categories" id="accordionExample">

              <li class="menu">
                  <a href="{{route('admin.users.index')}}" aria-expanded="false" class="dropdown-toggle">
                      <div class="">
                          <i class="fa fa-bars"></i>
                          <span>Users</span>
                      </div>
                  </a>
              </li>

              
              <li class="menu">
                  <a href="{{route('admin.post.create')}}" aria-expanded="false" class="dropdown-toggle">
                      <div class="">
                          <i class="fa fa-bars"></i>
                          <span>Post</span>
                      </div>
                  </a>
              </li>


              <li class="menu">

                  <i class="fa fa-sign-out" style="font-size:30px;color:black"></i>

                  <form action="{{ route('logout')}}" method="post">@csrf
                      <button class="dropdown-item text-danger" type="submit">Sign-Out</button>
                  </form>
              </li>


          </ul>

      </nav>

  </div>
  <!--  END SIDEBAR  -->