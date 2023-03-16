
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
              <button type="button" class="btn btn-primary toolbar-item">New</button>
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
              <button type="button" class="btn btn-primary toolbar-item">New</button>
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
     



    
 <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description"> Add class <code>.table</code> </p>
        <table class="table">
          <thead>
            <tr>
              <th>Profile</th>
              <th>VatNo.</th>
              <th>Created</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jacob</td>
              <td>53275531</td>
              <td>12 May 2017</td>
              <td>
                <label class="badge badge-danger">Pending</label>
              </td>
            </tr>
            <tr>
              <td>Messsy</td>
              <td>53275532</td>
              <td>15 May 2017</td>
              <td>
                <label class="badge badge-warning">In progress</label>
              </td>
            </tr>
            <tr>
              <td>John</td>
              <td>53275533</td>
              <td>14 May 2017</td>
              <td>
                <label class="badge badge-info">Fixed</label>
              </td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>53275534</td>
              <td>16 May 2017</td>
              <td>
                <label class="badge badge-success">Completed</label>
              </td>
            </tr>
            <tr>
              <td>Dave</td>
              <td>53275535</td>
              <td>20 May 2017</td>
              <td>
                <label class="badge badge-warning">In progress</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
      </div>


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © codefi.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from codefi.com.ng</span>
      </div>
    </footer>
    <!-- partial -->


    @endsection
























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





























