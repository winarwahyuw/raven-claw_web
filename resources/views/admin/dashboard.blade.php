@extends('template.master')

@section('main-content')
    <!-- Page Content -->
    <main id="main">

        <!-- Content-->
        <section class="container-fluid zzi">

            <!-- Breadcrumbs-->
            <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="ri-home-line align-bottom me-1"></i> </a></li>
                </ol>
            </nav>            <!-- / Breadcrumbs-->

            <!-- Top Row Widgets-->
            <div class="row g-4 mb-4">

                <!-- Schedule Widget-->
                <div class="col-12 col-lg-6">
                        <div class="card h-100">
                            <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                                <h6 class="card-title">Schedule</h6>
                    
                                <!-- Nav Pills-->
                                <ul class="nav nav-pills justify-content-end m-0" id="scheduleTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="today-tab" data-bs-toggle="tab" data-bs-target="#today" type="button" role="tab" aria-controls="today" aria-selected="true">Today</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tomorrow-tab" data-bs-toggle="tab" data-bs-target="#tomorrow" type="button" role="tab" aria-controls="tomorrow" aria-selected="false">Tomorrow</button>
                                    </li>
                                </ul>
                                <!-- / Nav Pills-->
                    
                            </div>
                            <div class="card-body">
                    
                                <!-- Tab Content-->
                                <div class="tab-content" id="scheduleTabContent">
                    
                                    <!-- Tab Today Content-->
                                    <div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today-tab">
                                        <ul class="list-group list-group-flush">
                    
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="fw-bolder mb-2 text-white">Sales meeting</p>
                                                        <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 09:35 <i class="ri-map-pin-line ms-6 me-2"></i> Meeting room 32B</span>
                                                    </div>
                    
                                                    <div class="dropdown ms-5">
                                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0"
                                                            type="button" id="dropDownSchedule-0" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-line"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownSchedule-0">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="fw-bolder mb-2 text-white">Interview with Patrick Nelson</p>
                                                        <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 11:45 <i class="ri-map-pin-line ms-6 me-2"></i> Main conference hall</span>
                                                    </div>
                    
                                                    <div class="dropdown ms-5">
                                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0"
                                                            type="button" id="dropDownSchedule-1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-line"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownSchedule-1">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="fw-bolder mb-2 text-white">Weekly API call</p>
                                                        <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 14:00 <i class="ri-map-pin-line ms-6 me-2"></i> Online</span>
                                                    </div>
                    
                                                    <div class="dropdown ms-5">
                                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0"
                                                            type="button" id="dropDownSchedule-2" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-line"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownSchedule-2">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="fw-bolder mb-2 text-white">Design review</p>
                                                        <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 16:35 <i class="ri-map-pin-line ms-6 me-2"></i> Meeting room 12A</span>
                                                    </div>
                    
                                                    <div class="dropdown ms-5">
                                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0"
                                                            type="button" id="dropDownSchedule-3" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-line"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownSchedule-3">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                    
                                        </ul>
                                    </div>
                                    <!-- / Tab Today Content-->
                    
                                    <!-- Tab Tomorrow Content-->
                                    <div class="tab-pane fade" id="tomorrow" role="tabpanel" aria-labelledby="tomorrow-tab">
                                        <ul class="list-group list-group-flush">
                    
                                                <li class="list-group-item">
                                                    <p class="fw-bolder mb-2 text-white">New product marketing meeting</p>
                                                    <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 11:00 <i class="ri-map-pin-line ms-6 me-2"></i> Central London, SW19 7TH</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="fw-bolder mb-2 text-white">Design review</p>
                                                    <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 13:45 <i class="ri-map-pin-line ms-6 me-2"></i> Meeting room 14B</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="fw-bolder mb-2 text-white">Daily SCRUM meeting</p>
                                                    <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 15:00 <i class="ri-map-pin-line ms-6 me-2"></i> Online</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="fw-bolder mb-2 text-white">Sales meeting</p>
                                                    <span class="small d-flex align-items-center"><i class="ri-time-line me-2"></i> 16:35 <i class="ri-map-pin-line ms-6 me-2"></i> Meeting room 12A</span>
                                                </li>
                    
                                        </ul>
                                    </div>
                                    <!-- / Tab Tomorro Content-->
                    
                                </div>
                                <!-- / Tab Content-->
                    
                            </div>
                        </div>
                </div>
                <!-- / Schedule Widget-->

                <!-- Budget Summary-->
                <div class="col-12 col-lg-6">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title">Budget summary</h6>
                    
                            <!-- Nav Pills-->
                            <ul class="nav nav-pills justify-content-end m-0" id="budgetTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="current-tab" data-bs-toggle="tab" data-bs-target="#current" type="button" role="tab" aria-controls="current" aria-selected="true">2021</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="previous-tab" data-bs-toggle="tab" data-bs-target="#previous" type="button" role="tab" aria-controls="previous" aria-selected="false">2020</button>
                                </li>
                                </ul>
                                <!-- / Nav Pills-->
                    
                        </div>
                        <div class="card-body">
                    
                                <!-- Tab Content-->
                                <div class="tab-content" id="budgetTabContent">
                    
                                <!-- Tab current Content-->
                                <div class="tab-pane fade show active" id="current" role="tabpanel" aria-labelledby="current-tab">
                                    <ul class="list-group list-group-flush">
                    
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="dot dot-xs bg-danger me-2"></span> Marketing
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">80%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-danger" style="width: 80%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="80"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="dot dot-xs bg-success me-2"></span> Sales
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">20%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-success" style="width: 20%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="dot dot-xs bg-info me-2"></span> Development
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">60%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-info" style="width: 60%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="dot dot-xs bg-danger me-2"></span> SEO
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">90%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-danger" style="width: 90%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="90"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="dot dot-xs bg-warning me-2"></span> Design
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">75%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-warning" style="width: 75%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="75"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                    
                                    </ul>
                                </div>
                                <!-- / Tab current Content-->
                    
                                <!-- Tab previous Content-->
                                <div class="tab-pane fade" id="previous" role="tabpanel" aria-labelledby="previous-tab">
                                    <ul class="list-group list-group-flush">
                    
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="f-w-2 f-h-2 d-block rounded-circle bg-info me-2"></span> Marketing
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">60%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-info" style="width: 60%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="f-w-2 f-h-2 d-block rounded-circle bg-warning me-2"></span> Sales
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">70%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-warning" style="width: 70%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="70"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="f-w-2 f-h-2 d-block rounded-circle bg-success me-2"></span> Development
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">50%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-success" style="width: 50%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="f-w-2 f-h-2 d-block rounded-circle bg-danger me-2"></span> SEO
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">80%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-danger" style="width: 80%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="80"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="row gx-5 d-flex align-items-center">
                                                <div class="col-6 text-white d-flex align-items-center">
                                                    <span class="f-w-2 f-h-2 d-block rounded-circle bg-warning me-2"></span> Design
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="d-flex justify-content-end flex-grow-1 flex-column">
                                                        <div class="d-flex justify-content-end small text-white mb-1">65%</div>
                                                        <div class="progress d-flex flex-grow-1 f-h-1">
                                                            <div class="progress-bar bg-warning" style="width: 65%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="65"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                    
                                    </ul>
                                </div>
                                <!-- / Tab Tomorro Content-->
                    
                                </div>
                                <!-- / Tab Content-->
                    
                        </div>
                    </div>
                </div>
                <!-- / Budget Summary-->

            </div>
            <!-- Top Row Widgets-->

            <!-- Middle Row Widgets-->
            <div class="row g-4 mb-4">

                <!-- Activity Widget-->
                <div class="col-12 col-lg-4">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0">Recent activity</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownActivity" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownActivity">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                    
                                <li class="list-group-item list-group-activity py-3 d-flex align-items-start">
                                    <picture class="mt-1 avatar avatar-xs me-4">
                                        <img src="./assets/images/profile-small-7.jpeg" alt="">
                                    </picture>
                                    <div>
                                        <p class="text-white mb-1">John Doe</p>
                                        <span class="small d-block">Submitted quarterly marketing report for review.</span>
                                        <span class="small d-block">5m ago</span>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-activity py-3 d-flex align-items-start">
                                    <picture class="mt-1 avatar avatar-xs me-4">
                                        <img src="./assets/images/profile-small-2.jpeg" alt="">
                                    </picture>
                                    <div>
                                        <p class="text-white mb-1">Sally Field</p>
                                        <span class="small d-block">Marked project status as completed.</span>
                                        <span class="small d-block">1h ago</span>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-activity py-3 d-flex align-items-start">
                                    <picture class="mt-1 avatar avatar-xs me-4">
                                        <img src="./assets/images/profile-small-3.jpeg" alt="">
                                    </picture>
                                    <div>
                                        <p class="text-white mb-1">Mark Robinson</p>
                                        <span class="small d-block">Created new sales report export.</span>
                                        <span class="small d-block">2h ago</span>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-activity py-3 d-flex align-items-start">
                                    <picture class="mt-1 avatar avatar-xs me-4">
                                        <img src="./assets/images/profile-small-4.jpeg" alt="">
                                    </picture>
                                    <div>
                                        <p class="text-white mb-1">Jeffrey Way</p>
                                        <span class="small d-block">Set user status as &#x27;offline&#x27;</span>
                                        <span class="small d-block">6h ago</span>
                                    </div>
                                </li>
                    
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- / Activity Widget-->

                <!-- Goals Widget-->
                <div class="col-12 col-lg-4">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0">Goals</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownGoals" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownGoals">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                    
                            <div class="mt-3">
                                <div class="form-check goal d-flex align-items-start mb-3 ps-0">
                                    <input id="goal-0"
                                        class="form-check-input m-0 d-flex align-self-start me-3 mt-1 cursor-pointer" type="checkbox"
                                            checked>
                                    <label class="m-0 d-flex cursor-pointer align-self-start form-check-label"
                                        for="goal-0">Submit yearly sales report for group review</label>
                                </div>
                                <div class="form-check goal d-flex align-items-start mb-3 ps-0">
                                    <input id="goal-1"
                                        class="form-check-input m-0 d-flex align-self-start me-3 mt-1 cursor-pointer" type="checkbox"
                                        >
                                    <label class="m-0 d-flex cursor-pointer align-self-start form-check-label"
                                        for="goal-1">Do API V2 review with dev team</label>
                                </div>
                                <div class="form-check goal d-flex align-items-start mb-3 ps-0">
                                    <input id="goal-2"
                                        class="form-check-input m-0 d-flex align-self-start me-3 mt-1 cursor-pointer" type="checkbox"
                                        >
                                    <label class="m-0 d-flex cursor-pointer align-self-start form-check-label"
                                        for="goal-2">Review dashboard redesign with Sarah</label>
                                </div>
                                <div class="form-check goal d-flex align-items-start mb-3 ps-0">
                                    <input id="goal-3"
                                        class="form-check-input m-0 d-flex align-self-start me-3 mt-1 cursor-pointer" type="checkbox"
                                        >
                                    <label class="m-0 d-flex cursor-pointer align-self-start form-check-label"
                                        for="goal-3">Generate 10% more sales leads through social media</label>
                                </div>
                                <div class="form-check goal d-flex align-items-start mb-3 ps-0">
                                    <input id="goal-4"
                                        class="form-check-input m-0 d-flex align-self-start me-3 mt-1 cursor-pointer" type="checkbox"
                                            checked>
                                    <label class="m-0 d-flex cursor-pointer align-self-start form-check-label"
                                        for="goal-4">Increase main site pageviews by 25%</label>
                                </div>
                                <div class="form-check goal d-flex align-items-start mb-3 ps-0">
                                    <input id="goal-5"
                                        class="form-check-input m-0 d-flex align-self-start me-3 mt-1 cursor-pointer" type="checkbox"
                                        >
                                    <label class="m-0 d-flex cursor-pointer align-self-start form-check-label"
                                        for="goal-5">Weekly code review with dev team</label>
                                </div>
                                <div class="form-check goal d-flex align-items-start mb-3 ps-0">
                                    <input id="goal-6"
                                        class="form-check-input m-0 d-flex align-self-start me-3 mt-1 cursor-pointer" type="checkbox"
                                        >
                                    <label class="m-0 d-flex cursor-pointer align-self-start form-check-label"
                                        for="goal-6">Finish specification for subscription module</label>
                                </div>
                            </div>
                    
                        </div>
                    
                        <!--  Card Footer -->
                        <div class="card-footer">
                    
                            <div class="row align-items-center">
                    
                                <!-- New Goal Input -->
                                <div class="col">
                                    <textarea class="form-control" rows="1" placeholder="Add new goal"></textarea>
                                </div>
                                <!-- /New Goal Input -->
                    
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-primary">
                                        Create
                                    </button>
                                </div>
                    
                            </div>
                        </div>
                        <!-- / Card Footer-->
                    
                    </div>
                </div>
                <!-- / Goals Widget-->

                <!-- Reminders Widget-->
                <div class="col-12 col-lg-4">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0">Reminders</h6>
                        </div>
                        <div class="card-body">
                    
                            <ul class="list-group list-group-flush">
                    
                                <li class="list-group-item d-flex align-items-center justify-content-between">
                    
                                    <div class="d-flex align-items-start">
                                        <button class="btn btn-icon bg-danger-faded text-danger me-3">
                                            <i class="ri-alert-line"></i>
                                        </button>
                                        <div>
                                            <p class="fw-bolder mb-2 text-white">Annual sales report due</p>
                                            <span class="small d-flex align-items-center"><i class="ri-calendar-line me-2"></i> 21st Aug, 2021</span>
                                        </div>
                                    </div>
                    
                                    <div class="dropdown ms-5">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropDownReminder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownReminder-0">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between">
                    
                                    <div class="d-flex align-items-start">
                                        <button class="btn btn-icon bg-warning-faded text-warning me-3">
                                            <i class="ri-user-line"></i>
                                        </button>
                                        <div>
                                            <p class="fw-bolder mb-2 text-white">Quarterly staff reviews</p>
                                            <span class="small d-flex align-items-center"><i class="ri-calendar-line me-2"></i> 24th Aug, 2021</span>
                                        </div>
                                    </div>
                    
                                    <div class="dropdown ms-5">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropDownReminder-1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownReminder-1">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between">
                    
                                    <div class="d-flex align-items-start">
                                        <button class="btn btn-icon bg-info-faded text-info me-3">
                                            <i class="ri-user-line"></i>
                                        </button>
                                        <div>
                                            <p class="fw-bolder mb-2 text-white">Jenny Smith holiday</p>
                                            <span class="small d-flex align-items-center"><i class="ri-calendar-line me-2"></i> 27th Aug, 2021</span>
                                        </div>
                                    </div>
                    
                                    <div class="dropdown ms-5">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropDownReminder-2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownReminder-2">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between">
                    
                                    <div class="d-flex align-items-start">
                                        <button class="btn btn-icon bg-secondary-faded text-secondary me-3">
                                            <i class="ri-computer-line"></i>
                                        </button>
                                        <div>
                                            <p class="fw-bolder mb-2 text-white">Marketing budget review</p>
                                            <span class="small d-flex align-items-center"><i class="ri-calendar-line me-2"></i> 2nd Sep, 2021</span>
                                        </div>
                                    </div>
                    
                                    <div class="dropdown ms-5">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropDownReminder-3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownReminder-3">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between">
                    
                                    <div class="d-flex align-items-start">
                                        <button class="btn btn-icon bg-secondary-faded text-secondary me-3">
                                            <i class="ri-computer-line"></i>
                                        </button>
                                        <div>
                                            <p class="fw-bolder mb-2 text-white">Developer contract renewal</p>
                                            <span class="small d-flex align-items-center"><i class="ri-calendar-line me-2"></i> 10th Sep, 2021</span>
                                        </div>
                                    </div>
                    
                                    <div class="dropdown ms-5">
                                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                            id="dropDownReminder-4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-line"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown dropdown-menu-end" aria-labelledby="dropDownReminder-4">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </li>
                    
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- / Reminders Widget-->

                <!-- Sales By Region Widget-->
                <div class="col-12 col-lg-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Sales by region</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart chart-lg">
                                <canvas id="chartSalesRegion"></canvas>
                            </div>
                    
                            <div class="row g-1 mt-4">
                    
                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <p class="fw-bolder mb-1">$103,456</p>
                                    <div class="d-flex align-items-center">
                                        <span class="dot dot-xs bg-warning d-block me-2"></span>
                                        <span class="small text-muted">USA</span>
                                    </div>
                                </div>
                    
                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <p class="fw-bolder mb-1">$123,325</p>
                                    <div class="d-flex align-items-center">
                                        <span class="dot dot-xs bg-success d-block me-2"></span>
                                        <span class="small text-muted">Europe</span>
                                    </div>
                                </div>
                    
                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <p class="fw-bolder mb-1">$148,899</p>
                                    <div class="d-flex align-items-center">
                                        <span class="dot dot-xs bg-info d-block me-2"></span>
                                        <span class="small text-muted">Asia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                </div>
                <!--/ Sales By Region Widget-->

                <!-- Sales Conversions Widget-->
                <div class="col-12 col-lg-8">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Monthly conversion rates</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropDownConversions" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropDownConversions">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center">
                                    <h4 class="fs-3 fw-bold mb-0 me-3">55%</h4>
                                    <span class="badge bg-success-faded text-success">+ 23%</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="dot dot-xs bg-primary me-2"></span>
                                        <span class="small text-muted">2021</span>
                                    </div>
                                    <div class="d-flex align-items-center ms-4">
                                        <span class="dot dot-xs bg-light me-2"></span>
                                        <span class="small text-muted">2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart">
                                <div class="chart chart-lg">
                                    <canvas id="chartYearlyIncome"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>                </div>
                <!-- Sales Conversions Widget-->

            </div>
            <!-- Middle Row Widgets-->

            <!-- Bottom Row Widgets-->
            <div class="row g-4 mb-4">

                <!-- Projects Widget-->
                <div class="col-12">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Projects</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownProjects" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownProjects">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table m-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th class="text-end">Team</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-white">Move headquarters to London</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="dot dot-xs bg-warning me-2"></span> In progress
                                                </div>
                                            </td>
                                            <td>24th June, 2021</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="John Doe">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Sally Field">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Patrick Johnson">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Rob Waite">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                                                            alt="">
                                                    </picture>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropDownProj-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropDownProj-0">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-white">Update API to V2</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="dot dot-xs bg-success me-2"></span> Completed
                                                </div>
                                            </td>
                                            <td>18th June, 2021</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Brian Johnson">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-7.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Patty Smith">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-6.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Andrew Sully">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-5.jpeg"
                                                            alt="">
                                                    </picture>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropDownProj-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropDownProj-1">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-white">Europe marketing report</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="dot dot-xs bg-danger me-2"></span> Overdue
                                                </div>
                                            </td>
                                            <td>12th June, 2021</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Sally Field">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Jacky Nellon">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-7.jpeg"
                                                            alt="">
                                                    </picture>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropDownProj-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropDownProj-2">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-white">Year end profit loss report</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="dot dot-xs bg-warning me-2"></span> In progress
                                                </div>
                                            </td>
                                            <td>12th August, 2021</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Brian Gouldon">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-5.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Sally Field">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="John Doe">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg"
                                                            alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img" data-bs-toggle="tooltip" data-bs-placement="top" title="Rob Waite">
                                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                                                            alt="">
                                                    </picture>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropDownProj-3" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropDownProj-3">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>    
                            <nav>
                                <ul class="pagination justify-content-end mt-3 mb-0">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                                </nav>
                        </div>
                    </div>
                </div>
                <!-- / Projects Widget-->

            </div>
            <!-- Bottom Row Widgets-->

            <!-- Footer
            <footer class="  footer">
                <p class="small text-muted m-0">All rights reserved | © 2021</p>
                <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p>
            </footer> -->
            
            
            <!-- Sidebar Menu Overlay-->
            <div class="menu-overlay-bg"></div>
            <!-- / Sidebar Menu Overlay-->
            
            <!-- Modal Imports-->
            <!-- Place your modal imports here-->
            
            <!-- Default Example Modal Import-->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Here goes modal body content
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Offcanvas Imports-->
            <!-- Place your offcanvas imports here-->
            
            <!-- Default Example Offcanvas Import-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            <!-- Navbar Notifications offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications"
                aria-labelledby="offcanvasNotificationsLabel">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
            
                <!-- Notification-->
                <div class="d-flex justify-content-start align-items-start p-3 rounded bg-light mb-3">
                    <div class="position-relative mt-1 ">
                    <picture class="avatar avatar-sm">
                        <img src="./assets/images/profile-small-2.jpeg"
                        alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <span
                    class="dot bg-success avatar-dot border-light dot-sm"></span>
                    </div>
                    <div class="ms-4">
                    <p class="fw-bolder mb-1">John Jackson</p>
                    <p class="text-muted small mb-0">Just sent over regional sales. If you can let me know by the end...</p>
                    <span class="fs-xs fw-bolder text-muted text-uppercase">5 mins ago</span>
                    </div>
                </div>
                <!-- / Notification-->
            
                <!-- Notification-->
                <div class="d-flex justify-content-start align-items-start p-3 rounded bg-light mb-3">
                    <div class="position-relative mt-1 ">
                    <picture class="avatar avatar-sm">
                        <img src="./assets/images/profile-small-3.jpeg"
                        alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <span
                    class="dot bg-success avatar-dot border-light dot-sm"></span>
                    </div>
                    <div class="ms-4">
                    <p class="fw-bolder mb-1">Peter Smith</p>
                    <p class="text-muted small mb-0">Hi Rob, can we setup a meeting for tomorrow around 2pm...</p>
                    <span class="fs-xs fw-bolder text-muted text-uppercase">30 mins ago</span>
                    </div>
                </div>
                <!-- / Notification-->
            
                <!-- Notification-->
                <div class="d-flex justify-content-start align-items-start p-3 rounded bg-light mb-3">
                    <div class="position-relative mt-1 ">
                    <picture class="avatar avatar-sm">
                        <img src="./assets/images/profile-small-4.jpeg"
                        alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <span
                    class="dot bg-danger avatar-dot border-light dot-sm"></span>
                    </div>
                    <div class="ms-4">
                    <p class="fw-bolder mb-1">Helen Lewis</p>
                    <p class="text-muted small mb-0">Need to arrange for this year's Office lisences. Have to add two team licenses...</p>
                    <span class="fs-xs fw-bolder text-muted text-uppercase">43 mins ago</span>
                    </div>
                </div>
                <!-- / Notification-->
            
                <!-- View all Btn-->
                <a href="#" class="btn btn-outline-secondary w-100 mt-4" role="button">View all notifications</a>
                <!-- / View all btn-->
            
                </div>
            </div>            <!-- / Footer-->

        </section>
        <!-- / Content-->

    </main>
    <!-- /Page Content -->
@endsection
