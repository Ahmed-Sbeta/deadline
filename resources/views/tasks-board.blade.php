<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tasks-board</title>

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

              <!-- select2 -->
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
                                 <a class="dropdown-item"
                                    href="\subscription">Billing</a>
                                 <a class="dropdown-item"
                                    href="\billing-history">Payments</a>
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
                             <h2 class="mb-0">Tasks Board</h2>

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
                           <h6 class="m-0">{{ Carbon\Carbon::now()->format('H:i')}}</h6>
                           <p class="text-50 mb-0 pr-1 d-flex align-items-center">
                                 {{ Carbon\Carbon::now()->toDateString()}}
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

                <div class="container-fluid page__container">
                    <div class="page-section">

                        <div class="page-separator">
                            <div class="page-separator__text">Overview</div>
                        </div>

                        <div class="row card-group-row mb-lg-8pt">
                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card">
                                    <div class="card-header py-12pt d-flex align-items-center">
                                        <div class="position-relative mr-16pt">
                                            <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                <small>14%</small>
                                            </div>
                                            <canvas width="48"
                                                    height="48"
                                                    class="chart-canvas position-relative z-1"
                                                    id="openProgressChart"
                                                    data-chart-line-background-color="yellow;gray"
                                                    data-chart-disable-tooltips="true"></canvas>
                                        </div>
                                        <strong class="flex">Open</strong>
                                        <div class="text-50">4</div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card">
                                    <div class="card-header py-12pt d-flex align-items-center">
                                        <div class="position-relative mr-16pt">
                                            <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                <small>35%</small>
                                            </div>
                                            <canvas width="48"
                                                    height="48"
                                                    class="chart-canvas position-relative z-1 js-update-chart-progress-accent"
                                                    id="inProgressChart"
                                                    data-chart-line-background-color="accent;gray"
                                                    data-chart-disable-tooltips="true"></canvas>
                                        </div>
                                        <strong class="flex">In Progress</strong>
                                        <div class="text-50">10</div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card">
                                    <div class="card-header py-12pt d-flex align-items-center">
                                        <div class="position-relative mr-16pt">
                                            <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                <small>50%</small>
                                            </div>
                                            <canvas width="48"
                                                    height="48"
                                                    class="chart-canvas position-relative z-1 js-update-chart-progress-primary"
                                                    id="closedProgressChart"
                                                    data-chart-line-background-color="primary;gray"
                                                    data-chart-disable-tooltips="true"></canvas>
                                        </div>
                                        <strong class="flex">Closed</strong>
                                        <div class="text-50">14</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">Tasks</div>
                        </div>

                        <div class="row card-group-row">
                          @foreach($tasks as $task)
                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="/task/{{$task->id}}"
                                               class="mb-8pt"><strong>{{$task->title}}</strong></a>
                                            <div class="d-flex align-items-center mb-8pt">

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">{{(new Carbon\Carbon($task->created_at))->diffForHumans()}}</small>

                                            <i class="material-icons icon-16pt text-20 mr-4pt">link</i>
                                            <small class="text-50">1</small>

                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">

                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="{{$task->worker->name}}">
                                                    <a href=""><img src="{{asset(Storage::url($task->worker->image))}}"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>

                        <div class="card p-8pt mb-0 d-inline-block">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item">
                                    <a class="page-link"
                                       href="{{$tasks->previousPageUrl()}}"
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
                                        <span>{{$tasks->currentPage()}}</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        {{ $tasks-> links() }}
                                    </div>
                                </li>
                                <li class="page-item">
                                    <a class="page-link"
                                       href="{{$tasks->nextPageUrl()}}"
                                       aria-label="Next">
                                        <span>Next</span>
                                        <span aria-hidden="true"
                                              class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <div class="page-separator">
                                            <div class="page-separator__text">Add New task</div>
                                        </div>

                                        <form class="" action="{{ route('addTask')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-question"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-question"
                                                               for="question"
                                                               class="col-md-3 col-form-label form-label">Task Title</label>
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
                                                               class="col-md-3 col-form-label form-label">Task Description</label>
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
                                                               class="col-md-3 col-form-label form-label">Related Project</label>
                                                        <div class="col-md-9">
                                                            <select name="projects" id="projects" name="project" class="col-6 col-form-label form-control">
                                                              <option value="0">select project</option>
                                                              @foreach($projects as $project)
                                                                <option value="{{$project->id}}">{{$project->title}}</option>
                                                                @endforeach
                                                              </select>
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
                                                               class="col-md-3 col-form-label form-label">Assign to</label>
                                                               <div class="col-9 ">
                                                                 <select class="contributors form-control" name="worker">
                                                                   @foreach($users as $user)
                                                                   <option value="{{$user->id}}">{{$user->name}}</option>
                                                                   @endforeach
                                                                 </select>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input id="notify"
                                                           type="checkbox"
                                                           class="custom-control-input"
                                                           checked="">
                                                    <label for="notify"
                                                           class="custom-control-label">Notify me on email when someone Download my report</label>
                                                </div>
                                                <small id="description-notify"
                                                       class="form-text text-muted">If unchecked, you'll still recieve notifications on our website.</small>
                                            </div>
                                            <div class="list-group-item">
                                                <button type="submit"
                                                        class="btn btn-accent">Post Task</button>
                                            </div>
                                        </div>
                                          </form>

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
                                        <a href="tasks-list.html"><img src="assets/images/quickers.png" alt="Project Details"
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
                        <a href="compact-index.html"
                           class="navbar-toggler navbar-toggler-right navbar-toggler-custom d-flex align-items-center justify-content-center position-absolute right-0 top-0"
                           data-toggle="tooltip"
                           data-title="Switch to Compact Vertical Layout"
                           data-placement="right"
                           data-boundary="window">
                            <span class="material-icons">sync_alt</span>
                        </a>

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
                                <a class="dropdown-item"
                                   href="\subscription">Billing</a>
                                <a class="dropdown-item"
                                   href="\billing-history">Payments</a>
                                   <a class="dropdown-item"
                                   href="{{ route('adminlogout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Logout</a>
                                   <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                            </div>
                        </div>


                        <div class="sidebar-heading">Deadlines</div>
                        <ul class="sidebar-menu">
                          <li class="sidebar-menu-item">
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
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/reports">
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
                                           href="/edit-account">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="/subscription">
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
