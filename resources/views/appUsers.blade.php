<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'App Users')

@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title">App Users</h4>
    </div>
</div>
<!--End Page header-->

<!--Row-->
<div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog"
    aria-labelledby="userDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light" style="padding: 10px;">
            <div class="modal-header" style="border: none;
    padding: 0;
    margin-bottom: 20px;">
                <h5 class="modal-title text-light" id="userDetailsModalLabel">User Details</h5>
                <button type="button" class="close text-light" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="    padding: 10px;
    background: #ffffff17; border-radius:8px;">
                <div class="form-group" style="margin-bottom: 0px;">
                    <label for="userName" id="appUserModelName" class="text-light">Name</label>
                    <p id="userName" class="text-secondary"></p>
                </div>
                <div class="form-group" style="margin-bottom: 0px;">
                    <label for="userEmail" id="appUserModelEmail" class="text-light">Email</label>
                    <p id="userEmail" class="text-secondary"></p>
                </div>
                <div class="form-group" style="margin-bottom: 0px;">
                    <label for="userPhone" id="appUserModelPhone" class="text-light mb-0">Phone</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row gutters-xs">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="row gutters-xs">
            <div class="col-xl-9 col-lg-8 col-md-12">
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
            <div class="col-xl-3 col-lg-4 col-md-12 gutters-0 gr-height">
                <div class="col-xl-12 col-lg-12 col-md-12">
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
                <div class="col-xl-12 col-lg-12 col-md-12">
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
        </div>
    </div>
</div>

@endsection