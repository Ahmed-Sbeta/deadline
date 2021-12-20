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

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

        <!-- Dark Mode CSS (optional) -->
        <link type="text/css"
              href="assets/css/dark-mode.css"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="assets/vendor/jqvmap/jqvmap.min.css"
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
<!--ANNOUNCMENT DIV-->
                <div class="container-fluid page__container">
                    <div class="page-section">

                        
                        <div class="card mb-lg-32pt">
                            <div class="card-header d-flex align-items-center">
                                <strong>Announcments</strong>
                               
                            </div>
                            <div class="card-body">
                                
                               <a href="discussion.html"><h1 style="color: #00BCC2;">Important Announcment!</h1>Click here to view announcments details 
                                Click here to view announcments details Click here to view announcments details
                                Click here to view announcments details Click here to view announcments details
                                Click here to view announcments details Click here to view announcments details
                                Click here to view announcments details Click here to view announcments details
                               </a><p></p>
                            </div>
                        </div>
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
                                     style="width: 14%;"
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
                                            <th style="width: 100px;">Assigned to</th>
                                            <th style="width: 24px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list"
                                           id="tasks">

                                        <tr class="selected">

                                            <td class="pr-0">
                                               
                                            </td>

                                            <td>

                                                <div class="d-flex align-items-center">
                                                    <strong class="flex js-lists-values-name">Add Fluid Layout Featuring A Vertical Menu With Icons Only</strong>

                                                    

                                                </div>

                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                   

                                                </div>
                                            </td>
                                            <td>
                                                <small class="js-lists-values-date text-50">02/01/20</small>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-group flex mr-8pt">

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                              
                                            </td>

                                            <td>

                                                <div class="d-flex align-items-center">
                                                    <strong class="flex js-lists-values-name">Add Initial Documentation Covering Basic Features</strong>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    

                                                </div>
                                            </td>
                                            <td>
                                                <small class="js-lists-values-date text-50">03/01/20</small>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-group flex mr-8pt">

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                                
                                            </td>

                                            <td>

                                                <div class="d-flex align-items-center">
                                                    <strong class="flex js-lists-values-name">Refactor HTML Markup To Be More SEO Friendly</strong>

                                                   

                                                </div>

                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                   
                                                </div>
                                            </td>
                                            <td>
                                                <small class="js-lists-values-date text-50">03/01/20</small>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-group flex mr-8pt">

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="LB">
                                                            <a href=""><span class="avatar-title bg-white border text-black-100 rounded-circle">LB</span></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="AD">
                                                            <a href=""><span class="avatar-title bg-white border text-black-100 rounded-circle">AD</span></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                             
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <img src="assets/images/stories/256_rsz_jared-rice-388260-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex align-items-center">
                                                            <strong class="flex js-lists-values-name">Add Layout Options</strong>

                                                        </div>

                                                    </div>
                                                </div>

                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                   

                                                </div>
                                            </td>
                                            <td>
                                                <small class="js-lists-values-date text-50">04/01/20</small>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-group flex mr-8pt">

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                    </div>
                                                </div>
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
                                </ul>

                            </div>
                            <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

                        </div>

<!--project overview div-->

<div class="page-separator">
    <div class="page-separator__text">Projects Overview</div>
</div>

<div class="row mb-lg-8pt">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>92%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1 js-update-chart-progress"
                                id="inTimeProgressChart"
                                data-chart-line-background-color="primary;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>Open</strong>
                    </div>
                    <div class="text-50">60</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>23%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1 js-update-chart-progress-accent"
                                id="lateProgressChart"
                                data-chart-line-background-color="accent;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>In progress</strong>
                    </div>
                    <div class="text-50">15</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>6%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1"
                                id="absentsProgressChart"
                                data-chart-line-background-color="yellow;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>Done</strong>
                    </div>
                    <div class="text-50">4</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>1%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1"
                                id="vacationProgressChart"
                                data-chart-line-background-color="yellow;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>Total</strong>
                    </div>
                    <div class="text-50">1</div>
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


<div class="row mb-lg-8pt">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>92%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1 js-update-chart-progress"
                                id="inTimeProgressChart"
                                data-chart-line-background-color="primary;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>Open</strong>
                    </div>
                    <div class="text-50">60</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>23%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1 js-update-chart-progress-accent"
                                id="lateProgressChart"
                                data-chart-line-background-color="accent;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>In Progress</strong>
                    </div>
                    <div class="text-50">15</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>6%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1"
                                id="absentsProgressChart"
                                data-chart-line-background-color="yellow;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>Done</strong>
                    </div>
                    <div class="text-50">4</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="position-relative mr-16pt">
                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                            <small>1%</small>
                        </div>
                        <canvas width="48"
                                height="48"
                                class="chart-canvas position-relative z-1"
                                id="vacationProgressChart"
                                data-chart-line-background-color="yellow;gray"
                                data-chart-disable-tooltips="true"></canvas>
                    </div>
                    <div class="flex">
                        <strong>Total</strong>
                    </div>
                    <div class="text-50">1</div>
                </div>
            </div>
        </div>
    </div>
</div>

<p></p>         


                       
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
                                           href="discussions-ask.html">
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
                                           href="discussions.html">
                                            <span class="sidebar-menu-text">Announcments</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="discussion.html">
                                            <span class="sidebar-menu-text">Announcments Details</span>
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

                        
        <!-- App Settings FAB -->
       
        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>
    </body>

</html>