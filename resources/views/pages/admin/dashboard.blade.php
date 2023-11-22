@extends('layouts.admin1')

@section('title')
    Dashboard
@endsection

@section('content')
    {{-- <div class="dashboard-heading">
        <h2 class="dashboard-title font-weight-bolder">Admin Dashboard</h2>



    </div> --}}

    <div class="row">
        <div class="col-sm-4 grid-margin">
            <a href="{{ route('client.index') }}" class="text-decoration-none text-dark">

                <div class="card shadow border-0 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <img src="/images/dashboard/client.svg" alt="client" class="logo-row">
                                    <h5 class="ml-3 my-auto">Client</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8 col-sm-12 col-xl-12 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $client }}</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-4 grid-margin">
            <a href="#" class="text-decoration-none text-dark">

                <div class="card shadow border-0 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <img src="/images/dashboard/project.svg" alt="client" class="logo-row">
                                    <h5 class="ml-3 my-auto">Project</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8 col-sm-12 col-xl-12 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $project }}</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </a>
        </div>

        <div class="col-sm-4 grid-margin">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card shadow border-0 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <img src="/images/dashboard/admin.svg" alt="client" class="logo-row">
                                    <h5 class="ml-3 my-auto">Admin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-8 col-sm-12 col-xl-12 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $admin }}</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-1">

        <div class="col-md-6">
            <div class="card shadow border-0 card-important bg-white mb-3 p-3">
                <div class="card-title p-3">
                    <h5 class="m-0 font-weight-bold">Notifications</h5>
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
                                    class="btn btn-outline-success btn-sm mt-2 rounded-pill">View Comment</a>
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
            <div class="card shadow border-0 card-important bg-white mb-3 p-3">
                <div class="card-title p-3">
                    <h5 class="m-0 font-weight-bold">Recent Clients</h5>
                </div>
                <div class="card-body p-0">

                    @foreach ($recentclient as $recentclients)
                        <div class="p-3 border-0">
                            <div>
                                <div class="d-flex">
                                    <div class="font-weight-bold section-left-2 overflow-hidden">
                                        {{ $recentclients->name }}
                                    </div>
                                    <div class="section-right-2 my-auto text-right  text-muted ">
                                        {{ \Carbon\Carbon::parse($noti->created_at)->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="small">Slug : <a href="/details/{{ $recentclients->slug }}" target="_blank">
                                        {{ $recentclients->slug }}
                                    </a>
                                </div>
                                <div class="small">
                                    {{ $recentclients->password }}
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

    {{-- <div class="dashboard-content mt-4">
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

    </div> --}}
@endsection
