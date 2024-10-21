<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title">Dashboard</h4>
    </div>
</div>
<!--End Page header-->

<!--Row-->
<div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog"
    aria-labelledby="userDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-light" id="userDetailsModalLabel">User Details</h5>
                <button type="button" class="close text-light" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label for="userName" id="appUserModelName" class="text-light">Name</label>
                    <p id="userName" class="text-secondary"></p>
                </div>
                <div class="form-group">
                    <label for="userEmail" id="appUserModelEmail" class="text-light">Email</label>
                    <p id="userEmail" class="text-secondary"></p>
                </div>
                <div class="form-group">
                    <label for="userPhone" id="appUserModelPhone" class="text-light">Phone</label>
                    <p id="userPhone" class="text-secondary">+</p>
                </div>
            </div>

            <div class="modal-footer border-secondary">
                <button type="button" class="btn btn-outline-light"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="row gutters-sm">
    <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="card setting-box trop-card">
            <div class="card-body">
                <div class="trop-card-cntnt">
                    <h2>Congratulations Mike!</h2>
                    <b>You reached to</b>
                    <span>10K</span>
                    <b>Downloads</b>
                    <p>You have done 100% reached target today.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card setting-box trop-cell">
            <div class="card-body">
                <div class="set-card-ico">
                    <img src="assets/images/trop-ico.png" alt="">
                </div>
                <p>Total Downloads</p>
                <span>100K</span>
                <p>This Month</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card setting-box trop-cell">
            <div class="card-body">
                <div class="set-card-ico">
                    <img src="assets/images/set-ic1.png" alt="">
                </div>
                <p>Total Downloads</p>
                <span>100K</span>
                <p>This Month</p>
            </div>
        </div>
    </div>
</div>

<div class="row gutters-xs">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Logs</h3>
                <div class="card-options">

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="appUsersTable" class="table table-bordered text-nowrap"
                        style="width:100%">
                        <thead>
                            <tr class="bold">
                                <th class="border-bottom-0">S.No </th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0 text-center">Status</th>
                                <th class="border-bottom-0">User Details</th>
                            </tr>
                        </thead>
                        <tbody id="appUsersList">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection