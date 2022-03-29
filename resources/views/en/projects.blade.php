<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Projects</title>

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
                                 <h2 class="mb-0">Company Projects</h2>

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
                               <p class="text-50 mb-0 d-flex align-items-center pr-1">
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



                         <div class="page-separator">
                             <div class="page-separator__text">Overview</div>
                         </div>

                         <!--Porojects Overview-->
                         <div class="alert alert-soft-warning mb-lg-32pt">
                             <div class="d-flex flex-wrap align-items-start">
                                 <div class="mr-8pt">
                                     <i class="material-icons">access_time</i>
                                 </div>
                                 <div class="flex"
                                      style="min-width: 180px">
                                     <small class="text-100">
                                         <strong>Important Alert !</strong><br>
                                         @if($closest)
                                         <span>UPCOMING DEADLINE : {{$closest->title}}, <a href="project-details/{{$closest->id}}"> CLICK HERE </a></span>
                                         @else
                                         <span>UPCOMING DEADLINE : None, <a href=""> </a></span>
                                         @endif

                                     </small>
                                 </div>
                             </div>
                         </div>

                         <div class="row card-group-row mb-lg-8pt">
                             <div class="col-lg-6 card-group-row__col">

                                 <div class="card card-group-row__card">
                                     <div class="card-header d-flex">
                                         <div class="flex row">
                                             <div class="col-auto d-flex flex-column">
                                                 <div class="h2 mb-0">{{$projects->count()+ $archive->count()}}</div>
                                                 <p class="mb-0"><strong>Projects</strong></p>
                                             </div>
                                             <div class="col-auto border-left d-flex flex-column">
                                                 <div class="h2 mb-0">{{$projects->count()}}</div>
                                                 <p class="mb-0"><strong>Active</strong></p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body d-flex flex-column justify-content-center">

                                       @foreach($closest2 as $close)
                                         <div class="mb-8pt">
                                             <p class="d-flex align-items-center mb-4pt">
                                                 <small class="flex lh-24pt"><strong>{{$close->title}}</strong></small>
                                                 <small class="text-50 lh-24pt">{{(new Carbon\Carbon($close->dueOn))->diffForHumans()}}</small>
                                             </p>

                                             <div class="progress"
                                                  style="height: 4px;">
                                                 <div class="progress-bar bg-info"
                                                      role="progressbar"
                                                      style="width: 100%;"
                                                      aria-valuenow="20"
                                                      aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                             </div>
                                         </div>
                                         @endforeach



                                     </div>
                                 </div>

                             </div>
                             <div class="col-lg-6 card-group-row__col">

                                 <div class="card card-group-row__card">
                                     <div class="card-header d-flex">
                                         <div class="flex d-flex align-items-center">
                                             <div class="h2 mb-0 mr-3">{{$supervisers->count()}}</div>
                                             <div class="d-flex flex-column">
                                                 <p class="mb-0"><strong>Team Leaders</strong></p>
                                                 <small class="text-50">Feel free to contact</small>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="list-group list-group-flush">
                                       @foreach($supervisers as $superviser)
                                         <div class="list-group-item p-16pt">
                                             <div class="d-flex align-items-center"
                                                  style="white-space: nowrap;">

                                                 <div class="avatar avatar-32pt mr-8pt">

                                                     <img src="{{asset(Storage::url($superviser->image))}}"
                                                          alt="Avatar"
                                                          class="avatar-img rounded-circle">

                                                 </div>

                                                 <div class="flex ml-4pt">
                                                     <div class="d-flex flex-column">
                                                         <p class="mb-0"><strong>{{$superviser->name}}</strong></p>
                                                         <small class="text-50">{{$superviser->role}}</small>
                                                     </div>
                                                 </div>
                                                 <a href="/compose-email/{{$superviser->id}}"><i class="material-icons text-20 icon-16pt">email</i></a>
                                             </div>
                                         </div>
                                         @endforeach

                                     </div>
                                 </div>

                             </div>


                         </div>


                         <div class="page-separator">
                           <div class="page-separator__text">Active Projects</div>
                       </div>



                       <div class="card dashboard-area-tabs mb-32pt" id="project_details">

                           <div class="card-body table--elevated">
                             <form class="" action="{{route('searchActiveProjects')}}" method="get">
                               @csrf
                               <div class="form-group m-0"
                                    role="group"
                                    aria-labelledby="label-title">
                                   <div class="form-row align-items-center">
                                       <div class="row no-gutters"
                                       role="tablist">
                                      <div class="col-auto">
                                          <span
                                             data-toggle="tab"
                                             role="tab"
                                             aria-selected="true"
                                             class=" card-body d-flex flex-row align-items-center justify-content-start">
                                              <span class="h1 mb-0 mr-3">{{$projects->count()}}</span>
                                              <span class="flex d-flex flex-column">
                                                  <strong>Active</strong>
                                                  <small class="text-50">Ongoing Projects</small>
                                              </span>
                                              </span>
                                      </div>
                                  </div>

                                       <div class="col-md-8">
                                           <input id="title"
                                                  type="text"
                                                  placeholder="Project Name ..."
                                                  name="search"
                                                  class="form-control"
                                                  >
                                       </div>
                                       <div class="d-inline-flex align-items-center">
                                           <button type="submit"
                                              class="btn btn-sm btn-outline-secondary mr-16pt">Search  <i class="icon--right material-icons">keyboard_arrow_right</i></button>

                                       </div>
                                     </form>
                                   </div>
                               </div>
                           </div>



                           <div class="table-responsive"
                                data-toggle="lists"
                                data-lists-sort-by="js-lists-values-date"
                                data-lists-sort-desc="true"
                                data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>

                               <table class="table mb-0 thead-border-top-0 table-nowrap">
                                   <thead>
                                       <tr>

                                           <th style="width: 18px;"
                                               class="pr-0">

                                           </th>

                                           <th style="width: 150px;">
                                               Project
                                           </th>

                                           <th>
                                              Leader
                                           </th>

                                           <th style="width: 48px;">
                                              Status
                                           </th>
                                           @if(Auth::user()->role <> 'employee')
                                           <th style="width: 48px;">
                                              Budget
                                           </th>
                                           @endif
                                           <th style="width: 48px;">
                                              Due
                                           </th>
                                           <th style="width: 24px;"></th>
                                       </tr>
                                   </thead>
                                   <tbody class="list"
                                          id="projects">

                                          @foreach($projects as $project)
                                       <tr>
                                         <form class="" action="{{route('activecheked')}}" method="post" enctype="multipart/form-data">
                                           @csrf
                                           <td class="pr-0">
                                               <div class="custom-control custom-checkbox">
                                                   <input type="checkbox"
                                                          class="custom-control-input js-check-selected-row"
                                                          name="doneCheck[]"
                                                          value="{{$project->id}}"
                                                          id="customCheck1_{{$j}}">
                                                   <label class="custom-control-label"
                                                          for="customCheck1_{{$j++}}"><span class="text-hide">Check</span></label>
                                               </div>
                                           </td>

                                           <td>

                                               <div class="media flex-nowrap align-items-center"
                                                    style="white-space: nowrap;">

                                                   <div class="media-body">
                                                       <div class="d-flex flex-column">
                                                           <small class="js-lists-values-project"><strong><a href="project-details/{{$project->id}}">{{$project->title}}</a> </strong></small>
                                                           <small class="js-lists-values-location text-50"></small>
                                                       </div>
                                                   </div>
                                               </div>

                                           </td>

                                           <td>

                                               <div class="media flex-nowrap align-items-center"
                                                    style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <img src="{{asset(storage::url($project->creater->image))}}"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                   <div class="media-body">

                                                       <div class="d-flex align-items-center">
                                                           <div class="flex d-flex flex-column">
                                                               <p class="mb-0"><strong class="js-lists-values-lead">{{$project->creater->name}}</strong></p>
                                                               <small class="js-lists-values-email text-50">{{$project->creater->job}}</small>
                                                           </div>
                                                       </div>

                                                   </div>
                                               </div>

                                           </td>

                                           <td>
                                               <div class="d-flex flex-column">
                                                   <small class="js-lists-values-status text-50 mb-4pt">In Progress</small>
                                                   <span class="indicator-line rounded bg-warning"></span>
                                               </div>
                                           </td>
                                           @if(Auth::user()->role <> 'employee')
                                           <td>
                                               <div class="d-flex flex-column">
                                                   <small class="js-lists-values-budget"><strong>&dollar;{{$project->budget}}</strong></small>
                                                   <small class="text-50">Invoice Sent</small>
                                               </div>
                                           </td>
                                           @endif

                                           <td>
                                               <div class="d-flex flex-column">
                                                   <small class="js-lists-values-date"><strong>{{$project->dueOn}}</strong></small>
                                                   <small class="text-50">{{(new Carbon\Carbon($project->dueOn))->diffForHumans()}}</small>
                                               </div>
                                           </td>
                                            @if(Auth::user()->role <> 'employee')
                                           <td class="text-right">
                                               <a href="#"
                                               class="nav-link d-flex align-items-center dropdown-toggle"
                                               data-toggle="dropdown"
                                               data-caret="false">
                                               <i class="material-icons text-50">more_vert</i></a>
                                               <div class="dropdown-menu dropdown-menu dropdown-menu-caret-center">
                                                   <a class="dropdown-item"
                                                      href="/editProject/{{$project->id}}">Edit</a>
                                                   <a class="dropdown-item"
                                                      href="/deleteProject/{{$project->id}}">Delete</a>
                                           </td>
                                           @endif
                                       </tr>
                                       @endforeach

                                   </tbody>
                               </table>
                           </div>

                           <div class="card-footer p-8pt">

                               <ul class="pagination justify-content-start pagination-xsm m-0">
                                   <li class="page-item">
                                       <a class="page-link"
                                          href="{{$projects->previousPageUrl()}}"
                                          aria-label="Previous">
                                           <span aria-hidden="true"
                                                 class="material-icons">chevron_left</span>
                                           <span>Prev</span>
                                       </a>
                                   </li>
                                   <li class="page-item dropdown">
                                       <a class="page-link dropdown-toggle"
                                          data-toggle="dropdown"
                                          href="#"
                                          aria-label="Page">
                                        <span>{{$projects->currentPage()}}</span>
                                       </a>
                                       <div class="dropdown-menu">
                                            {{ $projects-> links() }}
                                       </div>
                                   </li>
                                   <li class="page-item">
                                       <a class="page-link"
                                       href="{{$projects->nextPageUrl()}}"
                                          aria-label="Next">
                                           <span>Next</span>
                                           <span aria-hidden="true"
                                                 class="material-icons">chevron_right</span>
                                       </a>
                                   </li>
                                   <div class="col-auto border-left" style="margin-left: auto">
                                       <button class="btn btn-accent" type="submit">Done</button>
                                   </div>
                                 </form>
                               </ul>

                           </div>

                       </div>

                       <div class="page-separator">
                           <div class="page-separator__text">Archived Projects</div>
                       </div>

                       <div class="card dashboard-area-tabs mb-32pt" id="project_details">

                           <div class="card-body table--elevated">
                             <form class="" action="{{route('searchArchiveProjects')}}" method="get">
                               @csrf
                               <div class="form-group m-0"
                                    role="group"
                                    aria-labelledby="label-title">
                                   <div class="form-row align-items-center">
                                       <div class="row no-gutters"
                                       role="tablist">
                                      <div class="col-auto">
                                          <span
                                             data-toggle="tab"
                                             role="tab"
                                             aria-selected="true"
                                             class=" card-body d-flex flex-row align-items-center justify-content-start">
                                              <span class="h1 mb-0 mr-3">{{$archive->count()}}</span>
                                              <span class="flex d-flex flex-column">
                                                  <strong>Archived</strong>
                                                  <small class="text-50">past Projects</small>
                                              </span>
                                              </span>
                                      </div>
                                  </div>
                                       <div class="col-md-8">
                                           <input id="title"
                                                  type="text"
                                                  placeholder="Project Name ..."
                                                  name="search"
                                                  class="form-control"
                                                  >
                                       </div>
                                       <div class="d-inline-flex align-items-center">
                                           <button
                                              class="btn btn-sm btn-outline-secondary mr-16pt">Search  <i class="icon--right material-icons">keyboard_arrow_right</i></button>

                                       </div>
                                     </form>
                                   </div>
                               </div>
                           </div>



                           <div class="table-responsive"
                                data-toggle="lists"
                                data-lists-sort-by="js-lists-values-date"
                                data-lists-sort-desc="true"
                                data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>

                               <table class="table mb-0 thead-border-top-0 table-nowrap">
                                   <thead>
                                       <tr>



                                           <th style="width: 150px;">
                                              Project
                                           </th>

                                           <th>
                                              Leader
                                           </th>

                                           <th style="width: 48px;">
                                              Status
                                           </th>
                                           @if(Auth::user()->role <> 'employee')
                                           <th style="width: 48px;">
                                              Budget
                                           </th>
                                           @endif

                                           <th style="width: 48px;">
                                              Due
                                           </th>
                                           <th style="width: 24px;"></th>
                                       </tr>
                                   </thead>
                                   <tbody class="list"
                                          id="projects">
                                          @foreach($archive as $archiv)
                                       <tr>
                                           <td>

                                               <div class="media flex-nowrap align-items-center"
                                                    style="white-space: nowrap;">

                                                   <div class="media-body">
                                                       <div class="d-flex flex-column">
                                                           <small class="js-lists-values-project"><strong><a href="project-details/{{$archiv->id}}">{{$archiv->title}}</a> </strong></small>
                                                           <small class="js-lists-values-location text-50"></small>
                                                       </div>
                                                   </div>
                                               </div>

                                           </td>

                                           <td>

                                               <div class="media flex-nowrap align-items-center"
                                                    style="white-space: nowrap;">
                                                     <div class="avatar avatar-32pt mr-8pt">

                                                         <img src="{{asset(Storage::url($archiv->creater->image))}}"
                                                              alt="Avatar"
                                                              class="avatar-img rounded-circle">

                                                     </div>
                                                   <div class="media-body">

                                                       <div class="d-flex align-items-center">
                                                           <div class="flex d-flex flex-column">
                                                               <p class="mb-0"><strong class="js-lists-values-lead">{{$archiv->creater->name}}</strong></p>
                                                               <small class="js-lists-values-email text-50">{{$archiv->creater->job}}</small>
                                                           </div>
                                                       </div>

                                                   </div>
                                               </div>

                                           </td>

                                           <td>
                                               <div class="d-flex flex-column">
                                                   <small class="js-lists-values-status text-50 mb-4pt">Finished</small>
                                                   <span class="indicator-line rounded bg-accent"></span>
                                               </div>
                                           </td>
                                           @if(Auth::user()->role <> 'employee')
                                           <td>
                                               <div class="d-flex flex-column">
                                                   <small class="js-lists-values-budget"><strong>&dollar; {{$archiv->budget}}</strong></small>
                                                   <small class="text-50">Invoice Sent</small>
                                               </div>
                                           </td>
                                           @endif
                                           <td>
                                               <div class="d-flex flex-column">
                                                   <small class="js-lists-values-date"><strong>{{$archiv->dueOn}}</strong></small>
                                                   <small class="text-50">{{(new Carbon\Carbon($archiv->dueOn))->diffForHumans()}}</small>
                                               </div>
                                           </td>
                                            @if(Auth::user()->role <> 'employee')
                                           <td class="text-right">
                                               <a href="#"
                                               class="nav-link d-flex align-items-center dropdown-toggle"
                                               data-toggle="dropdown"
                                               data-caret="false">
                                               <i class="material-icons text-50">more_vert</i></a>
                                               <div class="dropdown-menu dropdown-menu dropdown-menu-caret-center">
                                                   <a class="dropdown-item"
                                                      href="/editProject/{{$archiv->id}}">Edit</a>
                                                   <a class="dropdown-item"
                                                      href="/deleteProject/{{$archiv->id}}">Delete</a>
                                           </td>
                                           @endif
                                       </tr>
                                       @endforeach


                                   </tbody>
                               </table>
                           </div>

                           <div class="card-footer p-8pt">

                               <ul class="pagination justify-content-start pagination-xsm m-0">
                                   <li class="page-item ">
                                       <a class="page-link"
                                          href="{{$archive->previousPageUrl()}}"
                                          aria-label="Previous">
                                           <span aria-hidden="true"
                                                 class="material-icons">chevron_left</span>
                                           <span>Prev</span>
                                       </a>
                                   </li>
                                   <li class="page-item dropdown">
                                       <a class="page-link dropdown-toggle"
                                          data-toggle="dropdown"
                                          href="#"
                                          aria-label="Page">
                                           <span>{{$archive->currentPage()}}</span>
                                       </a>
                                       <div class="dropdown-menu">
                                          {{ $archive-> links() }}
                                       </div>
                                   </li>
                                   <li class="page-item">
                                       <a class="page-link"
                                          href="{{$archive->nextPageUrl()}}"
                                          aria-label="Next">
                                           <span>Next</span>
                                           <span aria-hidden="true"
                                                 class="material-icons">chevron_right</span>
                                       </a>
                                   </li>

                               </ul>

                           </div>

                       </div>

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
                        @if(Auth::user()->role <> 'employee')
                         <div class="page-separator">
                             <div class="page-separator__text">Add New Project</div>
                         </div>
                         <form class="" action="{{route('addProject')}}" method="post" enctype="multipart/form-data">
                          @csrf
                         <div class="list-group">
                             <div class="list-group-item">
                                 <div role="group"
                                      aria-labelledby="label-question"
                                      class="m-0 form-group">
                                     <div class="form-row">
                                         <label id="label-question"
                                                for="question"
                                                class="col-md-3 col-form-label form-label">Project Title</label>
                                         <div class="col-md-9">
                                             <textarea id="question"
                                                       rows="1"
                                                       class="form-control"
                                                         name="title"
                                                       ></textarea>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="list-group-item">
                                 <div role="group"
                                      aria-labelledby="label-question"
                                      class="m-0 form-group">
                                     <div class="form-row">
                                         <label id="label-question"
                                                for="question"
                                                class="col-md-3 col-form-label form-label">Project Description</label>
                                         <div class="col-md-9">
                                             <textarea id="question"
                                                       rows="4"
                                                       class="form-control"
                                                         name="discription"
                                                       ></textarea>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="list-group-item">
                                 <div role="group"
                                      aria-labelledby="label-question"
                                      class="m-0 form-group">
                                     <div class="form-row">
                                         <label id="label-question"
                                                for="question"
                                                class="col-md-3 col-form-label form-label">Budget</label>
                                         <div class="col-md-9">
                                             <textarea id="question"
                                                       rows="1"
                                                       class="form-control"
                                                         name="budget"
                                                       ></textarea>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="list-group-item">
                                 <div role="group"
                                      aria-labelledby="label-question"
                                      class="m-0 form-group">
                                     <div class="form-row">
                                         <label id="label-question"
                                                for="question"
                                                class="col-md-3 col-form-label form-label">Due to</label>
                                         <div class="col-md-9">
                                             <input type="date" name="dueOn">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="list-group-item">
                                 <div class="form-group m-0"
                                      role="group"
                                      aria-labelledby="label-topic">
                                     <div class="form-row align-items-center">
                                         <label id="label-topic"
                                                for="topic"
                                                class="col-md-3 col-form-label form-label">Upload file</label>
                                                <div class="d-inline-flex align-items-center">
                                                  <input type="file" name="file" class="form-label ml-1">
                                                 <!-- <a class="btn btn-sm btn-outline-secondary mr-16pt" name="file">Upload File <i class="icon--right material-icons">keyboard_arrow_up</i></a> -->

                                             </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="list-group-item">
                                 <div class="form-group m-0"
                                      role="group"
                                      aria-labelledby="label-topic">
                                     <div class="form-row align-items-center">
                                         <label id="label-topic"
                                                for="topic"
                                                class="col-md-3 col-form-label form-label">Project Team</label>
                                                <div class="col-9">
                                                    <select class="contributors form-control multiple-select" name="contributors[]" multiple="multiple">
                                                      @foreach($users as $user)
                                                      <option value="{{$user->id}}">{{$user->name}}</option>
                                                      @endforeach
                                                    </select>

                                             </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="list-group-item">
                                 <button type="submit"
                                         class="btn btn-accent">Post Project</button>
                             </div>
                         </div>
                         </form>
                         @endif



                         <div class="row">
                             <div class="col-lg-8">

                                 <div class="page-separator">
                                     <div class="page-separator__text">ADS PANNEL</div>
                                 </div>

                                 <div class="card mb-lg-0">
                                     <div class="card-header d-flex align-items-center">
                                         <strong class="flex">Paid Ads</strong>

                                     </div>
                                     <div class="progress rounded-0"
                                          style="height: 4px;">
                                         <div class="progress-bar bg-primary"
                                              role="progressbar"
                                              style="width: 40%;"
                                              aria-valuenow="40"
                                              aria-valuemin="0"
                                              aria-valuemax="100"></div>
                                     </div>
                                     <div class="card-body">
                                         <div>
                                             <a href="discussion.html"><img src="{{asset('assets/images/quickers.jpg')}}" alt="Project Details"
                                                 style="width: 100%; height: auto;"  ></a>

                                         </div>

                                     </div>

                                 </div>

                             </div>
                             <div class="col-lg-4">

                                 <div class="page-separator">
                                     <div class="page-separator__text">Ads Pannel</div>
                                 </div>

                                 <div class="card mb-lg-0">
                                     <div class="card-header d-flex align-items-center">
                                         <strong class="flex">Paid Ads</strong>
                                     </div>
                                     <div class="progress rounded-0"
                                          style="height: 4px;">
                                         <div class="progress-bar bg-accent"
                                              role="progressbar"
                                              style="width: 40%;"
                                              aria-valuenow="40"
                                              aria-valuemin="0"
                                              aria-valuemax="100"></div>
                                     </div>
                                     <div class="list-group list-group-flush">



                                         <div class="list-group-item p-16pt">


                                                 <a href="https:www.google.com"><img src="{{asset('assets/images/ads.jpg')}}" alt="Paid Ad"
                                                    style="width: 100%; height: auto; "
                                                      ></a>



                                                 </div>

                                             </div>
                                         </div>

                                     </div>
                                 </div>

                             </div>
                         </div>

                     </div>
                 </div>


                 <div class="js-fix-footer footer border-top-2">
                     <div class="container-fluid page__container page-section d-flex flex-column">
                         <p class="text-70 brand mb-24pt">
                             <img class="brand-icon"
                                  src="assets/images/logo/logo.png"
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
                                                class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png"
                                                      width="24"
                                                      height="24"
                                                      alt="Facebook"></a>

                                              <a href="https://www.youtube.com/channel/UCKNlvCnoC8tEJDId3d9QelA" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png"
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

                         <!-- Navbar toggler -->
                         <a href="compact-projects.html"
                            class="navbar-toggler navbar-toggler-right navbar-toggler-custom d-flex align-items-center justify-content-center position-absolute right-0 top-0"
                            data-toggle="tooltip"
                            data-title="Switch to Compact Vertical Layout"
                            data-placement="right"
                            data-boundary="window">
                             <span class="material-icons">sync_alt</span>
                         </a>

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
                                     <span class="text-black-100">Laza Bogdan</span>
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
                                 <div class="dropdown-divider"></div>
                                 <div class="dropdown-header"><strong>Select company</strong></div>
                                 <a href=""
                                    class="dropdown-item active d-flex align-items-center">

                                     <div class="avatar avatar-sm mr-8pt">

                                         <span class="avatar-title rounded bg-primary">FM</span>

                                     </div>

                                     <small class="ml-4pt flex">
                                         <span class="d-flex flex-column">
                                             <strong class="text-black-100">FrontendMatter Inc.</strong>
                                             <span class="text-black-50">Administrator</span>
                                         </span>
                                     </small>
                                 </a>
                                 <a href=""
                                    class="dropdown-item d-flex align-items-center">

                                     <div class="avatar avatar-sm mr-8pt">

                                         <span class="avatar-title rounded bg-accent">HH</span>

                                     </div>

                                     <small class="ml-4pt flex">
                                         <span class="d-flex flex-column">
                                             <strong class="text-black-100">HumaHuma Inc.</strong>
                                             <span class="text-black-50">Publisher</span>
                                         </span>
                                     </small>
                                 </a>
                             </div>
                         </div>

                         <form action="index.html"
                               class="search-form flex-shrink-0 search-form--black sidebar-m-b sidebar-p-l mx-16pt pr-0">
                             <input type="text"
                                    class="form-control pl-0"
                                    placeholder="Search">
                             <button class="btn"
                                     type="submit"><i class="material-icons">search</i></button>
                         </form>

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
                                     <!-- <li class="sidebar-menu-item">
   <a class="sidebar-menu-button disabled" href="task-details.html">
     <span class="sidebar-menu-text">Task Details</span>
   </a>
 </li>
 <li class="sidebar-menu-item">
   <a class="sidebar-menu-button disabled" href="team-members.html">
     <span class="sidebar-menu-text">Team Members</span>
   </a>
 </li> -->
                                 </ul>
                             </li>

                             <!-- <li class="sidebar-menu-item">
           <a class="sidebar-menu-button" data-toggle="collapse" href="#marketplace_menu">
             <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assessment</span>
             Marketplace
             <span class="ml-auto sidebar-menu-toggle-icon"></span>
           </a>
           <ul class="sidebar-submenu collapse sm-indent" id="marketplace_menu">
             <li class="sidebar-menu-item">
   <a class="sidebar-menu-button disabled" href="digital-product.html">
     <span class="sidebar-menu-text">Digital Product</span>
   </a>
 </li>
           </ul>
         </li> -->
                             <!-- <li class="sidebar-menu-item">
           <a class="sidebar-menu-button" data-toggle="collapse" href="#education_menu">
             <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
             Education
             <span class="ml-auto sidebar-menu-toggle-icon"></span>
           </a>
           <ul class="sidebar-submenu collapse sm-indent" id="education_menu">

           </ul>
         </li> -->

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
                                            href="email.html">
                                             <span class="sidebar-menu-text">Email</span>
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                         </ul>
     </body>
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
                       <a href="index.html"
                          class="navbar-brand mr-16pt d-lg-none">
                           <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                                src="assets/images/logo/logo.png"
                                width="32"
                                alt="Deadline">
                       </a>

                       <!-- <button class="btn navbar-btn mr-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->


                       <div class="flex" ></div>

                       <div class="nav navbar-nav flex-nowrap d-none d-lg-flex mr-16pt"
                            style="white-space: nowrap;">
                           <div class="nav-item dropdown d-none d-sm-flex" >
                               <a href="#" hidden
                                  class="nav-link dropdown-toggle"
                                  data-toggle="dropdown">EN</a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <div class="dropdown-header"><strong>Select language</strong></div>
                                   <a class="dropdown-item active"
                                      href="">English</a>
                                   <a class="dropdown-item"
                                      href="">French</a>
                                       <a class="dropdown-item"
                                      href="">Romanian</a>
                                   <a class="dropdown-item"
                                      href="">Spanish</a>
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
                                        src="assets/images/people/50/guy-3.jpg"
                                        alt="account" />
                                   <span class="flex d-flex flex-column mr-8pt">
                                       <span class="navbar-text-100">Laza Bogdan</span>
                                       <small class="navbar-text-50">Administrator</small>
                                   </span>
                               </a>
                               <div class="dropdown-menu dropdown-menu-right">
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

                           <!-- Notifications dropdown -->
                           <div class="nav-item ml-16pt dropdown dropdown-notifications">
                               <button class="nav-link btn-flush dropdown-toggle"
                                       type="button"
                                       data-toggle="dropdown"
                                       data-dropdown-disable-document-scroll
                                       data-caret="false">
                                   <i class="material-icons">notifications</i>
                                   <span class="badge badge-notifications badge-accent">2</span>
                               </button>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <div data-perfect-scrollbar
                                        class="position-relative">
                                       <div class="dropdown-header"><strong>System notifications</strong></div>
                                       <div class="list-group list-group-flush mb-0">

                                           <a href="javascript:void(0);"
                                              class="list-group-item list-group-item-action unread">
                                               <span class="d-flex align-items-center mb-1">
                                                   <small class="text-black-50">3 minutes ago</small>

                                                   <span class="ml-auto unread-indicator bg-accent"></span>

                                               </span>
                                               <span class="d-flex">
                                                   <span class="avatar avatar-xs mr-2">
                                                       <span class="avatar-title rounded-circle bg-light">
                                                           <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                       </span>
                                                   </span>
                                                   <span class="flex d-flex flex-column">

                                                       <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                   </span>
                                               </span>
                                           </a>

                                           <a href="javascript:void(0);"
                                              class="list-group-item list-group-item-action">
                                               <span class="d-flex align-items-center mb-1">
                                                   <small class="text-black-50">5 hours ago</small>

                                               </span>
                                               <span class="d-flex">
                                                   <span class="avatar avatar-xs mr-2">
                                                       <span class="avatar-title rounded-circle bg-light">
                                                           <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                       </span>
                                                   </span>
                                                   <span class="flex d-flex flex-column">
                                                       <strong class="text-black-100">Adrian. D</strong>
                                                       <span class="text-black-70">Wants to join your private group.</span>
                                                   </span>
                                               </span>
                                           </a>

                                           <a href="javascript:void(0);"
                                              class="list-group-item list-group-item-action">
                                               <span class="d-flex align-items-center mb-1">
                                                   <small class="text-black-50">1 day ago</small>

                                               </span>
                                               <span class="d-flex">
                                                   <span class="avatar avatar-xs mr-2">
                                                       <span class="avatar-title rounded-circle bg-light">
                                                           <i class="material-icons font-size-16pt text-warning">storage</i>
                                                       </span>
                                                   </span>
                                                   <span class="flex d-flex flex-column">

                                                       <span class="text-black-70">Your deploy was successful.</span>
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

                                           <a href="javascript:void(0);"
                                              class="list-group-item list-group-item-action unread">
                                               <span class="d-flex align-items-center mb-1">
                                                   <small class="text-black-50">5 minutes ago</small>

                                                   <span class="ml-auto unread-indicator bg-accent"></span>

                                               </span>
                                               <span class="d-flex">
                                                   <span class="avatar avatar-xs mr-2">
                                                       <img src="assets/images/people/110/woman-5.jpg"
                                                            alt="people"
                                                            class="avatar-img rounded-circle">
                                                   </span>
                                                   <span class="flex d-flex flex-column">
                                                       <strong class="text-black-100">Michelle</strong>
                                                       <span class="text-black-70">Clients loved the new design.</span>
                                                   </span>
                                               </span>
                                           </a>

                                           <a href="javascript:void(0);"
                                              class="list-group-item list-group-item-action">
                                               <span class="d-flex align-items-center mb-1">
                                                   <small class="text-black-50">5 minutes ago</small>

                                               </span>
                                               <span class="d-flex">
                                                   <span class="avatar avatar-xs mr-2">
                                                       <img src="assets/images/people/110/woman-5.jpg"
                                                            alt="people"
                                                            class="avatar-img rounded-circle">
                                                   </span>
                                                   <span class="flex d-flex flex-column">
                                                       <strong class="text-black-100">Michelle</strong>
                                                       <span class="text-black-70">🔥 Superb job..</span>
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
                                <h2 class="mb-0">Company Projects</h2>

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
                              <h6 class="m-0">&dollar;12.3k</h6>
                              <p class="text-50 mb-0 d-flex align-items-center">
                                  Date and time
                              </p>
                          </div>

                          </div>

                           <div class="row"
                                role="tablist">
                               <div class="col-auto border-left" style="margin-left: 12px;">
                                   <a href="faq.html"
                                      class="btn btn-accent">Remind Me</a>
                               </div>
                           </div>

                       </div>
                   </div>

                <!-- // END Header -->



                <div class="container-fluid page__container">
                    <div class="page-section">

                        <div class="page-separator">
                            <div class="page-separator__text">Overview</div>
                        </div>

                        <!--Porojects Overview-->


                        <div class="row mb-lg-8pt">
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header card-header-tabs-basic nav justify-content-center"
                                         role="tablist">
                                        <div data-toggle="chart"
                                             data-target="#locationDoughnutChart"
                                             data-update='{"data":{
                "labels": ["United States", "United Kingdom", "Germany"],
                "datasets": [{"label": "Traffic", "data":[25,25,15]}]
              }}'>
                                            <a href="#project_details">
                                                Traffic
                                            </a>
                                        </div>

                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center"
                                         style="height: 220px;">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="position-relative"
                                                     style="height: calc(220px - 1rem * 2);">
                                                    <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <h3 class="mb-0">38%</h3>
                                                        <small class="text-uppercase">Projects</small>
                                                    </div>
                                                    <canvas class="chart-canvas"
                                                            id="locationDoughnutChart"
                                                            data-chart-legend="#locationDoughnutChartLegend"
                                                            data-chart-line-background-color="teal;primary;gray"
                                                            data-chart-suffix="%">
                                                        <span style="font-size: 1rem;"
                                                              class="text-muted"><strong>Location</strong> doughnut chart goes here.</span>
                                                    </canvas>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div id="locationDoughnutChartLegend"
                                                     class="chart-legend chart-legend--vertical"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card dashboard-area-tabs"
                                     id="dashboard-area-tabs">
                                    <div class="card-header p-0 nav">
                                        <div class="row no-gutters flex"
                                             role="tablist">
                                            <div class="col"
                                                 data-toggle="chart"
                                                 data-target="#earningsTrafficChart"
                                                 data-update='{"data":{"datasets":[{"label": "Traffic", "data":[10,2,5,15,10,12,15,25,22,30,25,40]}]}}'
                                                 data-prefix=""
                                                 data-suffix="k">
                                                <a href="#"
                                                   data-toggle="tab"
                                                   role="tab"
                                                   aria-selected="true"
                                                   class="dashboard-area-tabs__tab card-body text-center active">
                                                    <span class="font-weight-bold">Sessions</span>
                                                    <span class="h2 mb-0 mt-n1">18.3k</span>
                                                </a>
                                            </div>
                                            <div class="col border-left"
                                                 data-toggle="chart"
                                                 data-target="#earningsTrafficChart"
                                                 data-update='{"data":{"datasets":[{"label": "Earnings", "data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'
                                                 data-prefix="$"
                                                 data-suffix="k">
                                                <a href="#"
                                                   data-toggle="tab"
                                                   role="tab"
                                                   aria-selected="false"
                                                   class="dashboard-area-tabs__tab card-body text-center">
                                                    <span class="font-weight-bold">Orders</span>
                                                    <span class="h2 mb-0 mt-n1">&dollar;8.9k</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-muted">
                                        <div id="earningsTrafficChartLegend"
                                             class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                                        <div class="chart"
                                             style="height: calc(240px - 1rem * 2);">
                                            <canvas class="chart-canvas js-update-chart-line"
                                                    id="earningsTrafficChart"
                                                    data-chart-suffix="k"
                                                    data-chart-legend="#earningsTrafficChartLegend">
                                                <span style="font-size: 1rem;"><strong>Website Traffic / Earnings</strong> area chart goes here.</span>
                                            </canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header p-0 nav">
                                        <div class="row no-gutters flex"
                                             role="tablist">
                                            <div class="col-auto">
                                                <div class="p-card-header">
                                                    <p class="mb-0"><strong>Revenue</strong></p>
                                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                        &dollar;203k
                                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-auto border-left">
                                                <div class="p-card-header">
                                                    <p class="mb-0"><strong>Employees</strong></p>
                                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                        264
                                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-auto ml-sm-auto">
                                                <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="vector-map-revenue"
                                             class="map mb-3"
                                             style="height: 328px;"
                                             data-toggle="vector-map"
                                             data-vector-map-map="world_en"
                                             data-vector-map-show-tooltip="false"
                                             data-vector-map-enable-zoom="true"
                                             data-vector-map-scale="1.1"
                                             data-vector-map-pins='{
                "it": "<div class=\"map-pin blue\"><span>Vatican City</span></div>",
                "us": "<div class=\"map-pin blue\"><span>New York</span></div>",
                "au": "<div class=\"map-pin blue\"><span>Sydney</span></div>"
              }'>
                                        </div>

                                        <div class="alert alert-soft-warning">
                                            <div class="d-flex flex-wrap align-items-start">
                                                <div class="mr-8pt">
                                                    <i class="material-icons">access_time</i>
                                                </div>
                                                <div class="flex"
                                                     style="min-width: 180px">
                                                    <small class="text-100">
                                                        <strong>You have to finish </strong> before the deadline !
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled dashboard-location-tabs nav flex-column m-0"
                                            role="tablist">
                                            <li data-toggle="vector-map-focus"
                                                data-target="#vector-map-revenue"
                                                data-focus="us"
                                                data-animate="true">
                                                <div class="dashboard-location-tabs__tab active"
                                                     data-toggle="tab"
                                                     role="tab"
                                                     aria-selected="true">
                                                    <div><strong>New York</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress"
                                                                 style="height: 4px;">
                                                                <div class="progress-bar"
                                                                     role="progressbar"
                                                                     style="width: 72%;"
                                                                     aria-valuenow="72"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>72k</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-toggle="vector-map-focus"
                                                data-target="#vector-map-revenue"
                                                data-focus="it"
                                                data-animate="true">
                                                <div class="dashboard-location-tabs__tab"
                                                     data-toggle="tab"
                                                     role="tab"
                                                     aria-selected="true">
                                                    <div><strong>Vatican City</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress"
                                                                 style="height: 4px;">
                                                                <div class="progress-bar bg-primary"
                                                                     role="progressbar"
                                                                     style="width: 39%;"
                                                                     aria-valuenow="39"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>39k</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-toggle="vector-map-focus"
                                                data-target="#vector-map-revenue"
                                                data-focus="au"
                                                data-animate="true">
                                                <div class="dashboard-location-tabs__tab"
                                                     data-toggle="tab"
                                                     role="tab"
                                                     aria-selected="true">
                                                    <div><strong>Sydney</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress"
                                                                 style="height: 4px;">
                                                                <div class="progress-bar bg-primary"
                                                                     role="progressbar"
                                                                     style="width: 25%;"
                                                                     aria-valuenow="25"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>25k</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="page-separator">
                            <div class="page-separator__text">Projects</div>
                        </div>

                        <div class="card dashboard-area-tabs mb-32pt" id="project_details">
                            <div class="card-header p-0 nav">
                                <div class="row no-gutters"
                                     role="tablist">
                                    <div class="col-auto">
                                        <a href="#"
                                           data-toggle="tab"
                                           role="tab"
                                           aria-selected="true"
                                           class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                            <span class="h2 mb-0 mr-3">3</span>
                                            <span class="flex d-flex flex-column">
                                                <strong>Active</strong>
                                                <small class="text-50">Ongoing Projects</small>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-auto border-left border-right">
                                        <a href="#"
                                           data-toggle="tab"
                                           role="tab"
                                           aria-selected="false"
                                           class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                            <span class="h2 mb-0 mr-3">2</span>
                                            <span class="flex d-flex flex-column">
                                                <strong>Archived</strong>
                                                <small class="text-50">Past Projects</small>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive"
                                 data-toggle="lists"
                                 data-lists-sort-by="js-lists-values-date"
                                 data-lists-sort-desc="true"
                                 data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>

                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>

                                            <th style="width: 18px;"
                                                class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-toggle-check-all"
                                                           data-target="#projects"
                                                           id="customCheckAll">
                                                    <label class="custom-control-label"
                                                           for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                                </div>
                                            </th>

                                            <th style="width: 150px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-project">Project</a>
                                            </th>

                                            <th>
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-lead">Lead / Team</a>
                                            </th>

                                            <th style="width: 48px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-status">Status</a>
                                            </th>

                                            <th style="width: 48px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-budget">Budget</a>
                                            </th>

                                            <th style="width: 48px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-date">Due</a>
                                            </th>
                                            <th style="width: 24px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list"
                                           id="projects">

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_1">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">
                                                        <span class="avatar-title rounded bg-primary text-white">SM</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-project"><strong>Social Media API</strong></small>
                                                            <small class="js-lists-values-location text-50">Twitter</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <span class="avatar-title rounded-circle">BN</span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong class="js-lists-values-lead">Billy Nunez</strong></p>
                                                                <small class="js-lists-values-email text-50">Quality Assurance</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-status text-50 mb-4pt">QA</small>
                                                    <span class="indicator-line rounded bg-warning"></span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-budget"><strong>&dollar;1,200</strong></small>
                                                    <small class="text-50">Invoice Sent</small>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-date"><strong>19/02/2019</strong></small>
                                                    <small class="text-50">18 days</small>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_2">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">
                                                        <span class="avatar-title rounded bg-accent text-white">PM</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-project"><strong>Project Management App</strong></small>
                                                            <small class="js-lists-values-location text-50">Github</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <span class="avatar-title rounded-circle">TP</span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong class="js-lists-values-lead">Tony Parks</strong></p>
                                                                <small class="js-lists-values-email text-50">iOS Development</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-status text-50 mb-4pt">Finished</small>
                                                    <span class="indicator-line rounded bg-accent"></span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-budget"><strong>&dollar;12,500</strong></small>
                                                    <small class="text-50">Paid</small>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-date"><strong>18/02/2019</strong></small>
                                                    <small class="text-danger">Overdue</small>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_3">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_3"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">
                                                        <span class="avatar-title rounded bg-warning text-white">AD</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-project"><strong>Advertising Platform</strong></small>
                                                            <small class="js-lists-values-location text-50">Facebook</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <img src="assets/images/people/110/guy-1.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong class="js-lists-values-lead">Gilbert Barrett</strong></p>
                                                                <small class="js-lists-values-email text-50">Marketing</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-status text-50 mb-4pt">Finished</small>
                                                    <span class="indicator-line rounded bg-accent"></span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-budget"><strong>&dollar;7,100</strong></small>
                                                    <small class="text-50">Paid</small>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-date"><strong>17/02/2019</strong></small>
                                                    <small class="text-50">15 days</small>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_4">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_4"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">
                                                        <span class="avatar-title rounded bg-light text-black-100">FD</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-project"><strong>Frontend Development</strong></small>
                                                            <small class="js-lists-values-location text-50">Trello</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <img src="assets/images/people/110/guy-2.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong class="js-lists-values-lead">Ollie Wallace</strong></p>
                                                                <small class="js-lists-values-email text-50">Design</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-status text-50 mb-4pt">Designing</small>
                                                    <span class="indicator-line rounded bg-primary"></span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-budget"><strong>&dollar;4,200</strong></small>
                                                    <small class="text-50">Paid</small>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-date"><strong>16/02/2019</strong></small>
                                                    <small class="text-50">15 days</small>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr class="selected">

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           checked=""
                                                           id="customCheck1_5">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_5"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">
                                                        <span class="avatar-title rounded bg-light text-black-100">DU</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-project"><strong>Database Upgrade</strong></small>
                                                            <small class="js-lists-values-location text-50">MySQL</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <img src="assets/images/people/110/guy-3.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong class="js-lists-values-lead">Ricardo Bell</strong></p>
                                                                <small class="js-lists-values-email text-50">Web Development</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-status text-50 mb-4pt">Waiting</small>
                                                    <span class="indicator-line rounded bg-danger"></span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-budget"><strong>&dollar;130</strong></small>
                                                    <small class="text-danger">Overdue</small>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-date"><strong>01/12/2018</strong></small>
                                                    <small class="text-50">1 day</small>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer p-8pt">

                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Previous">
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item dropdown">
                                        <a class="page-link dropdown-toggle"
                                           data-toggle="dropdown"
                                           href="#"
                                           aria-label="Page">
                                            <span>1</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href=""
                                               class="dropdown-item active">1</a>
                                            <a href=""
                                               class="dropdown-item">2</a>
                                            <a href=""
                                               class="dropdown-item">3</a>
                                            <a href=""
                                               class="dropdown-item">4</a>
                                            <a href=""
                                               class="dropdown-item">5</a>
                                        </div>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                    <div class="col-auto border-left" style="margin-left: 650px;">
                                        <a href="#"
                                           class="btn btn-accent">Done</a>
                                    </div>
                                </ul>

                            </div>
                            <!-- <div class="card-body bordet-top text-right">
                        15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
                      </div> -->

                        </div>

                        <div class="row">
                            <div class="col-lg-8">

                                <div class="page-separator">
                                    <div class="page-separator__text">Quick Access</div>
                                </div>

                                <div class="card mb-lg-0">
                                    <div class="card-header d-flex align-items-center">
                                        <strong class="flex">Click on the banner below</strong>

                                    </div>
                                    <div class="progress rounded-0"
                                         style="height: 4px;">
                                        <div class="progress-bar bg-primary"
                                             role="progressbar"
                                             style="width: 40%;"
                                             aria-valuenow="40"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="discussion.html"><img src="assets/images/quickers.png" alt="Project Details"
                                                 style="width:570px;"></a>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-4">

                                <div class="page-separator">
                                    <div class="page-separator__text">Ads Pannel</div>
                                </div>

                                <div class="card mb-lg-0">
                                    <div class="card-header d-flex align-items-center">
                                        <strong class="flex">Paid Ads</strong>
                                    </div>
                                    <div class="progress rounded-0"
                                         style="height: 4px;">
                                        <div class="progress-bar bg-accent"
                                             role="progressbar"
                                             style="width: 40%;"
                                             aria-valuenow="40"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <div class="list-group list-group-flush">



                                        <div class="list-group-item p-16pt">


                                                <a href="https:www.google.com"><img src="assets/images/ads.png" alt="Paid Ad"
                                                     style="width:260px;"></a>



                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="js-fix-footer footer border-top-2">
                    <div class="container-fluid page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="assets/images/logo/logo.png"
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
                                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png"
                                                     width="24"
                                                     height="24"
                                                     alt="Facebook"></a>

                                             <a href="https://www.youtube.com/channel/UCKNlvCnoC8tEJDId3d9QelA" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png"
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

        <!-- select2 CDN -->



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

        <!-- Global Settings -->
        <!-- <script src="{{asset('assets/js/settings.js')}}"></script> -->

        <!-- Moment.js -->
        <!-- <script src="{{asset('assets/vendor/moment.min.js')}}"></script> -->
        <!-- <script src="{{asset('assets/vendor/moment-range.js')}}"></script> -->

        <!-- Chart.js -->
        <!-- <script src="{{asset('assets/vendor/Chart.min.js')}}"></script> -->
        <!-- <script src="{{asset('assets/js/chartjs.js')}}"></script> -->

        <!-- Chart.js Samples -->
        <!-- <script src="{{asset('assets/js/page.projects.js')}}"></script> -->

        <!-- List.js -->
        <!-- <script src="{{asset('assets/vendor/list.min.js')}}"></script> -->
        <!-- <script src="{{asset('assets/js/list.js')}}"></script> -->

        <!-- Tables -->
        <!-- <script src="{{asset('assets/js/toggle-check-all.js')}}"></script> -->
        <!-- <script src="{{asset('assets/js/check-selected-row.js')}}"></script> -->

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
