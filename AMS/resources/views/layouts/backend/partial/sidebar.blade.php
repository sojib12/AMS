<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('assets/backend/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>

                            <li role="separator" class="divider"></li>
                            <li>


                              <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>Sign Out</a>
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                              </form>
                         </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    @if(Request::is('staff*') || Request::is('posts*')  || Request::is('showpost*') || Request::is('events*')||Request::is('addeventurlt*')|| Request::is('displaydata*'))
                    @if(Auth::user()->role_id == 2)
                    <li class="{{ Request::is('staff/dashboard') ? 'active' : '' }}">
                        <a href="{{route('staff.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <a href="{{('news')}}" > 
                        <i class="material-icons">person_add</i>
                        <span>Add New Staff</span>
                        </a> 
                         <a href="{{('showstaff')}}">
                         <i class="material-icons">group</i>
                         <span>Show Staff</span>
                          </a>
                    
                    <a href="{{route('posts.create')}}">
                            <i class="material-icons">description</i>
                            <span>Create Scheduel</span>
                        </a>
                       
                          <a href="/showpost">
                            <i class="material-icons">update</i>
                            <span>Update Scheduel</span>
                        </a>
                        
                        <a href="{{route('posts.index')}}">
                            <i class="material-icons">cached</i>
                            <span>Show Scheduel</span>
                        </a>

                        <a href="{{('/addeventurlt')}}">
                            <i class="material-icons">book</i>
                            <span>Book Appointments </span>
                        </a>

                        <a href="{{('/displaydata')}}">
                            <i class="material-icons">bookmark_border</i>
                            <span>Booked Appointments</span>
                        </a>
                        
                        

                    <li class="header">System</li>


                    <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="material-icons">all_out</i>
                                <span>LogOut</span>

                              </a>
                              @endif

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                              </form>
                    </li>
                
                    @endif

                    @if(Request::is('client*') || Request::is('posts*') || Request::is('events*')|| Request::is('addeventurlt*')|| Request::is('displaydata*'))
                    @if(Auth::user()->role_id == 3)
                    <li class="{{ Request::is('client/dashboard') ? 'active' : '' }}">
                        <a href="{{route('client.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                        <a href="{{route('posts.index')}}">
                            <i class="material-icons">cached</i>
                            <span>Staff Scheduel</span>
                        </a>

                        <a href="{{('/addeventurlt')}}">
                            <i class="material-icons">book</i>
                            <span>Book Appointments </span>
                        </a>

                        <a href="{{('/displaydata')}}">
                            <i class="material-icons">bookmark_border</i>
                            <span>Booked Appointments</span>
                        </a>

                    <li class="header">System</li>


                    <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="material-icons">all_out</i>
                                <span>LogOut</span>

                              </a>
                              @endif

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                              </form>
                    </li>

                    @endif
