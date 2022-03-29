<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Compose email</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">



        <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap')}}"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{asset('assets/vendor/perfect-scrollbar.css')}}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{asset('assets/css/material-icons.css')}}"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="{{asset('assets/css/fontawesome.css')}}"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{asset('assets/vendor/spinkit.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{asset('assets/css/preloader.css')}}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{asset('assets/css/app.css')}}"
              rel="stylesheet">

        <!-- Dark Mode CSS (optional) -->
        <link type="text/css"
              href="{{asset('assets/css/dark-mode.css')}}"
              rel="stylesheet">

        <!-- slect2 library -->
          <link href="{{asset('dist/css/select2.min.css')}}" rel="stylesheet" />


    </head>

    <body class="layout-app layout-sticky-subnav sub-layout">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->

                <!-- // END Header -->

                <div data-push
                     data-responsive-width="1920px"
                     data-has-scrollable-region
                     data-fullbleed
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content"
                         data-perfect-scrollbar>


                        <div class="container-fluid page__container page-section col-sm-9">

                            <p></p>

                            <div class="page-separator">
                                <div class="page-separator__text">New Email</div>
                            </div>
                            <form class="" action="{{route('sendforward')}}" method="post" enctype="multipart/form-data">
                              @csrf
                            <div class="list-group list-group-form">
                                <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">To</label>
                                        <div class="col-sm-9">
                                            <select class="contributors multiple-select form-control" name="contributors[]" multiple>
                                              @foreach($users as $user)
                                              <option value="{{$user->id}}">{{$user->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">Subject</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                   name="subject"
                                                   class="form-control"
                                                   placeholder="Email subject ..."
                                                   value="{{$email->subject}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">Email content</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"
                                              name="message"
                                              id="comment"
                                              rows="20"
                                              placeholder="Type here your message ...">{{$email->message}}</textarea>

                                              <div class="d-flex align-items-center">
                                                      <input type="text"
                                                         class="btn btn-sm btn-outline-secondary" name="file" value="{{$email->file}}"><i class="icon--right material-icons">file_download</i></input>
                                              </div>
                                        </div>
                                        <p></p>
                                        <button type="submit" class="btn btn-accent">Send Email</button>

                                    </div>
                                  </form>
                                </div>
                            </div>




                        </div>

                    </div>

                    <div class="mdk-drawer sub-layout-drawer js-mdk-drawer"
                         data-align="start"
                         id="email-drawer">
                        <div class="mdk-drawer__content ">

                        </div>
                    </div>

                </div>

            </div>
            <!-- // END drawer-layout__content -->

            <!-- drawer -->
            <div class="mdk-drawer js-mdk-drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-dark sidebar-left"
                         data-perfect-scrollbar>

                        <!-- Sidebar -->


                        <a href="\"
                           class="sidebar-brand ">
                            <img
                                 src="{{asset('assets/images/logo/logo.png')}}"
                                 alt="Deadline">

                        </a>

                        <div class="sidebar-account mx-16pt mb-16pt dropdown">
                          <a href="#"
                             class="nav-link d-flex align-items-center dropdown-toggle"
                             data-toggle="dropdown"
                             data-caret="false">
                              <img width="32"
                                   height="32"
                                   class="rounded-circle mr-8pt"
                                   src="{{asset(Storage::url(Auth::user()->image))}}"
                                   alt="account" />
                              <span class="flex d-flex flex-column mr-8pt">
                                  <span class="text-black-100">{{Auth::user()->name}}</span>
                                  <small class="text-black-50">{{Auth::user()->role}}</small>
                              </span>
                              <i class="material-icons text-black-20 icon-16pt">keyboard_arrow_down</i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                              <div class="dropdown-header"><strong>Account</strong></div>
                              <a class="dropdown-item"
                                 href="\edit-account">Edit Account</a>
                                 @if(Auth::user()->role == 'administrator')
                              <a class="dropdown-item"
                                 href="\subscription">Billing</a>
                              <a class="dropdown-item"
                                 href="\billing-payment">Payments</a>
                                 @endif
                                 <a class="dropdown-item"
                                 href="{{ route('adminlogout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a>
                                 <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                          </div>
                        </div>

                      <p></p>

                        <div class="sidebar-heading">Deadlines</div>


                        <ul class="sidebar-menu">

                            <li class="sidebar-menu-item ">
                                <a class="sidebar-menu-button"
                                   href="\">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">insert_chart_outlined</span>
                                    <span class="sidebar-menu-text">Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#productivity_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                    Productivity
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="productivity_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/projects">
                                            <span class="sidebar-menu-text">Projects</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/tasks-board">
                                            <span class="sidebar-menu-text">Tasks Board</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/tasks-list">
                                            <span class="sidebar-menu-text">Tasks List</span>
                                        </a>
                                    </li>
                                    @if(Auth::user()->role <> 'employee')
                                  <li class="sidebar-menu-item">
                                      <a class="sidebar-menu-button"
                                         href="/reports">
                                          <span class="sidebar-menu-text">Reports</span>
                                      </a>
                                  </li>
                                  @endif

                                </ul>
                            </li>



                              <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#account_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                    Account
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>

                                <ul class="sidebar-submenu collapse show sm-indent"
                                    id="account_menu">

                                   <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/edit-account">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>

                                    @if(Auth::user()->role == 'administrator')
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/subscription">
                                            <span class="sidebar-menu-text">Subscription</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/requests">
                                            <span class="sidebar-menu-text">Requests</span>
                                        </a>
                                    </li>
                                    @endif


                                </ul>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#community_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                    Community
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="community_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/employees">
                                            <span class="sidebar-menu-text">Employees</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/announcments">
                                            <span class="sidebar-menu-text">Announcments</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/events">
                                            <span class="sidebar-menu-text">Events</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="/email">
                                            <span class="sidebar-menu-text">Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
       <!-- App Settings FAB -->

        <!-- jQuery -->
        <script src="{{asset('assets/vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{asset('assets/vendor/perfect-scrollbar.min.js')}}"></script>

        <!-- DOM Factory -->
        <script src="{{asset('assets/vendor/dom-factory.js')}}"></script>

        <!-- MDK -->
        <script src="{{asset('assets/vendor/material-design-kit.js')}}"></script>

        <!-- App JS -->
        <script src="{{asset('assets/js/app.js')}}"></script>

        <!-- Highlight.js -->
        <script src="{{asset('assets/js/hljs.js')}}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{asset('assets/js/app-settings.js')}}"></script>
        <script src="{{asset('dist/js/select2.min.js')}}"></script>
        <script type="text/javascript">
        $(document).ready(function() {
          $('.contributors').select2();
        });
        </script>
    </body>

</html>
