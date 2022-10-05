@extends('template.master')

@section('main-content')
      <!-- Page Content -->
  <main id="main">

    <!-- Content-->
    <section class="container-fluid">

      <!-- Breadcrumbs-->
      <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html"><i class="ri-home-line align-bottom me-1"></i> Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tables</li>
          </ol>
      </nav>      <!-- / Breadcrumbs-->

      <!-- Page Title-->
      <h2 class="fs-4 mb-2">Tables</h2>
      <p class=" mb-4">Examples for opt-in styling of tables.</p>
      <!-- / Page Title-->

      <div class="row g-4">
        <div class="col-12 col-md-6">

          <!-- Example-->
          <div class="card mb-4">
            <div class="card-header">
              <h6 class="card-title">Default example</h6>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /Example-->

        </div>

        <div class="col-12 col-md-6">

          <!--  Example-->
          <div class="card mb-4">
            <div class="card-header">
              <h6 class="card-title">Striped row</h6>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- / Example-->


        </div>
      </div>


      <!-- Footer -->
      <!-- <footer class="  footer">
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
      </div>      <!-- / Footer-->

    </section>
    <!-- / Content-->

  </main>
  <!-- /Page Content -->
@endsection