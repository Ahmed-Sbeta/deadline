<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Deleting User</title>

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
<!--mentions css-->
              <link href="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')}}" rel="stylesheet" />

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


                         <div class="container-fluid page__container page-section">





                            <h4>Are you sure that you want to delete user?</h4>



                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card border-left-4 border-left-danger">
                                        <div class="card-body text-70">
                                          By deleting this user will remove him <strong>permenantly</strong>  from accessing the company's dashboard
                                         <br> please make sure before deleting the user
                                          <div>
                                              <br>
                                            <a href="/deleteUser/{{$user->id}}"
                                               class="btn btn btn-outline-dark" style="background-color: crimson; color: aliceblue;" >delete</a>

                                            <a href="/employees"
                                               class="btn btn btn-outline-dark">Cancel</a>
                                        </div>
                                        </div>
                                    </div>
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

                                  <!-- Navbar toggler -->
                                  <a href="index.html"
                                  class="sidebar-brand ">
                                   <img
                                        src="assets/images/logo/logo.png"
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
                                            src="assets/images/people/50/guy-3.jpg"
                                            alt="account" />
                                       <span class="flex d-flex flex-column mr-8pt">
                                           <span class="text-black-100">Abdo Daeki</span>
                                           <small class="text-black-50">Administrator</small>
                                       </span>
                                       <i class="material-icons text-black-20 icon-16pt">keyboard_arrow_down</i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                       <div class="dropdown-header"><strong>Account</strong></div>
                                       <a class="dropdown-item"
                                          href="edit-account.html">Edit Account</a>
                                       <a class="dropdown-item"
                                          href="billing.html">Billing</a>
                                       <a class="dropdown-item"
                                          href="billing-history.html">Payments</a>
                                       <a class="dropdown-item"
                                          href="login.html">Logout</a>

                                   </div>
                               </div>

                               <p></p>

                               <div class="sidebar-heading">Deadlines</div>
                               <ul class="sidebar-menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="index.html">
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
                                                  href="projects.html">
                                                   <span class="sidebar-menu-text">Projects</span>
                                               </a>
                                           </li>
                                           <li class="sidebar-menu-item">
                                               <a class="sidebar-menu-button"
                                                  href="tasks-board.html">
                                                   <span class="sidebar-menu-text">Tasks Board</span>
                                               </a>
                                           </li>
                                           <li class="sidebar-menu-item">
                                               <a class="sidebar-menu-button"
                                                  href="tasks-list.html">
                                                   <span class="sidebar-menu-text">Tasks List</span>
                                               </a>
                                           </li>
                                           <li class="sidebar-menu-item">
                                               <a class="sidebar-menu-button"
                                                  href="reports.html">
                                                   <span class="sidebar-menu-text">Reports</span>
                                               </a>
                                           </li>

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
                                                  href="edit-account.html">
                                                   <span class="sidebar-menu-text">Edit Account</span>
                                               </a>
                                           </li>

                                           <li class="sidebar-menu-item">
                                               <a class="sidebar-menu-button"
                                                  href="billing.html">
                                                   <span class="sidebar-menu-text">Subscription</span>
                                               </a>
                                           </li>
                                           <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="user-approves.html">
                                                <span class="sidebar-menu-text">Requests</span>
                                            </a>
                                        </li>

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
                                                  href="employees.html">
                                                   <span class="sidebar-menu-text">Employees</span>
                                               </a>
                                           </li>

                                           <li class="sidebar-menu-item">
                                               <a class="sidebar-menu-button"
                                                  href="announcments.html">
                                                   <span class="sidebar-menu-text">Announcments</span>
                                               </a>
                                           </li>

                                           <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="events.html">
                                                <span class="sidebar-menu-text">Events</span>
                                            </a>
                                        </li>

                                           <li class="sidebar-menu-item active">
                                               <a class="sidebar-menu-button"
                                                  href="email.html">
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

        <!--mentions script-->

        <script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
    </body>

</html>
