<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Events</title>

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



                       <!-- Navbar Brand -->
                       <a href="/"
                          class="navbar-brand mr-16pt d-lg-none">
                           <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                                src="{{asset('assets/images/logo/logo.png')}}"
                                width="32"
                                alt="Deadline">
                       </a>



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
                             <h2 class="mb-0">Events</h2>

                             <ol class="breadcrumb p-0 m-0">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                 <li class="breadcrumb-item active">

                                     Community

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

              <!--End of head-->

                <div class="container-fluid page__container">


                        <div class="row">
                            <div class="col-lg-12">


                                <div class="page-section">

                                    <div class="row mb-lg-8pt">
                                        <div class="col-lg-8">

                                            <div class="page-separator">
                                                <div class="page-separator__text">Overview</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="card ">

                                                        <div class="card-header">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex">
                                                                    <strong>Today</strong>
                                                                    <span class="text-20">({{$today->count()}})</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="list-group list-group-flush">
                                                          @foreach($today as $toda)
                                                            <div class="list-group-item d-flex align-items-start p-16pt">
                                                                <div class="d-flex flex-column mr-16pt">
                                                                    <small class="text-uppercase text-50">{{ Carbon\Carbon::now()->format('M')}}</small>
                                                                    <strong class="border-bottom-2 border-bottom-accent">{{ Carbon\Carbon::now()->format('d')}}</strong>
                                                                </div>
                                                                <div class="flex">
                                                                    <div><strong>{{$toda->title}}</strong></div>

                                                                    <div class="lh-1 mb-1"><small class="text-50">{{ Carbon\Carbon::now()->format('l')}} {{$toda->from}} - {{$toda->to}}</small></div>

                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex">
                                                                    <strong>Upcoming</strong>
                                                                    <span class="text-20">({{$upcoming->count()}})</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="list-group list-group-flush">
                                                          @foreach($upcoming as $upcom)
                                                            <div class="list-group-item d-flex align-items-start p-16pt">
                                                                <div class="d-flex flex-column mr-16pt">
                                                                    <small class="text-uppercase text-50">{{ Carbon\Carbon::parse($upcom->date)->format('M')}}</small>
                                                                    <strong class="border-bottom-2 border-bottom-accent">{{ Carbon\Carbon::parse($upcom->date)->format('d')}}</strong>
                                                                </div>
                                                                <div class="flex">
                                                                    <div><strong>{{$upcom->title}}</strong></div>

                                                                    <div class="lh-1 mb-1"><small class="text-50">{{ Carbon\Carbon::parse($upcom->date)->format('l')}} {{$upcom->from}} - {{$upcom->to}}</small></div>
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-lg-4">

                                            <div class="page-separator">
                                                <div class="page-separator__text">Birthdays</div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex">
                                                            <strong>Today</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($dob)
                                                <div class="card-body">
                                                    <div class="alert alert-soft-warning mb-0 p-8pt">
                                                        <div class="d-flex align-items-start">
                                                            <div class="mr-8pt">
                                                                <i class="material-icons">card_giftcard</i>
                                                            </div>
                                                            <div class="flex">
                                                                <small class="text-100">Take a minute and congratulate them on their special day!</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list-group list-group-flush border-top">
                                                  <div class="list-group-item p-10pt">
                                                        <div class="d-flex align-items-center"
                                                             style="white-space: nowrap;">

                                                            <div class="avatar avatar-32pt mr-8pt">

                                                                <img src="{{asset(Storage::url($dob->image))}}"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </div>
                                                            <div class="flex ml-4pt">
                                                                <div class="d-flex flex-column">
                                                                    <p class="mb-0"><strong>{{$dob->name}}</strong></p>
                                                                    <small class="text-50">{{$dob->email}}</small>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <a href=""><i class="material-icons text-20 icon-16pt">email</i></a>

                                                            @else
                                                            <div class="card-body">
                                                                <div class="alert alert-soft-warning mb-0 p-8pt">
                                                                    <div class="d-flex align-items-start">
                                                                        <div class="mr-8pt">
                                                                            <i class="material-icons">card_giftcard</i>
                                                                        </div>
                                                                        <div class="flex">
                                                                            <small class="text-100">Take a minute and congratulate them on their special day!</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="list-group list-group-flush border-top">
                                                              <div class="list-group-item p-10pt">
                                                                    <div class="d-flex align-items-center"
                                                                         style="white-space: nowrap;">

                                                                        <div class="avatar avatar-32pt mr-8pt">


                                                                        </div>
                                                                        <div class="flex ml-4pt">
                                                                            <div class="d-flex flex-column">
                                                                                <p class="mb-0"><strong>No Birthdays Today !</strong></p>
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                    <div class="card--connect pb-32pt pb-lg-64pt">

                                        <div class="page-separator">
                                            <div class="page-separator__text">Events Calendar</div>
                                        </div>

                                        <div class="card mb-lg-32pt">

                                            <div class="table-responsive"
                                                 data-toggle="lists"
                                                 data-lists-values='["js-lists-values-name"]'>

                                                <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                                    <thead>
                                                        <tr>




                                                            <th>
                                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                                    {{ Carbon\Carbon::now()->format('l')}} <small>{{ Carbon\Carbon::now()->format('d-m-Y')}}</small>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                                    {{ Carbon\Carbon::now()->addDays(1)->format('l')}} <small>{{ Carbon\Carbon::now()->addDays(1)->format('d-m-Y')}}</small>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                                    {{ Carbon\Carbon::now()->addDays(2)->format('l')}} <small>{{ Carbon\Carbon::now()->addDays(2)->format('d-m-Y')}}</small>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                                    {{ Carbon\Carbon::now()->addDays(3)->format('l')}} <small>{{ Carbon\Carbon::now()->addDays(3)->format('d-m-Y')}}</small>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                                    {{ Carbon\Carbon::now()->addDays(4)->format('l')}} <small>{{ Carbon\Carbon::now()->addDays(4)->format('d-m-Y')}}</small>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                                    {{ Carbon\Carbon::now()->addDays(5)->format('l')}} <small>{{ Carbon\Carbon::now()->addDays(5)->format('d-m-Y')}}</small>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                                    {{ Carbon\Carbon::now()->addDays(6)->format('l')}} <small>{{ Carbon\Carbon::now()->addDays(6)->format('d-m-Y')}}</small>
                                                                </div>
                                                            </th>
                                                            <th style="width: 24px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list"
                                                           id="contacts">

                                                           @foreach($events as $event)
                                                           <tr>
                                                             @for($i=0;$i < 7; $i++)
                                                           <td>
                                                             @if($event->date == Carbon\Carbon::now()->addDays($i)->format('Y-m-d'))
                                                             <span class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1">
                                                               <small><strong class="js-lists-values-name text-black-100">{{$event->title}}
                                                               </strong></small>
                                                               <small class="text-black-50">{{$event->from}} - {{$event->to}}</small>
                                                             </span>
                                                             @endif
                                                           </td>
                                                          @endfor
                                                         </tr>
                                                         @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                    @if(Auth::user()->role <> 'employee')
                                    <div class="page-separator">
                                        <div class="page-separator__text">Add New Event</div>
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
                                    <form class="" action="{{route('addevent')}}" method="post">
                                      @csrf
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <div role="group"
                                                 aria-labelledby="label-question"
                                                 class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-question"
                                                           for="question"
                                                           class="col-md-3 col-form-label form-label">Event Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text"
                                                        name="title"
                                                                  class="form-control">
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
                                                           class="col-md-3 col-form-label form-label">Date</label>
                                                    <div class="col-md-9">
                                                        <input type="date"
                                                        name="date">
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
                                                           class="col-md-3 col-form-label form-label">Time-from</label>
                                                    <div class="col-md-9">
                                                        <input type="time"
                                                        name="from">
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
                                                           class="col-md-3 col-form-label form-label">Time-to</label>
                                                    <div class="col-md-9">
                                                        <input type="time"
                                                        name="to">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="list-group-item">
                                            <button type="submit"
                                                    class="btn btn-accent">Post Event</button>
                                        </div>
                                    </div>
                                  </form>
                                  @endif
                                </div>
                            </div>

                        </div>


                    <div class="row">
                        <div class="col-lg-8">

                            <div class="page-separator">
                                <div class="page-separator__text">Ads Pannel</div>
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
                                        <a href="announcments.html"><img src="{{asset('assets/images/quickers.jpg')}}" alt="Announcments"
                                            style="width: 100%; height: auto; "></a>

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
                                                style="width: 100%; height: auto; "></a>



                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <p></p>
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
                                                @if(Auth::user()->role <> 'employee')
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="/projects">
                                                        <span class="sidebar-menu-text">Projects</span>
                                                    </a>
                                                </li>
                                                @endif
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

                                                <li class="sidebar-menu-item active">
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
        <!-- <script src="assets/js/app-settings.js"></script> -->
    </body>

</html>
