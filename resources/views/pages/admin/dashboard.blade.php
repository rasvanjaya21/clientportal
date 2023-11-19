@extends('layouts.admin1')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">


        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title font-weight-bolder">Admin Dashboard</h2>

                <!-- <p class="dashboard-subtitle">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      Look what you have made today!
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </p> -->
            </div>

            <div class="dashboard-content mt-4">
                <div class="card col-12 p-3 border-0  shadow" style="border-radius: 20px;">
                    <div class="row">

                        <div class="col-md-4 ">
                            <a href="{{ route('client.index') }}" class="text-decoration-none text-dark">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">
                                            <h6>Client</h6>
                                        </div>
                                        <div class="dashboard-card-subtitle">
                                            <h1><strong>{{ $client }}</strong></h1>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-md-4 ">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="dashboard-card-title">
                                        <h6>Project</h6>
                                    </div>
                                    <div class="dashboard-card-subtitle">
                                        <h1><strong>{{ $project }}</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="dashboard-card-title">
                                        <h6>Admin</h6>
                                    </div>
                                    <div class="dashboard-card-subtitle">
                                        <h1><strong>{{ $admin }}</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="row mt-4">

                    <div class="col-md-6">
                        <div class="card shadow bg-white mb-3 border-0 p-3" style="border-radius: 20px;">
                            <div class="card-title border-0 p-3">
                                <h6 class="m-0">Notifications</h6>
                            </div>
                            <div class="card-body p-0">

                                @foreach ($recentnoti as $noti)
                                    <div class="p-3 d-flex align-items-center border-0">

                                        <div class="font-weight-bold mr-3">
                                            <div class="text-truncate text-wrap">{{ $noti->guest_name }} has commented on
                                                {{ $noti->name }}
                                                project</div>
                                            <div class="small">{{ $noti->comment }}</div>
                                            <a href="/details/{{ $noti->slug }}" target="_blank"
                                                class="btn btn-outline-success btn-sm mt-2">View Comment</a>
                                        </div>
                                        <span class="ml-auto mb-auto">

                                            <div class="text-right text-muted pt-1 text-wrap">
                                                {{ \Carbon\Carbon::parse($noti->created_at)->diffForHumans() }}
                                            </div>
                                        </span>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="card shadow bg-white mb-3 border-0 p-3" style="border-radius: 20px;">
                            <div class="card-title border-0 p-3">
                                <h6 class="m-0">Recent Clients</h6>
                            </div>
                            <div class="card-body p-0">

                                @foreach ($recentclient as $recentclients)
                                    <div class="p-3 d-flex align-items-center bg-white border-0 osahan-post-header">

                                        <div class="font-weight-bold mr-3">
                                            <div class="text-truncate">{{ $recentclients->name }}</div>
                                            <div class="small">Slug : <a href="/details/{{ $recentclients->slug }}"
                                                    target="_blank">{{ $recentclients->slug }}</a></div>
                                            <div class="small">Password : {{ $recentclients->password }}</div>
                                        </div>
                                        <span class="ml-auto mb-auto">

                                            <div class="text-right text-muted pt-1">
                                                {{ $recentclients->created_at->diffForHumans() }}</div>
                                        </span>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>


                </div>

            </div>
            {{-- <div class="d-flex mt-5">
                <!-- First Column - Left -->
                <div class="flex-column">
                    <div class="admin-hero flex-hero-1 row">
                        <div class="col-md-7">
                            <h3 class="text-white">Hello Katie!</h3>
                            <p class="text-white mt-3">Lorem ipsum dolor sit amet</p>
                            <p class="mt-4">
                                <a class="text-white" href="#">
                                    <u>Review All</u>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-5 image-container">
                            <img class="image-hero" src="/images/hero-admin.png" alt="" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="font-weight-bolder mt-2">You Need To Here</h4>
                        </div>
                    </div>

                    <div class="card-progress">
                        <div class="row mb-4">
                            <div class="col-xl-6 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-content">
                                        <div class="card-body clearfix">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <h1 class="my-0">1</h1>
                                                    <div class="ml-3">
                                                        <h5 class="my-0 font-weight-bold">
                                                            Content Designer
                                                        </h5>
                                                        <p class="my-0">test</p>
                                                    </div>
                                                </div>

                                                <div class="align-items-center">
                                                    <div class="container">
                                                        <div class="progress" data-percentage="74">
                                                            <span class="progress-left">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <div class="progress-value">
                                                                <div>
                                                                    74%
                                                                    <br />
                                                                    <!-- <span>completed</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-content">
                                        <div class="card-body clearfix">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <h1 class="my-0">2</h1>
                                                    <div class="ml-3">
                                                        <h5 class="my-0 font-weight-bold">
                                                            Content Designer
                                                        </h5>
                                                        <p class="my-0">test</p>
                                                    </div>
                                                </div>

                                                <div class="align-items-center">
                                                    <div class="container">
                                                        <div class="progress" data-percentage="74">
                                                            <span class="progress-left">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <div class="progress-value">
                                                                <div>
                                                                    74%
                                                                    <br />
                                                                    <!-- <span>completed</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-content">
                                        <div class="card-body clearfix">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <h1 class="my-0">3</h1>
                                                    <div class="ml-3">
                                                        <h5 class="my-0 font-weight-bold">
                                                            Content Designer
                                                        </h5>
                                                        <p class="my-0">test</p>
                                                    </div>
                                                </div>

                                                <div class="align-items-center">
                                                    <div class="container">
                                                        <div class="progress" data-percentage="74">
                                                            <span class="progress-left">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <div class="progress-value">
                                                                <div>
                                                                    74%
                                                                    <br />
                                                                    <!-- <span>completed</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-content">
                                        <div class="card-body clearfix">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <h1 class="my-0">4</h1>
                                                    <div class="ml-3">
                                                        <h5 class="my-0 font-weight-bold">
                                                            Content Designer
                                                        </h5>
                                                        <p class="my-0">test</p>
                                                    </div>
                                                </div>

                                                <div class="align-items-center">
                                                    <div class="container">
                                                        <div class="progress" data-percentage="74">
                                                            <span class="progress-left">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <div class="progress-value">
                                                                <div>
                                                                    74%
                                                                    <br />
                                                                    <!-- <span>completed</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="projects mt-4 mb-4">
                        <div class="projects-inner">
                            <header class="projects-header">
                                <div class="title font-weight-bold">
                                    Ongoing Projects
                                </div>
                                <div class="count">| 32 Projects</div>
                                <i class="zmdi zmdi-download"></i>
                            </header>
                            <table class="projects-table">
                                <thead>
                                    <tr>
                                        <th class="th-status text-center">Project</th>
                                        <th class="th-status text-center">Deadline</th>
                                        <th class="th-status text-center">Leader + Team</th>
                                        <th class="th-status text-center">Budget</th>
                                        <th class="th-status text-center">Status</th>
                                        <th class="th-status text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td class="td-status">
                                        <p>New Dashboard</p>
                                        <p>Google</p>
                                    </td>
                                    <td class="td-status">
                                        <p>17th Oct, 15</p>
                                        <p class="text-danger">Overdue</p>
                                    </td>
                                    <td class="td-status member">
                                        <figure>
                                            <img src="images/person_dashboard.jpg" />
                                        </figure>
                                        <div class="member-info">
                                            <p>Halim Putra</p>
                                            <p>Developer Team</p>
                                        </div>
                                    </td>
                                    <td class="td-status">
                                        <p>Rp. 467,000</p>
                                        <p>Paid</p>
                                    </td>
                                    <td class="td-status status">
                                        <span class="status-text status-orange">In progress</span>
                                    </td>
                                    <td class="td-status">
                                        <form class="form" action="#" method="POST">
                                            <select class="action-box">
                                                <option>Actions</option>
                                                <option>Start project</option>
                                                <option>Send for QA</option>
                                                <option>Send invoice</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="danger-item">
                                    <td class="td-status">
                                        <p>New Dashboard</p>
                                        <p>Google</p>
                                    </td>
                                    <td class="td-status">
                                        <p>17th Oct, 15</p>
                                        <p class="text-danger">Overdue</p>
                                    </td>
                                    <td class="td-status member">
                                        <figure>
                                            <img src="images/person_dashboard.jpg" />
                                        </figure>
                                        <div class="member-info">
                                            <p>Halim Putra</p>
                                            <p>Developer Team</p>
                                        </div>
                                    </td>
                                    <td class="td-status">
                                        <p>Rp. 467,000</p>
                                        <p>Paid</p>
                                    </td>
                                    <td class="td-status tatus">
                                        <span class="status-text status-red">Blocked</span>
                                    </td>
                                    <td class="td-status">
                                        <form class="form" action="#" method="POST">
                                            <select class="action-box">
                                                <option>Actions</option>
                                                <option>Start project</option>
                                                <option>Send for QA</option>
                                                <option>Send invoice</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-status">
                                        <p>New Dashboard</p>
                                        <p>Google</p>
                                    </td>
                                    <td class="td-status">
                                        <p>17th Oct, 15</p>
                                        <p class="text-danger">Overdue</p>
                                    </td>
                                    <td class="td-status member">
                                        <figure>
                                            <img src="images/person_dashboard.jpg" />
                                        </figure>
                                        <div class="member-info">
                                            <p>Halim Putra</p>
                                            <p>Developer Team</p>
                                        </div>
                                    </td>
                                    <td class="td-status">
                                        <p>Rp. 467,000</p>
                                        <p>Paid</p>
                                    </td>
                                    <td class="td-status status">
                                        <span class="status-text status-orange">In progress</span>
                                    </td>
                                    <td class="td-status">
                                        <form class="form" action="#" method="POST">
                                            <select class="action-box">
                                                <option>Actions</option>
                                                <option>Start project</option>
                                                <option>Send for QA</option>
                                                <option>Send invoice</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-status">
                                        <p>New Dashboard</p>
                                        <p>Google</p>
                                    </td>
                                    <td class="td-status">
                                        <p>17th Oct, 15</p>
                                        <p class="text-danger">Overdue</p>
                                    </td>
                                    <td class="td-status member">
                                        <figure>
                                            <img src="images/person_dashboard.jpg" />
                                        </figure>
                                        <div class="member-info">
                                            <p>Halim Putra</p>
                                            <p>Developer Team</p>
                                        </div>
                                    </td>
                                    <td class="td-status">
                                        <p>Rp. 467,000</p>
                                        <p>Paid</p>
                                    </td>
                                    <td class="td-status status">
                                        <span class="status-text status-blue">Early stages</span>
                                    </td>
                                    <td class="td-status">
                                        <form class="form" action="#" method="POST">
                                            <select class="action-box">
                                                <option>Actions</option>
                                                <option>Start project</option>
                                                <option>Send for QA</option>
                                                <option>Send invoice</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-status">
                                        <p>New Dashboard</p>
                                        <p>Google</p>
                                    </td>
                                    <td class="td-status">
                                        <p>17th Oct, 15</p>
                                        <p class="text-danger">Overdue</p>
                                    </td>
                                    <td class="td-status member">
                                        <figure>
                                            <img src="images/person_dashboard.jpg" />
                                        </figure>
                                        <div class="member-info">
                                            <p>Halim Putra</p>
                                            <p>Developer Team</p>
                                        </div>
                                    </td>
                                    <td class="td-status">
                                        <p>Rp. 467,000</p>
                                        <p>Paid</p>
                                    </td>
                                    <td class="td-status status">
                                        <span class="status-text status-orange">In progress</span>
                                    </td>
                                    <td class="td-status">
                                        <form class="form" action="#" method="POST">
                                            <select class="action-box">
                                                <option>Actions</option>
                                                <option>Start project</option>
                                                <option>Send for QA</option>
                                                <option>Send invoice</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Second Column - Right -->
                <div class="flex-column flex-hero-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="elegant-calendar d-md-flex">
                                    <div class="wrap-header d-flex align-items-center img"
                                        style="
                              background-image: url(images/bg-calendar.jpg);
                            ">
                                        <p id="reset">Today</p>
                                        <div id="header" class="p-0">
                                            <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                                            <div class="head-info">
                                                <div class="head-month"></div>
                                                <div class="head-day"></div>
                                            </div>
                                            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
                                        </div>
                                    </div>
                                    <div class="calendar-wrap">
                                        <div class="w-100 button-wrap">
                                            <div class="pre-button d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-left-circle-fill icon-color"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                                </svg>
                                            </div>
                                            <div class="next-button d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-right-circle-fill icon-color"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                                </svg>
                                            </div>
                                        </div>

                                        <table id="calendar">
                                            <thead class="thead-calendar">
                                                <tr class="tr-calendar">
                                                    <th class="th-calendar">Sun</th>
                                                    <th class="th-calendar">Mon</th>
                                                    <th class="th-calendar">Tue</th>
                                                    <th class="th-calendar">Wed</th>
                                                    <th class="th-calendar">Thu</th>
                                                    <th class="th-calendar">Fri</th>
                                                    <th class="th-calendar">Sat</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody-calendar">
                                                <tr class="tr-calendar">
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                </tr>
                                                <tr class="tr-calendar">
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                </tr>
                                                <tr class="tr-calendar">
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                </tr>
                                                <tr class="tr-calendar">
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                </tr>
                                                <tr class="tr-calendar">
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                </tr>
                                                <tr class="tr-calendar">
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                    <td class="td-calendar"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="container white-section">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="text-left">
                                        <div class="title-applicants-left font-weight-bold">
                                            New Applicants
                                        </div>
                                        <div class="sub-item-applicants mt-4 d-flex align-items-center">
                                            <img src="images/person_1.png" alt="Profile Image" class="profile-image" />
                                            <div class="ml-3">
                                                <h5 class="applicant-name">Halim Putra</h5>
                                                <p class="applicant-info">Halim</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <div class="align-content-between">
                                            <div class="title-applicants-right font-weight-bold">
                                                See All
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
