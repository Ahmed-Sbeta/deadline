<!DOCTYPE html>
<html lang="en"
      dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>الرسائل</title>

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
               data-responsive-width="768px"
               data-has-scrollable-region
               data-fullbleed
               class="mdk-drawer-layout js-mdk-drawer-layout">
              <div class="mdk-drawer-layout__content"
                   data-perfect-scrollbar>

                  <div class="navbar border-bottom justify-content-start">

                      <a href="compose-mail.html"
                         class="btn btn-accent"><i class="material-icons icon--left">edit</i> رسالة جديدة</a>
                  </div>
                  <div class="container-fluid page__container page-section">

                      <div class="d-flex align-items-center mb-3">
                          <a href="#"
                             class="avatar avatar-sm mr-3">
                              <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                   alt="Avatar"
                                   class="avatar-img rounded-circle">
                          </a>
                          <div class="flex">
                              <p class="m-0">
                                  <span class="d-flex align-items-center">
                                      <a href="#"
                                         class="text-dark-gray"><strong>Jenell D. Matney</strong></a>
                                      <small class="ml-auto text-muted">March 24</small>
                                  </span>
                              </p>
                          </div>
                      </div>

                      <div class="d-flex align-items-center">
                          <h1 class="h4 flex">Thank you for contacting XBody</h1>
                          <div class="d-flex align-items-center">
                              <a href=""
                                 class="text-dark-gray">
                                  <i class="material-icons">forward</i>

                              </a>

                          </div>


                          <div class="text-center ml-3">


                              <a href=""
                                 class="d-flex flex-column">
                                  <i class="material-icons">attachment</i>
                                  <small class="text-muted">المرفقات</small>
                              </a>
                          </div>

                          <div class="text-center ml-3">


                              <a href=""
                                 class="d-flex flex-column">
                                  <i class="material-icons">restore_from_trash</i>
                                  <small class="text-muted">السلة</small>
                              </a>
                          </div>
                      </div>



                      <div class="d-flex align-items-center">
                          <div class="flex mr-3">
                              <p class="text-70 measure-paragraph-max">Dear Sean,<br><br>Thank you for contactiu and welcoming you in the XBody Family! <br><br>You have given us the following details in your message:</p>
                              <blockquote class="border-left-3 pl-3">
                                  <p class="text-50 measure-paragraph-max">Lorem ipsum doloesentium exercitationem cum enim nobis nesciunt quibusdam.</p>
                              </blockquote>
                              <p class="text-70 measure-paragraph-max">Please do not respond to this email (you can reach us at: <a href="">sales@xbodyworld.com</a>), this is a confirmation reply to let you know we have successfully received your message and forwarded it to our team. <br><br>
                                  One of our colleagues will try tions. <br><br>Kind regards,<br>Team XBody</p>
                          </div>



                      </div>
                          <div class="form-group">
                              <label for="comment"
                                     class="form-label"><h4>اكتب رد</h4></label>
                              <textarea class="form-control"
                                        name="comment"
                                        id="comment"
                                        rows="4"
                                        placeholder="أكتب الرد الخاص بك هنا ..."></textarea>
                          </div>
                          <button class="btn btn-accent">إرسال</button>

                  </div>

              </div>

              <div class="mdk-drawer sub-layout-drawer js-mdk-drawer"
                   data-align="start"
                   id="email-drawer">
                  <div class="mdk-drawer__content ">
                      <div class="sidebar sidebar-left sidebar-light bg-white  o-hidden"
                           data-perfect-scrollbar>

                          <div class="navbar">
                              <div class="search-form form-control-rounded search-form--light">
                                  <input type="text"
                                         class="form-control"
                                         placeholder="عن ماذا تبحث?"
                                         id="searchSample02">
                                  <button class="btn"
                                          type="button"><i class="material-icons">search</i></button>
                              </div>
                          </div>

                          <a data-target="#"
                          data-toggle="sidebar"
                          class="btn btn-sm btn-light"><i class="material-icons icon--left">tune</i> الوارد</a>
                          <a data-target="#"
                          data-toggle="sidebar"
                          class="btn btn-sm btn-light"><i class="material-icons icon--left">tune</i> المرسل </a>
                          <a data-target="#"
                          data-toggle="sidebar"
                          class="btn btn-sm btn-light"><i class="material-icons icon--left">tune</i> السلة </a>

                          <div class="list-group list-group-flush flex-shrink-0"
                               style="position: relative; z-index: 0;">


                              <div class="list-group-item d-flex align-items-start bg-transparent">


                                  <div class="mr-3 d-flex flex-column align-items-center">
                                      <a href="#"
                                         class="avatar avatar-xs mb-2">
                                          <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                               alt="Avatar"
                                               class="avatar-img rounded-circle">
                                      </a>
                                      <a href=""
                                         class="text-muted"><i class="material-icons icon-16pt">star_border</i></a>
                                  </div>
                                  <div class="flex">
                                      <p class="m-0">
                                          <span class="d-flex align-items-center mb-1">

                                              <a href="#"
                                                 class="text-body"><strong>Sherri J. Cardenas</strong></a>
                                              <small class="ml-auto text-muted">Today</small>
                                          </span>
                                          <span class="d-flex align-items-end">
                                              <span class="flex mr-3">
                                                  <strong class="text-body mb-1">When will Windows 11 come out?</strong><br>
                                                  <small class="text-muted"
                                                         style="max-height: 2rem; overflow: hidden; position: relative; display: inline-block;">Answer: Never. There is no Windows 11. Microsoft does not have a team of pro...</small>
                                              </span>
                                              <a href=""
                                                 class="d-flex align-items-center mb-1">
                                                  <small class="text-muted mr-1">2</small>
                                                  <i class="material-icons icon-16pt">attachment</i>
                                              </a>
                                          </span>
                                      </p>
                                  </div>
                              </div>

                              <div class="list-group-item d-flex align-items-start border-left-3 border-left-primary">
                                  <div class="mr-3 d-flex flex-column align-items-center">
                                      <a href="#"
                                         class="avatar avatar-xs mb-2">
                                          <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                               alt="Avatar"
                                               class="avatar-img rounded-circle">
                                      </a>
                                      <a href=""><i class="material-icons icon-16pt">star</i></a>
                                  </div>
                                  <div class="flex">
                                      <p class="m-0">
                                          <span class="d-flex align-items-center mb-1">
                                              <a href="#"
                                                 class="text-body"><strong>Jenell D. Matney</strong></a>
                                              <small class="ml-auto text-muted">March 24</small>
                                          </span>
                                          <span class="d-flex align-items-end">
                                              <span class="flex mr-3">
                                                  <strong class="text-body mb-1">Thank you for contacting XBody</strong><br>
                                                  <small class="text-muted"
                                                         style="max-height: 2rem; overflow: hidden; position: relative; display: inline-block;">Dear Sean, Thank you for showing and interest in our products, we are looking forward to talking to you and welcoming you in the XBody Family ..</small>
                                              </span>
                                              <a href=""
                                                 class="d-flex align-items-center mb-1">
                                                  <small class="text-muted mr-1">2</small>
                                                  <i class="material-icons icon-16pt">attachment</i>
                                              </a>
                                          </span>
                                      </p>
                                  </div>
                              </div>

                              <div class="list-group-item d-flex align-items-start bg-transparent">
                                  <div class="mr-3 d-flex flex-column align-items-center">
                                      <a href="#"
                                         class="avatar avatar-xs mb-2">
                                          <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg"
                                               alt="Avatar"
                                               class="avatar-img rounded-circle">
                                      </a>
                                      <a href=""
                                         class="text-muted"><i class="material-icons icon-16pt">star_border</i></a>
                                  </div>
                                  <div class="flex">
                                      <p class="m-0">
                                          <span class="d-flex align-items-center mb-1">
                                              <a href="#"
                                                 class="text-body"><strong>Joseph S. Ferland</strong></a>
                                              <small class="ml-auto text-muted">March 23</small>
                                          </span>
                                          <span class="d-flex align-items-end">
                                              <span class="flex mr-3">
                                                  <strong class="text-body mb-1">Why Designing Your Own UI Style Guide System Matters</strong><br>
                                                  <small class="text-muted"
                                                         style="max-height: 2rem; overflow: hidden; position: relative; display: inline-block;">Stories for Sean Todays highlights Why Designing Your Own Style Guide System Matters Before divind deep into desi...</small>
                                              </span>
                                              <a href=""
                                                 class="d-flex align-items-center mb-1">
                                                  <small class="text-muted mr-1">2</small>
                                                  <i class="material-icons icon-16pt">attachment</i>
                                              </a>
                                          </span>
                                      </p>
                                  </div>
                              </div>

                              <div class="list-group-item d-flex align-items-start bg-transparent">
                                  <div class="mr-3 d-flex flex-column align-items-center">
                                      <a href="#"
                                         class="avatar avatar-xs mb-2">
                                          <img src="assets/images/256_joao-silas-636453-unsplash.jpg"
                                               alt="Avatar"
                                               class="avatar-img rounded-circle">
                                      </a>
                                      <a href=""
                                         class="text-muted"><i class="material-icons icon-16pt">star_border</i></a>
                                  </div>
                                  <div class="flex">
                                      <p class="m-0">
                                          <span class="d-flex align-items-center mb-1">
                                              <a href="#"
                                                 class="text-body"><strong>UX Collective</strong></a>
                                              <small class="ml-auto text-muted">Feb 28</small>
                                          </span>
                                          <span class="d-flex align-items-end">
                                              <span class="flex mr-3">
                                                  <strong class="text-body mb-1">How to hire UX Researchers</strong><br>
                                                  <small class="text-muted"
                                                         style="max-height: 2rem; overflow: hidden; position: relative; display: inline-block;">How to hire UX Researchers &mdash; and more design links this week How to test the skills of a UX researcher...</small>
                                              </span>
                                              <a href=""
                                                 class="d-flex align-items-center mb-1">
                                                  <small class="text-muted mr-1">2</small>
                                                  <i class="material-icons icon-16pt">attachment</i>
                                              </a>
                                          </span>
                                      </p>
                                  </div>
                              </div>

                              <div class="list-group-item d-flex align-items-start bg-transparent">
                                  <div class="mr-3 d-flex flex-column align-items-center">
                                      <a href="#"
                                         class="avatar avatar-xs mb-2">
                                          <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                               alt="Avatar"
                                               class="avatar-img rounded-circle">
                                      </a>
                                      <a href=""
                                         class="text-muted"><i class="material-icons icon-16pt">star_border</i></a>
                                  </div>
                                  <div class="flex">
                                      <p class="m-0">
                                          <span class="d-flex align-items-center mb-1">
                                              <a href="#"
                                                 class="text-body"><strong>Elizabeth J. Ohara</strong></a>
                                              <small class="ml-auto text-muted">Feb 24</small>
                                          </span>
                                          <span class="d-flex align-items-end">
                                              <span class="flex mr-3">
                                                  <strong class="text-body mb-1">Business Analyst</strong><br>
                                                  <small class="text-muted"
                                                         style="max-height: 2rem; overflow: hidden; position: relative; display: inline-block;"></small>
                                              </span>
                                              <a href=""
                                                 class="d-flex align-items-center mb-1">
                                                  <small class="text-muted mr-1">2</small>
                                                  <i class="material-icons icon-16pt">attachment</i>
                                              </a>
                                          </span>
                                      </p>
                                  </div>
                              </div>

                              <div class="list-group-item d-flex align-items-start bg-transparent">
                                  <div class="mr-3 d-flex flex-column align-items-center">
                                      <a href="#"
                                         class="avatar avatar-xs mb-2">
                                          <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                               alt="Avatar"
                                               class="avatar-img rounded-circle">
                                      </a>
                                      <a href=""
                                         class="text-muted"><i class="material-icons icon-16pt">star_border</i></a>
                                  </div>
                                  <div class="flex">
                                      <p class="m-0">
                                          <span class="d-flex align-items-center mb-1">
                                              <a href="#"
                                                 class="text-body"><strong>Kaci M. Langston</strong></a>
                                              <small class="ml-auto text-muted">Feb 22</small>
                                          </span>
                                          <span class="d-flex align-items-end">
                                              <span class="flex mr-3">
                                                  <strong class="text-body mb-1">Human Resources</strong><br>
                                                  <small class="text-muted"
                                                         style="max-height: 2rem; overflow: hidden; position: relative; display: inline-block;"></small>
                                              </span>
                                              <a href=""
                                                 class="d-flex align-items-center mb-1">
                                                  <small class="text-muted mr-1">2</small>
                                                  <i class="material-icons icon-16pt">attachment</i>
                                              </a>
                                          </span>
                                      </p>
                                  </div>
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

                               <form action="index.html"
                                     class="search-form flex-shrink-0 search-form--black sidebar-m-b sidebar-p-l mx-16pt pr-0">
                                   <input type="text"
                                          class="form-control pl-0"
                                          placeholder="Search">
                                   <button class="btn"
                                           type="submit"><i class="material-icons">search</i></button>
                               </form>

                               <div class="sidebar-heading">ديدلاين</div>


                               <ul class="sidebar-menu">

                                   <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button"
                                          href="index.html">
                                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">insert_chart_outlined</span>
                                           <span class="sidebar-menu-text">لوحة التحكم</span>
                                       </a>
                                   </li>

                                   <li class="sidebar-menu-item">
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
                                           <li class="sidebar-menu-item">
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
                                   <li class="sidebar-menu-item active">
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

                                           <li class="sidebar-menu-item active">
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
    </body>

</html>
