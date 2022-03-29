<!DOCTYPE html>
<html lang="en"
      dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>

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

        <!-- Vector Maps -->
        <link type="text/css"
              href="{{asset('assets/vendor/jqvmap/jqvmap.min.css')}}"
              rel="stylesheet">

    </head>

    <body class="layout-app layout-sticky-subnav ">

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

        <!--End of loader-->

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->

                <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar Brand -->
                    <a href="/"
                       class="navbar-brand mr-16pt d-lg-none">
                        <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                             src="{{asset('assets/images/logo/logo.png')}}"
                             width="32"
                             alt="Deadline">
                    </a>

                    <!--navbar-->

                    <div class="flex" ></div>

                    <div class="nav navbar-nav flex-nowrap d-none d-lg-flex mr-16pt"
                         style="white-space: nowrap;">
                        <div class="nav-item dropdown d-none d-sm-flex" >
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown">EN</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header"><strong>Select language</strong></div>
                                <a class="dropdown-item active"
                                   href="">English</a>
                                <a class="dropdown-item"
                                   href="/ar/">العربية</a>

                            </div>
                        </div>
                    </div>

                    <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
                        <div class="nav-item dropdown d-none d-sm-flex">
                            <a href="#"
                               class="nav-link d-flex align-items-center dropdown-toggle"
                               data-toggle="dropdown">
                                <img width="32"
                                     height="32"
                                     class="rounded-circle mr-8pt"
                                     src="{{asset(Storage::url(Auth::user()->image))}}"
                                     alt="account" />
                                <span class="flex d-flex flex-column mr-8pt">
                                  <span class="navbar-text-100">{{Auth::user()->firstName}} {{Auth::user()->lastName}}</span>
                                  <small class="navbar-text-50">{{Auth::user()->role}}</small>
                                </span>
                                <!-- sadasd -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
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

                        <!-- Notifications dropdown -->
                        <div class="nav-item ml-16pt dropdown dropdown-notifications">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-dropdown-disable-document-scroll
                                    data-caret="false"
                                    >
                                <i class="material-icons" >notifications</i>
                                <span class="badge badge-notifications badge-accent">{{Auth::user()->unreadNotifications->count()}}</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>Notifications</strong></div>
                                    <div class="list-group list-group-flush mb-0">
                                      @forelse(Auth::user()->notifications->take(3) as $notification)
                                        <a href="#"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">{{(new Carbon\Carbon($notification->created_at))->diffForHumans()}}</small>

                                                <span class="ml-auto bg-accent"></span>

                                            </span>
                                            <span class="d-flex">

                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70" onclick="{{$notification->markAsRead()}}">{{$notification->data['text']}}<strong>{{$notification->data['name']}}</strong> </span>
                                                </span>
                                            </span>
                                        </a>
                                        @empty
                                        <a href="tasks-details.html"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50"></small>
                                                <span class="ml-auto unread-indicator bg-accent"></span>
                                            </span>
                                            <span class="d-flex">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <span class="text-black-70">No notifications available </span>
                                                </span>
                                            </span>
                                        </a>
                                        @endforelse
                                        <a href="/notifications"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">See All Notifications</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->

                        <!-- Notifications dropdown -->
                        <div class="nav-item ml-16pt dropdown dropdown-notifications">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-dropdown-disable-document-scroll
                                    data-caret="false">
                                <i class="material-icons icon-24pt">mail_outline</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>
                                    <div class="list-group list-group-flush mb-0">
                                      @forelse($receved as $res)
                                      @foreach($email as $mail)
                                      @if($res->email_id == $mail->id)
                                        <a href="/email-details/{{$mail->id}}"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">{{(new Carbon\Carbon($mail->created_at))->diffForHumans()}}</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="{{asset(Storage::url($user->find($mail->creator)->image))}}"
                                                         alt="people"
                                                         class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">{{$user->find($mail->creator)->name}}</strong>
                                                    <span class="text-black-70">{{$mail->subject}}</span>
                                                </span>
                                            </span>
                                        </a>
                                        @endif
                                        @endforeach
                                        @empty
                                        <a href="/email"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50"></small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">

                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100"></strong>
                                                    <span class="text-black-70">No Mail available.</span>
                                                </span>
                                            </span>
                                        </a>
                                        @endforelse
                                        <a href="/email"
                                        class="list-group-item list-group-item-action">
                                         <span class="d-flex align-items-center mb-1">

                                         </span>
                                         <span class="d-flex">
                                             <span class="avatar avatar-xs mr-2">
                                                 <span class="avatar-title rounded-circle bg-light">
                                                     <i class="material-icons font-size-16pt text-warning">storage</i>
                                                 </span>
                                             </span>
                                             <span class="flex d-flex flex-column">

                                                 <span class="text-black-70">See All Messages</span>
                                             </span>
                                         </span>
                                     </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->
                    </div>

                    <!--End navbar-->


                </div>

                <!-- // END Header -->

                <div class="border-bottom-2 py-32pt position-relative z-1">
                    <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Welcome to your dashboard !</h2>

                                <ol class="breadcrumb p-0 m-0">


                                    <li class="breadcrumb-item active">

                                      {{Auth::user()->name}}
                                    </li>

                                </ol>

                            </div>


                        </div>


                        <!--Date and Time-->
                        <div class="row"
                        role="tablist">
                        <div class="col-auto d-flex flex-column">
                            <h6 class="m-0">{{ Carbon\Carbon::now()->addHour(2)->format('H:i')}}</h6>
                            <p class="text-50 mb-0 pr-1 d-flex align-items-center">
                                {{ Carbon\Carbon::now()->toDateString()}}
                            </p>
                        </div>

                       </div>

                        <div class="row"
                             role="tablist">
                            <div class="col-auto border-left" style="margin-left: 12px;">
                                <a href="/reminders"
                                   class="btn btn-accent">Reminders</a>
                            </div>
                        </div>

                    </div>
                </div>


                  <!--ANNOUNCMENT DIV-->

                <div class="container-fluid page__container">
                    <div class="page-section">

                      @if($announcement)
                        <div class="page-separator">
                            <div class="page-separator__text">New Announcment</div>
                        </div>

                        <div class="btn-accent">

                            <div class="card-body">
                                <section class="call-to-action call-to-action-primary mb-5">
                                    <div class="col-sm-9 col-lg-9">
                                        <div class="call-to-action-content">
                                           <p></p> <h3>{{$announcement->title}}</h3>
                                            <p class="mb-0 opacity-7">{{$announcement->discription}}</p>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="col-sm-3 col-lg-3">
                                        <div class="call-to-action-btn">
                                            <a href="/announcement-details/{{$announcement->id}}" target="_blank" class="btn btn-modern text-2 btn-light border-0">Take a look!</a>
                                        </div>
                                    </div>
                                </section>


                            </div>
                        </div>
                        <p></p>
                        @endif

                          <!-- Upcoming Deadlines div-->

                           <div class="page-separator">
                             <div class="page-separator__text">Upcoming Deadlines</div>
                           </div>
                        <div class="card mb-lg-32pt">
                            <div class="card-header py-12pt d-flex align-items-center">
                                <strong>Projects</strong>

                            </div>
                            <div class="progress rounded-0"
                                 style="height: 4px;">
                                <div class="progress-bar bg-accent"
                                     role="progressbar"
                                     style="width: 100%;"
                                     aria-valuenow="14"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>

                            <div class="table-responsive"
                                 data-toggle="lists"
                                 data-lists-sort-by="js-lists-values-date"
                                 data-lists-sort-desc="false"
                                 data-lists-values='["js-lists-values-name", "js-lists-values-date"]'>

                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>

                                            <th style="width: 18px;"
                                                class="pr-0">

                                            </th>

                                            <th>
                                               <span>Title</span>
                                            </th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 48px;">
                                               <span>Date</span>
                                            </th>
                                            <th style="width: 100px;">Team Members</th>
                                            <th style="width: 24px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list"
                                           id="tasks">
                                           @foreach($project as $proj)
                                        <tr class="selected">

                                            <td class="pr-0">

                                            </td>

                                            <td>

                                                <div class="d-flex align-items-center">
                                                    <strong class="flex js-lists-values-name">{{$proj->title}}</strong>



                                                </div>

                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">



                                                </div>
                                            </td>
                                            <td>
                                                <small class="js-lists-values-date text-50">{{$proj->dueOn}}</small>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-group flex mr-8pt">

                                                      @foreach($project_workers as $worker)
                                                        @if($worker->project_id == $proj->id)
                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="{{$user->find($worker->user_id)->name}}">
                                                            <a href=""><img src="{{asset(Storage::url($user->find($worker->user_id)->image))}}"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>
                                                        @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>



                        </div>

<!--project overview div-->

<div class="page-separator">
    <div class="page-separator__text">Projects Overview</div>
</div>

<div class="row mb-lg-8pt">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                          @if($inProgress)
                            <small>{{$inProgress}}%</small>
                            @else
                            <small>0%</small>
                            @endif
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1 js-update-chart-progress"
                                id="inTimeProgressChart"
                                data-chart-line-background-color="yellow;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>In progress</strong>
                    </div>
                    @if($activeProjects)
                    <div class="text-50">{{$activeProjects}}</div>
                    @else
                    <div class="text-50">0</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            @if($Done)
                            <small>{{$Done}}%</small>
                            @else
                            <small>{{$Done}}%</small>
                            @endif
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1 js-update-chart-progress-accent"
                                id="lateProgressChart"
                                data-chart-line-background-color="teal;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>Done</strong>
                    </div>
                    @if($closedProjects)
                    <div class="text-50">{{$closedProjects}}</div>
                    @else
                    <div class="text-50">{{$closedProjects}}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
<p></p>


<!--Tasks Overview-->

<div class="page-separator">
    <div class="page-separator__text">Tasks Overview</div>
</div>


<div class="card">
    <div class="card-body p-24pt">
        <div class="row">
            <div class="col-6">
                <div class="chart"
                     style="height: 262px;">
                    <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                        <h2 class="m-0">{{$totalTasks}}</h2>
                        <strong>Tasks Overall</strong>
                    </div>
                    <canvas class="chart-canvas position-relative z-1"
                            id="attendanceDoughnutChart"
                            data-chart-legend="#attendanceDoughnutChartLegend"
                            data-chart-line-background-color="primary;teal;gray.700;gray">

                    </canvas>
                </div>
            </div>
            <div class="col-6">
                <div class="nav border-0">
                    <div class="row no-gutters flex"
                         role="tablist">
                        <div class="col-auto">
                            <div class=" flex">
                                <div class="h1 mb-0 mr-3"><p></p>{{$tasksClosed}}</div>
                                <div class="flex">
                                    <p class="mb-0"><strong>Completed tasks</strong></p>
                                    <p class="text-50 mb-0 lh-1">
                                        <small> </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="attendanceDoughnutChartLegend"
                     class="chart-legend chart-legend--vertical mt-24pt"></div>
            </div>
        </div>
    </div>
</div>




<p></p>



                    </div>
                </div>

                <!--footer-->

                <div class="js-fix-footer footer border-top-2">
                    <div class="container-fluid page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="{{asset('assets/images/logo/logo.png')}}"
                                 width="30"
                                 alt="Deadline"> Deadline
                        </p>
                        <p class="measure-lead-max text-muted mb-0 small">Deadline is a beautifully crafted user interface for modern Business companies that provide multiple services, It helps the management  following the proccess of the Project Management, Tasks, Messaging and Account Management.</p>
                    </div>
                    <div class="pb-16pt pb-lg-24pt">
                        <div class="container-fluid page__container">
                            <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                        <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                                        <nav class="nav nav-links nav--flush">
                                            <a href="https://www.facebook.com/mawja"
                                               class="nav-link mr-8pt"><img src="{{asset('assets/images/icon/footer/facebook-square@2x.png')}}"
                                                     width="24"
                                                     height="24"
                                                     alt="Facebook"></a>

                                             <a href="https://www.youtube.com/channel/UCKNlvCnoC8tEJDId3d9QelA" class="nav-link"><img src="{{asset('assets/images/icon/footer/youtube-square@2x.png')}}"
                                                 width="24"
                                                  height="24"
                                                  alt="YouTube"></a>
                                        </nav>
                                    </div>
                                    <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                       <p></p><p></p>
                                        <p class="text-white-50 small mb-0">Copyright MAWJA 2022 &copy; All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
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

                            <li class="sidebar-menu-item active">
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
                            <li class="sidebar-menu-item">
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

                                    <li class="sidebar-menu-item">
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
        <script src="{{asset('assets/js/settings.js')}}"></script>

        <!-- Chart.js -->
        <script src="{{asset('assets/vendor/Chart.min.js')}}"></script>
        <script src="{{asset('assets/js/chartjs.js')}}"></script>

        <!-- Chart.js Samples -->
        <!-- <script src="{{asset('assets/js/employees.js')}}"></script> -->
        <script type="text/javascript">
        !function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="/",r(r.s=480)}({480:function(e,t,r){e.exports=r(481)},481:function(e,t){!function(){"use strict";var e=function(e,t,r){var n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"doughnut",o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:{};o=Chart.helpers.merge({cutoutPercentage:85,aspectRatio:1,responsive:!1,maintainAspectRatio:!1},o);var a={datasets:[{data:[t,r-t],backgroundColor:[],borderWidth:0}]};Charts.create(e,n,o,a)};e("#inTimeProgressChart",{{$inProgress}},100),e("#lateProgressChart",{{$Done}},100),e("#absentsProgressChart",70,100),e("#vacationProgressChart",.27,27),e("#outTimeProgressChart",70,25),e("#preTimeProgressChart",30,80)}()}});

        </script>
        <script type="text/javascript">
        !function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=484)}({484:function(e,t,n){e.exports=n(485)},485:function(e,t){!function(){"use strict";!function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"doughnut",n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};n=Chart.helpers.merge({cutoutPercentage:75,tooltips:{callbacks:{title:function(e,t){return t.labels[e[0].index]},label:function(e,t){return""+'<span class="popover-body-value">'+t.datasets[0].data[e.index]+"</span>"}}}},n);var r={labels:["In Progress","Done",],datasets:[{data:[{{$tasksInProgress}},{{$tasksClosed}}],backgroundColor:[],borderColor:settings.colors.white,hoverBorderColor:settings.colors.white}]};Charts.create(e,t,n,r)}("#attendanceDoughnutChart")}()}});

        </script>


        <!-- Chart.js Samples -->
        <!-- <script src="{{asset('assets/js/page.hr-dashboard.js')}}"></script> -->

        <!-- Chart.js Samples -->
        <!-- <script src="{{asset('assets/js/page.tasks-board.js')}}"></script> -->

    </body>

</html>
