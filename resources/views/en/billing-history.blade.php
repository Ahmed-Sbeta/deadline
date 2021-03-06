<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Billing</title>

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
                       <a href="index.html"
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
                                   <h2 class="mb-0">Welcome to your dashboard !</h2>

                                   <ol class="breadcrumb p-0 m-0">


                                       <li class="breadcrumb-item active">

                                           @User Name

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

                <div class="border-bottom-2 py-32pt position-relative z-1">
                    <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Billing</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item">

                                        <a href="">Account</a>

                                    </li>

                                    <li class="breadcrumb-item active">

                                        Billing

                                    </li>

                                </ol>

                            </div>

                            <div class="dropdown">
                                <a href=""
                                   class="border rounded d-flex align-items-center p-16pt"
                                   data-toggle="dropdown"
                                   data-caret="false">

                                    <div class="avatar avatar-sm mr-8pt">

                                        <span class="avatar-title rounded bg-primary">FM</span>

                                    </div>

                                    <small class="ml-4pt flex">
                                        <span class="d-flex align-items-center">
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-100">FrontendMatter Inc.</strong>
                                                <span class="text-50">Select company</span>
                                            </span>
                                            <i class="material-icons icon-16pt text-50 ml-4pt">arrow_drop_down</i>
                                        </span>
                                    </small>
                                </a>
                                <div class="dropdown-menu w-100">
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

                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">
                    <form action="edit-account.html">
                        <div class="row">
                            <div class="col-lg-9 pr-lg-0">

                                <div class="page-section">
                                    <h4>Payments</h4>

                                    <div class="alert alert-soft-warning mb-lg-32pt">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="mr-8pt">
                                                <i class="material-icons">access_time</i>
                                            </div>
                                            <div class="flex"
                                                 style="min-width: 180px">
                                                <small class="text-100">
                                                    Please pay your amount due of
                                                    <strong>&dollar;9.00</strong> for invoice <a href="billing-invoice.html"
                                                       class="text-underline">10002331</a>
                                                </small>
                                            </div>
                                            <a href="billing-payment.html"
                                               class="btn btn-sm btn-link">Pay Now</a>
                                        </div>
                                    </div>

                                    <div class="page-separator">
                                        <div class="page-separator__text">Payment History</div>
                                    </div>

                                    <div class="card table-responsive">
                                        <table class="table table-flush table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Invoice no.</th>
                                                    <th>Date</th>
                                                    <th class="text-center">Amount</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td><a href="billing-invoice.html"
                                                           class="text-underline">10002331</a></td>
                                                    <td>26 Sep 2018</td>
                                                    <td class="text-center">&dollar;9</td>
                                                    <td class="text-right">
                                                        <div class="d-inline-flex align-items-center">
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary mr-16pt">View invoice <i class="icon--right material-icons">keyboard_arrow_right</i></a>
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary">Download <i class="icon--right material-icons">file_download</i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="billing-invoice.html"
                                                           class="text-underline">10003815</a></td>
                                                    <td>29 Apr 2018</td>
                                                    <td class="text-center">&dollar;9</td>
                                                    <td class="text-right">
                                                        <div class="d-inline-flex align-items-center">
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary mr-16pt">View invoice <i class="icon--right material-icons">keyboard_arrow_right</i></a>
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary">Download <i class="icon--right material-icons">file_download</i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="billing-invoice.html"
                                                           class="text-underline">10007382</a></td>
                                                    <td>31 Mar 2018</td>
                                                    <td class="text-center">&dollar;9</td>
                                                    <td class="text-right">
                                                        <div class="d-inline-flex align-items-center">
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary mr-16pt">View invoice <i class="icon--right material-icons">keyboard_arrow_right</i></a>
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary">Download <i class="icon--right material-icons">file_download</i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="billing-invoice.html"
                                                           class="text-underline">10004876</a></td>
                                                    <td>30 May 2018</td>
                                                    <td class="text-center">&dollar;9</td>
                                                    <td class="text-right">
                                                        <div class="d-inline-flex align-items-center">
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary mr-16pt">View invoice <i class="icon--right material-icons">keyboard_arrow_right</i></a>
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary">Download <i class="icon--right material-icons">file_download</i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="billing-invoice.html"
                                                           class="text-underline">10009392</a></td>
                                                    <td>30 Apr 2018</td>
                                                    <td class="text-center">&dollar;9</td>
                                                    <td class="text-right">
                                                        <div class="d-inline-flex align-items-center">
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary mr-16pt">View invoice <i class="icon--right material-icons">keyboard_arrow_right</i></a>
                                                            <a href="billing-invoice.html"
                                                               class="btn btn-sm btn-outline-secondary">Download <i class="icon--right material-icons">file_download</i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3 page-nav">
                                <div class="page-section pt-lg-112pt">
                                    <nav class="nav page-nav__menu">
                                        <a class="nav-link"
                                           href="\subscription">Subscription</a>
                                        <a class="nav-link"
                                           href="\billing-upgrade">Upgrade Account</a>
                                        <a class="nav-link"
                                           href="\billing-payment">Payment Information</a>
                                        <a class="nav-link active"
                                           href="\billing-history">Payment History</a>
                                        <a class="nav-link"
                                           href="\billing-invoice">Invoice</a>
                                    </nav>
                                    <!-- <div class="page-nav__content">
            <button type="submit" class="btn btn-accent">Save changes</button>
          </div> -->
                                </div>
                            </div>
                        </div>
                    </form>
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
                                          <a class="dropdown-item"
                                             href="\subscription">Billing</a>
                                          <a class="dropdown-item"
                                             href="\billing-payment">Payments</a>
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

                                                <li class="sidebar-menu-item active">
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
        <script src="{{asset('assets/js/app-settings.js')}}"></script>
    </body>

</html>
