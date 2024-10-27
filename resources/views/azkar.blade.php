<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Azkars')

@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title">Azkar</h4>
    </div>
    <div class="page-rightheader">
        <a data-effect="effect-scale" data-toggle="modal" href="#modaldemo8" class="btn-primary btn d-flex align-items-center py-2 add-btn "
            style="gap: 5px; width: 100%; max-width: 270px; margin-left: auto; justify-content: center;">
            <svg style="width: 20px; height: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path>
            </svg>
            Add Azkar</a>
    </div>
</div>
<!--End Page header-->

<!--Row-->




<div class="modal fade" id="azkarDeleteModal" tabindex="-1" role="dialog"
    aria-labelledby="azkarDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light" style="padding: 10px;">
            <div class="modal-header" style="border: none;
    padding: 0;
    margin-bottom: 20px;">
                <h5 class="modal-title text-light" id="userDetailsModalLabel">Delete Azkar</h5>
                <button type="button" class="close text-light" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>





            <div class="modal-body" style="    padding: 10px;
    background: #ffffff17; border-radius:8px;">
                <div class="form-group">
                    <p id="azkarDeleteModal_title" style="color:white;"></p>
                </div>


                <div class="modal-footer border-secondary">
                    <button type="button" id="azkarDeleteModal_deleteBtn" class="btn btn-outline-light">Delete</button>
                </div>
                <input type="hidden" name="azkarDeleteModal_id" id="azkarDeleteModal_id">
            </div>
        </div>
    </div>
</div>


















<div class="card qari-table">
    <div class="card-header">
        <h3 class="card-title">Azkar List</h3>
        <div class="card-options">

        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="azkartable" class="table table-bordered text-nowrap" style="width:100%">
                <thead>
                    <tr class="bold">
                        <th class="border-bottom-0">S.No </th>
                        <th class="border-bottom-0 text-center">Azkar Title</th>
                        <th class="border-bottom-0 text-center">Azkar Message</th>
                        <th class="border-bottom-0 text-center">Azkar Time</th>
                        <th class="border-bottom-0 text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="azkarList">
                    <!-- <tr>
                            <td class="font-weight-bold">01</td>
                            <td>Some title</td>
                            <td class="text-center">Some description</td>
                            <td><span class="morning">Morning</span>
                            </td>
                        </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <form action="" id="addAzkarSec">
                <div class="modal-body">
                    <h6>Add Azkar</h6>
                    <div class="input-group mb-3 login-input-holder">
                        <input type="text" class="form-control" id="azkarTitle" name="title" placeholder="Azkar Title">
                    </div>
                    <div class="input-group mb-3 login-input-holder">
                        <textarea class="form-control" placeholder="Azkar Message" id="azkarMsg" name="description"></textarea>
                    </div>
                    <div class="custom-controls-stacked time-select">
                        <span>Select Time</span>
                        <div class="ts-pills">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input"
                                    name="time" value="Morning" checked="">
                                <span class="custom-control-label">Morning</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input"
                                    name="time" value="Evening">
                                <span class="custom-control-label">Evening</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-dismiss="modal" type="button">Cancel</button>
                    <button class="btn btn-indigo" id="addAzkar" type="button">Add Azkar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection