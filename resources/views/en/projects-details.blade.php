<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>announcement-details</title>

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

              <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->

                <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="/"
                       class="navbar-brand mr-16pt d-lg-none">
                        <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                             src="{{asset('assets/images/logo/logo.png')}}"
                             width="32"
                             alt="Deadline">
                    </a>

                    <!-- <button class="btn navbar-btn mr-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->


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
                                   href="/ar/">??????????????</a>

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
                                   class="rounded-circle mr-8pt "
                                   src="{{asset(Storage::url(Auth::user()->image))}}"
                                   alt="account" />
                              <span class="flex d-flex flex-column mr-8pt">
                                  <span class="navbar-text-100">{{Auth::user()->name}}</span>
                                  <small class="navbar-text-50">{{Auth::user()->role}}</small>
                              </span>
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


                </div>

                <!-- // END Header -->

                <div class="border-bottom-2 py-32pt position-relative z-1">
                       <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                           <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Project Details</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Productivity

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

                <!-- // END Header -->

                   <div class="container-fluid page__container">
                       <div class="page-section">

                           <div class="row">
                               <div class="col-md-8">

                                   <h1 class="h3 mb-2">{{$project->title}}</h1>
                                   <p class="text-muted d-flex align-items-center mb-lg-32pt">
                                       <a href="/projects"
                                          class="mr-3">Back to Projects</a>

                                   </p>
                                   @if (count($errors) > 0)
                                   <div class = "alert alert-danger">
                                     <ul>
                                       @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                       @endforeach
                                     </ul>
                                   </div>
                                   @endif
                                   @if(session()->has('success'))
                                   <div class="alert alert-success">
                                     {{ session()->get('success') }}
                                   </div>
                                   @endif

                                   <div class="card card-body">
                                       <div class="d-flex">
                                         <span class="avatar avatar-32pt avatar  mr-12pt">
                                               <img src="{{asset(Storage::url($project->creater->image))}}"
                                                    alt="people"
                                                    class="avatar-img rounded-circle">
                                         </span>
                                           <div class="flex">
                                               <p class="d-flex align-items-center mb-2">
                                                     <span class="text-body mr-2"><strong>{{$project->creater->name}}</strong></span>
                                                   <small class="text-muted">{{(new Carbon\Carbon($project->created_at))->diffForHumans()}}</small>
                                               </p>
                                               <p>{{$project->discription}}</p>
                                               @if($project->file)
                                               <div class="d-flex align-items-center">
                                                       <a href="/download/{{$project->file}}"
                                                          class="btn btn-sm btn-outline-secondary">{{$project->file}}<i class="icon--right material-icons">file_download</i></a>
                                               </div>
                                               @endif
                                           </div>
                                       </div>
                                   </div>

                                   <form class="" action="{{url('/project/comment/'.$project->id)}}" method="post" enctype="multipart/form-data">
                                     @csrf
                                   <div class="d-flex mb-4">
                                       <a href=""
                                          class="avatar avatar-32pt mr-8pt">
                                           <img src="{{asset(Storage::url(Auth::user()->image))}}"
                                                alt="people"
                                                class="avatar-img rounded-circle">
                                       </a>
                                       <div class="flex">
                                           <div class="form-group">
                                               <label for="comment"
                                                      class="form-label">Your reply</label>
                                               <textarea class="form-control"
                                                         name="comment"
                                                         id="comment"
                                                         rows="3"
                                                         placeholder="Type here to reply to Matney ...">
                                                       </textarea>
                                           </div>
                                           <button type="submit" class="btn btn-accent">Post comment</button>
                                           <div class="d-inline-flex align-items-center">
                                             <input type="file" name="file" class="form-label ml-1">
                                           </div>
                                       </div>
                                     </form>
                                   </div>
                                   <div class="pt-3">
                                       <h4>{{$comments->count()}} Comments</h4>
                                       @foreach($comments as $comment)
                                       <div class="d-flex mb-3">
                                           <a href=""
                                              class="avatar avatar-32pt mr-8pt">
                                               <img src="{{asset(Storage::url($comment->creater->image))}}"
                                                    alt="people"
                                                    class="avatar-img rounded-circle">
                                           </a>
                                           <div class="flex">
                                               <a href=""
                                                  class="text-body"><strong>{{$comment->creater->name}}</strong></a>
                                               <span class="text-70">{{$project->title}}</span><br>
                                               <div class="d-flex align-items-center">
                                                   <small class="text-50 mr-2">{{(new Carbon\Carbon($comment->created_at))->diffForHumans()}}</small>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="ml-sm-32pt mt-3 card p-3">
                                           <div class="d-flex">

                                               <div class="flex">
                                                   <p class="mt-1 text-70">{!! nl2br(e($comment->comment)) !!}</p>
                                               </div>
                                           </div>
                                           @if($comment->file)
                                           <div class="col-auto text-right  align-items-center justify-content-center">
                                             <a href="/download/{{$comment->file}}"
                                             class="btn btn-sm btn-outline-secondary">Download <i class="icon--right material-icons">file_download</i></a>

                                           </div>
                                           @endif
                                       </div>
                                       @endforeach
                                   </div>
                               </div>
                               <div class="col-md-4">

                                   <h5 class="text-70">Project Contributors</h5>
                                   <p class="text-70 mb-24pt">People who needs to work on this project, Best of luck !</p>

                                   @foreach($project->workers as $worker)
                                   <div class="mb-4">
                                       <div class="d-flex align-items-center mb-2">
                                              <span class="avatar avatar-xs mr-8pt">
                                               <img src="{{asset(Storage::url($worker->image))}}"
                                                    alt="course"
                                                    class="avatar-img rounded-circle">
                                                   </span>
                                              <span class="flex mr-2 text-body"><strong>{{$worker->name}}</strong></span>
                                       </div>
                                   </div>
                                   @endforeach

                               </div>
                           </div>

                       </div>
                   </div>


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
               <!-- //

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

                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button"
                                               data-toggle="collapse"
                                               href="#productivity_menu">
                                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                                Productivity
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse sm-indent"
                                                id="productivity_menu">
                                                <li class="sidebar-menu-item active">
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
                                        <li class="sidebar-menu-item ">
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

                                                <li class="sidebar-menu-item ">
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
        <script src="{{asset('assets/js/app-settings.js')}}"></script>
    </body>

</html>
