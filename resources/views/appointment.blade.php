@extends('dashlayouts.layout')

@section('body')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <!-- Page Title Header Starts-->
      <div class="row page-title-header">
        <div class="col-12">
          <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
              <ul class="quick-links">
                <li><a href="#">ICE Market data</a></li>
                <li><a href="#">Own analysis</a></li>
                <li><a href="#">Historic market data</a></li>
              </ul>
              <ul class="quick-links ml-auto">
                <li><a href="#">Settings</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Watchlist</a></li>
              </ul>
            </div>
          </div>
        </div>


        
        <div class="col-md-12">
          <div class="page-header-toolbar">
            <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
              <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
              <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
            </div>
            <div class="filter-wrapper">
              <div class="dropdown toolbar-item">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                  <a class="dropdown-item" href="#">Last Day</a>
                  <a class="dropdown-item" href="#">Last Month</a>
                  <a class="dropdown-item" href="#">Last Year</a>
                </div>
              </div>
              <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
            </div>
            <div class="sort-wrapper">
             
              <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                <div class="dropdown-menu" aria-labelledby="dropdownexport">
                  <a class="dropdown-item" href="#">Export as PDF</a>
                  <a class="dropdown-item" href="#">Export as DOCX</a>
                  <a class="dropdown-item" href="#">Export as CDR</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Title Header Ends-->
      <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Schedule a Doctor's Appointment</h4>
                {{-- <p class="card-description"> </p> --}}
              


              
              <div class="card-body">
                {{-- <h4 class="card-title">Selectize</h4> --}}

                <form action="{{route('bookAppointment')}}" method="post">
                  @csrf

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Doctor</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                    <option>Dr Osy Onah 1</option>
                    <option>Dr Wiily Onah</option>
                    <option>Dr Eze Ugwuoke</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Date</label>
                  <input type="date">
                  
                  <select class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect3">Time</label>
                  <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

              </form>


                <button type="button" class="btn btn-primary toolbar-item">Pay</button>
              </div>
            </div>
          </div>

      </div>



    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- partial -->


    @endsection
