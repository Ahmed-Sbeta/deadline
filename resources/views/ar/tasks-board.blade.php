<!DOCTYPE html>
<html lang="en"
      dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>لوحة المهام</title>

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
              <a href="index.html"
                 class="navbar-brand mr-16pt d-lg-none">
                  <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                       src="assets/images/logo/logo.png"
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
                         data-toggle="dropdown">العربية</a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <div class="dropdown-header"><strong>Select language</strong></div>
                          <a class="dropdown-item active"
                             href="">العربية</a>
                          <a class="dropdown-item"
                             href="/مشروع التخرج/Deadline/Deadline/dist/En/tasks-board.html">EN</a>

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
                              <span class="navbar-text-100">Abdo Daeki</span>
                              <small class="navbar-text-50">Administrator</small>
                          </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <div class="dropdown-header"><strong>الحساب الشخصي</strong></div>
                          <a class="dropdown-item"
                             href="edit-account.html">تعديل الحساب</a>
                          <a class="dropdown-item"
                             href="billing.html">الإشتراك</a>
                          <a class="dropdown-item"
                             href="billing-history.html">الدفع</a>
                          <a class="dropdown-item"
                             href="login.html">خروج</a>
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
                              <div class="dropdown-header"><strong>الإشعارات</strong></div>
                              <div class="list-group list-group-flush mb-0">

                                  <a href="tasks-details.html"
                                     class="list-group-item list-group-item-action unread">
                                      <span class="d-flex align-items-center mb-1">
                                          <small class="text-black-50">منذ 3 ساعات</small>

                                          <span class="ml-auto unread-indicator bg-accent"></span>

                                      </span>
                                      <span class="d-flex">

                                          </span>
                                          <span class="flex d-flex flex-column">

                                              <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                          </span>
                                      </span>
                                  </a>

                                  <a href="project-details.html"
                                     class="list-group-item list-group-item-action">
                                      <span class="d-flex align-items-center mb-1">
                                          <small class="text-black-50">منذ 5 ساعات</small>

                                      </span>
                                      <span class="d-flex">

                                          </span>
                                          <span class="flex d-flex flex-column">
                                              <strong class="text-black-100">Adrian. D</strong>
                                              <span class="text-black-70">Wants to join your private group.</span>
                                          </span>
                                      </span>
                                  </a>

                                  <a href="notifications.html"
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

                                              <span class="text-black-70">مشاهدة كل الإشعارات</span>
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
                              <div class="dropdown-header"><strong>الرسائل</strong></div>
                              <div class="list-group list-group-flush mb-0">

                                  <a href="email.html"
                                     class="list-group-item list-group-item-action unread">
                                      <span class="d-flex align-items-center mb-1">
                                          <small class="text-black-50">منذ 5 دقائق</small>

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

                                  <a href="email.html"
                                     class="list-group-item list-group-item-action">
                                      <span class="d-flex align-items-center mb-1">
                                          <small class="text-black-50">منذ 5 دقائق</small>

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

                                  <a href="email.html"
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

                                           <span class="text-black-70">مشاهدة كل الرسائل</span>
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
                             <h2 class="mb-0">لوحة المهام</h2>

                             <ol class="breadcrumb p-0 m-0">
                                 <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>

                                 <li class="breadcrumb-item active">

                                     النشاطات

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
                                <a href="reminders.html"
                                   class="btn btn-accent">التذكيرات</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">
                    <div class="page-section">


                        <div class="page-separator">
                            <div class="page-separator__text">المهام</div>
                        </div>

                        <div class="row card-group-row">

                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">Edit</a>
                                            <a class="dropdown-item"
                                               href="#">Delete</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                           <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 card-group-row__col">

                                <div class="card card-group-row__card p-16pt">

                                    <div class="d-flex">
                                        <div class="d-flex flex-column flex">
                                            <a href="#"
                                               class="mb-8pt"><strong><a href="tasks-details.html">Add Fluid Layout Featuring A Vertical Menu With Icons Only</a></strong></a>
                                            <div class="d-flex align-items-center mb-8pt">
                                              <p></p>
                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                   <a href=""
                                                   class="mr-4pt"><span class="indicator-line rounded bg-warning"></span></a>

                                            </div>
                                        </div>
                                        <a href="#"
                                        class="nav-link d-flex align-items-center dropdown-toggle"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                        <i class="material-icons text-50">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                            <a class="dropdown-item"
                                               href="#">تعديل</a>
                                            <a class="dropdown-item"
                                               href="#">حذف</a>


                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex d-flex align-items-center">
                                            <small class="text-50 mr-16pt">Today</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group flex mr-8pt">


                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <span><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="card p-8pt mb-0 d-inline-block">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item disabled">
                                    <a class="page-link"
                                       href="#"
                                       aria-label="Previous">
                                        <span aria-hidden="true"
                                              class="material-icons">chevron_right</span>
                                        <span>السابق</span>
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
                                        <span>التالي</span>
                                        <span aria-hidden="true"
                                              class="material-icons">chevron_left</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <div class="page-separator">
                        <div class="page-separator__text">إضافة مهمة جديدة</div>
                    </div>

                    <div class="list-group">
                        <div class="list-group-item">
                            <div role="group"
                                 aria-labelledby="label-question"
                                 class="m-0 form-group">
                                <div class="form-row">
                                    <label id="label-question"
                                           for="question"
                                           class="col-md-3 col-form-label form-label">عنوان المهمة</label>
                                    <div class="col-md-9">
                                        <input type="text"
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
                                           class="col-md-3 col-form-label form-label">وصف المهمة</label>
                                    <div class="col-md-9">
                                        <textarea id="question"
                                                  rows="4"
                                                  class="form-control"></textarea>
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
                                           class="col-md-3 col-form-label form-label">المشروع المختص</label>
                                    <div class="col-md-9">
                                        <select name="projects" id="projects" class="col-form-label form-label">
                                            <option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option>
                                            <option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option><option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option><option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option><option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option><option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option><option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option><option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option><option value="volvo">social media</option>
                                            <option value="saab">production</option>
                                            <option value="mercedes">web</option>
                                            <option value="app">app</option>
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
                                           class="col-md-3 col-form-label form-label">تحميل ملف</label>
                                           <div class="d-inline-flex align-items-center">
                                            <a href="#"
                                               class="btn btn-sm btn-outline-secondary mr-16pt">تحميل ملف <i class="icon--right material-icons">keyboard_arrow_up</i></a>

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
                                           class="col-md-3 col-form-label form-label">مسندة إلى</label>
                                           <div class="col-9 d-inline-flex align-items-center">
                                            <select class="col-9 js-example-basic-single" name="state" multiple>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>

                                                <option value="WY">Wyoming</option>
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
                                       class="custom-control-label">أرسل لي إشعار عندما يقوم موظف بالتعليق على المهمة</label>
                            </div>

                        </div>
                        <div class="list-group-item">
                            <button type="button"
                                    class="btn btn-accent">نشر المهمة</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">

                            <div class="page-separator">
                                <div class="page-separator__text">الوصول السريع</div>
                            </div>

                            <div class="card mb-lg-0">
                                <div class="card-header d-flex align-items-center">
                                    <strong class="flex">اضغط بالأسفل</strong>

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
                                        <a href="tasks-list.html"><img src="assets/images/quickers.png" alt="Tasks List"
                                            style="width: 100%; height: auto; "></a>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="page-separator">
                                <div class="page-separator__text">لوحة الإعلانات</div>
                            </div>

                            <div class="card mb-lg-0">
                                <div class="card-header d-flex align-items-center">
                                    <strong class="flex">إعلان مدفوع</strong>
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
                                                style="width: 100%; height: auto; "></a>



                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
<p></p>


                </div>




            <!--Footer-->





                <div class="js-fix-footer footer border-top-2">
                    <div class="container-fluid page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="assets/images/logo/logo.png"
                                 width="30"
                                 alt="Deadline"> Deadline
                        </p>
                        <p class="measure-lead-max text-muted mb-0 small">ديدلاين عبارة عن واجهة مستخدم مصممة بشكل جميل لشركات الأعمال الحديثة التي تقدم خدمات متعددة ، فهي تساعد الإدارة على متابعة عملية إدارة المشروع، إدارة المهام، نظام رسائل بسيط وإدارة الحسابات.</p>
                    </div>
                    <div class="pb-16pt pb-lg-24pt">
                        <div class="container-fluid page__container">
                            <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                        <p class="text-white-70 mb-8pt"><strong>تابعونا عبر </strong></p>
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
                             <div class="dropdown-header"><strong>الحساب الشخصي</strong></div>
                             <a class="dropdown-item"
                                href="edit-account.html">تعديل الحساب</a>
                             <a class="dropdown-item"
                                href="billing.html">الإشتراك</a>
                             <a class="dropdown-item"
                                href="billing-history.html">الدفع</a>
                             <a class="dropdown-item"
                                href="login.html">خروج</a>

                         </div>
                     </div>



                     <div class="sidebar-heading">ديدلاين</div>


                     <ul class="sidebar-menu">

                         <li class="sidebar-menu-item">
                             <a class="sidebar-menu-button"
                                href="index.html">
                                 <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">insert_chart_outlined</span>
                                 <span class="sidebar-menu-text">لوحة التحكم</span>
                             </a>
                         </li>

                         <li class="sidebar-menu-item active">
                             <a class="sidebar-menu-button"
                                data-toggle="collapse"
                                href="#productivity_menu">
                                 <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                 النشاطات
                                 <span class="ml-auto sidebar-menu-toggle-icon"></span>
                             </a>
                             <ul class="sidebar-submenu collapse sm-indent"
                                 id="productivity_menu">
                                 <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="projects.html">
                                         <span class="sidebar-menu-text">المشاريع</span>
                                     </a>
                                 </li>
                                 <li class="sidebar-menu-item active">
                                     <a class="sidebar-menu-button"
                                        href="tasks-board.html">
                                         <span class="sidebar-menu-text">لوحة المهام</span>
                                     </a>
                                 </li>
                                 <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="tasks-list.html">
                                         <span class="sidebar-menu-text">قائمة المهام</span>
                                     </a>
                                 </li>
                                 <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="reports.html">
                                         <span class="sidebar-menu-text">التقارير</span>
                                     </a>
                                 </li>


                             </ul>
                         </li>



                           <li class="sidebar-menu-item">
                             <a class="sidebar-menu-button"
                                data-toggle="collapse"
                                href="#account_menu">
                                 <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                 الحساب الشخصي
                                 <span class="ml-auto sidebar-menu-toggle-icon"></span>
                             </a>
                             <ul class="sidebar-submenu collapse show sm-indent"
                                 id="account_menu">

                                <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="edit-account.html">
                                         <span class="sidebar-menu-text">تعديل الحساب</span>
                                     </a>
                                 </li>

                                 <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="billing.html">
                                         <span class="sidebar-menu-text">الإشتراك</span>
                                     </a>
                                 </li>


                                 <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="user-approves.html">
                                        <span class="sidebar-menu-text">الطلبات</span>
                                    </a>
                                </li>

                             </ul>
                         </li>
                         <li class="sidebar-menu-item">
                             <a class="sidebar-menu-button"
                                data-toggle="collapse"
                                href="#community_menu">
                                 <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                 الفريق
                                 <span class="ml-auto sidebar-menu-toggle-icon"></span>
                             </a>
                             <ul class="sidebar-submenu collapse sm-indent"
                                 id="community_menu">
                                 <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="employees.html">
                                         <span class="sidebar-menu-text">الموظفين</span>
                                     </a>
                                 </li>

                                 <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="announcments.html">
                                         <span class="sidebar-menu-text">الإعلانات</span>
                                     </a>
                                 </li>

                                 <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="events.html">
                                        <span class="sidebar-menu-text">الأحداث</span>
                                    </a>
                                </li>

                                 <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                        href="email.html">
                                         <span class="sidebar-menu-text">الرسائل</span>
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

         <!--Mention-->
         <script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script>
         <script>
                         // In your Javascript (external .js resource or <script> tag)
             $(document).ready(function() {
                 $('.js-example-basic-single').select2();
             });
                     </script>
    </body>

</html>
