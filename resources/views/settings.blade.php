<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title">Settings</h4>
    </div>
</div>
<!--End Page header-->

<!--Row-->

<div class="row gutters-xs">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="row gutters-xs">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card prof-details">
                    <form class="row gutters-0">
                        <div class="col-xl-3 col-lg-4 col-md-12">
                            <div class="pfp-box">
                                <img id="profileImage" src="{{ $user->img }}" alt="" style="width: 100%; height: auto;">
                                <button type="button" id="userProfileBtn" class="btn btn-white" onclick="document.querySelector('#userImage').click()">Change Image</button>
                                <input type="file" name="userImage" id="userImage" style="display:none;" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="userId" id="userId" value="{{ $user->id }}">
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-12">
                            <div class="pfp-dets">
                                <div class="row justify-content-between">
                                    <h2>Profile Details</h2>
                                    <a id="settingsSaveBtn" class="btn btn-primary disabled">Save Changes</a>
                                </div>
                                <div class="row gutters-sm">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="row gutters-sm">
                                            <div class="col-xl-6 col-lg-12 col-md-12">
                                                <div class="input-group mb-3 login-input-holder">
                                                    <span class="input-group-addon">
                                                        <svg class="svg-icon"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="20.742" height="20.742"
                                                            viewBox="0 0 20.742 20.742">
                                                            <g id="vuesax_outline_frame"
                                                                data-name="vuesax/outline/frame"
                                                                transform="translate(-108 -252)">
                                                                <g id="frame"
                                                                    transform="translate(108 252)">
                                                                    <path id="Vector"
                                                                        d="M4.624,8.962H4.555a.469.469,0,0,0-.156,0,4.447,4.447,0,1,1,.251,0ZM4.485,1.3a3.186,3.186,0,0,0-.121,6.37,1.427,1.427,0,0,1,.277,0A3.187,3.187,0,0,0,4.485,1.3Z"
                                                                        transform="translate(5.885 1.08)"
                                                                        fill="#ecdfc9" />
                                                                    <path id="Vector-2"
                                                                        data-name="Vector"
                                                                        d="M0,0H20.742V20.742H0Z"
                                                                        fill="none" opacity="0" />
                                                                    <path id="Vector-3"
                                                                        data-name="Vector"
                                                                        d="M6.542,8.74a8.537,8.537,0,0,1-4.684-1.3A3.709,3.709,0,0,1,0,4.375,3.747,3.747,0,0,1,1.858,1.29a9.15,9.15,0,0,1,9.369,0,3.729,3.729,0,0,1,1.858,3.068,3.747,3.747,0,0,1-1.858,3.085A8.558,8.558,0,0,1,6.542,8.74ZM2.575,2.379A2.485,2.485,0,0,0,1.3,4.384,2.48,2.48,0,0,0,2.575,6.372a7.81,7.81,0,0,0,7.934,0,2.485,2.485,0,0,0,1.279-2.005,2.48,2.48,0,0,0-1.279-1.988A7.851,7.851,0,0,0,2.575,2.379Z"
                                                                        transform="translate(3.975 10.749)"
                                                                        fill="#ecdfc9" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="text" class="form-control"
                                                        placeholder="First Name" id="settingsFName" value="{{ $user->fname }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12">
                                                <div class="input-group mb-3 login-input-holder">
                                                    <span class="input-group-addon">
                                                        <svg class="svg-icon"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="20.742" height="20.742"
                                                            viewBox="0 0 20.742 20.742">
                                                            <g id="vuesax_outline_frame"
                                                                data-name="vuesax/outline/frame"
                                                                transform="translate(-108 -252)">
                                                                <g id="frame"
                                                                    transform="translate(108 252)">
                                                                    <path id="Vector"
                                                                        d="M4.624,8.962H4.555a.469.469,0,0,0-.156,0,4.447,4.447,0,1,1,.251,0ZM4.485,1.3a3.186,3.186,0,0,0-.121,6.37,1.427,1.427,0,0,1,.277,0A3.187,3.187,0,0,0,4.485,1.3Z"
                                                                        transform="translate(5.885 1.08)"
                                                                        fill="#ecdfc9" />
                                                                    <path id="Vector-2"
                                                                        data-name="Vector"
                                                                        d="M0,0H20.742V20.742H0Z"
                                                                        fill="none" opacity="0" />
                                                                    <path id="Vector-3"
                                                                        data-name="Vector"
                                                                        d="M6.542,8.74a8.537,8.537,0,0,1-4.684-1.3A3.709,3.709,0,0,1,0,4.375,3.747,3.747,0,0,1,1.858,1.29a9.15,9.15,0,0,1,9.369,0,3.729,3.729,0,0,1,1.858,3.068,3.747,3.747,0,0,1-1.858,3.085A8.558,8.558,0,0,1,6.542,8.74ZM2.575,2.379A2.485,2.485,0,0,0,1.3,4.384,2.48,2.48,0,0,0,2.575,6.372a7.81,7.81,0,0,0,7.934,0,2.485,2.485,0,0,0,1.279-2.005,2.48,2.48,0,0,0-1.279-1.988A7.851,7.851,0,0,0,2.575,2.379Z"
                                                                        transform="translate(3.975 10.749)"
                                                                        fill="#ecdfc9" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Last Name" id="settingsLName" value="{{ $user->lname }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 login-input-holder">
                                            <span class="input-group-addon">
                                                <svg class="svg-icon" id="mobile"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20.742" height="20.742"
                                                    viewBox="0 0 20.742 20.742">
                                                    <path id="Vector"
                                                        d="M10.155,18.581H4.969C1.158,18.581,0,17.423,0,13.612V4.969C0,1.158,1.158,0,4.969,0h5.185c3.811,0,4.969,1.158,4.969,4.969v8.642C15.124,17.423,13.966,18.581,10.155,18.581ZM4.969,1.3C1.875,1.3,1.3,1.884,1.3,4.969v8.642c0,3.085.579,3.673,3.673,3.673h5.185c3.094,0,3.673-.588,3.673-3.673V4.969c0-3.085-.579-3.673-3.673-3.673Z"
                                                        transform="translate(2.809 1.08)"
                                                        fill="#ecdfc9" />
                                                    <path id="Vector-2" data-name="Vector"
                                                        d="M4.105,1.3H.648A.653.653,0,0,1,0,.648.653.653,0,0,1,.648,0H4.105a.653.653,0,0,1,.648.648A.653.653,0,0,1,4.105,1.3Z"
                                                        transform="translate(7.994 4.105)"
                                                        fill="#ecdfc9" />
                                                    <path id="Vector-3" data-name="Vector"
                                                        d="M1.988,3.975A1.988,1.988,0,1,1,3.975,1.988,1.988,1.988,0,0,1,1.988,3.975Zm0-2.688a.691.691,0,1,0,.691.691A.693.693,0,0,0,1.988,1.288Z"
                                                        transform="translate(8.383 13.188)"
                                                        fill="#ecdfc9" />
                                                    <path id="Vector-4" data-name="Vector"
                                                        d="M0,0H20.742V20.742H0Z" fill="none"
                                                        opacity="0" />
                                                </svg>
                                            </span>
                                            <input type="tel" class="form-control"
                                                placeholder="Phone" id="settingsPhone" value="{{ $user->phone }}">
                                        </div>
                                        <div class="input-group mb-3 login-input-holder">
                                            <span class="input-group-addon">
                                                <svg class="svg-icon"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20.096" height="20.096"
                                                    viewBox="0 0 20.096 20.096">
                                                    <g id="vuesax_outline_sms"
                                                        data-name="vuesax/outline/sms"
                                                        transform="translate(-11)">
                                                        <g id="sms" transform="translate(11)">
                                                            <path id="Vector"
                                                                d="M13.188,15.491H4.815C1.758,15.491,0,13.732,0,10.676V4.815C0,1.758,1.758,0,4.815,0h8.373C16.244,0,18,1.758,18,4.815v5.861C18,13.732,16.244,15.491,13.188,15.491ZM4.815,1.256c-2.395,0-3.559,1.164-3.559,3.559v5.861c0,2.395,1.164,3.559,3.559,3.559h8.373c2.395,0,3.559-1.164,3.559-3.559V4.815c0-2.395-1.164-3.559-3.559-3.559Z"
                                                                transform="translate(1.047 2.303)"
                                                                fill="#ecdfc9"></path>
                                                            <path id="Vector-2" data-name="Vector"
                                                                d="M4.817,3.873a3.113,3.113,0,0,1-1.959-.661L.237,1.119a.626.626,0,0,1,.779-.98L3.636,2.232a2,2,0,0,0,2.353,0L8.61.139a.618.618,0,0,1,.879.1.618.618,0,0,1-.1.879L6.768,3.212A3.073,3.073,0,0,1,4.817,3.873Z"
                                                                transform="translate(5.231 6.903)"
                                                                fill="#ecdfc9"></path>
                                                            <path id="Vector-3" data-name="Vector"
                                                                d="M0,0H20.1V20.1H0Z" fill="none"
                                                                opacity="0">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="email" class="form-control"
                                                placeholder="Email" id="settingsEmail" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon">


                                                <svg class="svg-icon" id="Group_15732"
                                                    data-name="Group 15732"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="22.157" height="22.157"
                                                    viewBox="0 0 22.157 22.157">
                                                    <g id="vuesax_linear_lock"
                                                        data-name="vuesax/linear/lock">
                                                        <g id="lock">
                                                            <path id="Vector"
                                                                d="M0,0H22.157V22.157H0Z"
                                                                fill="none" opacity="0"></path>
                                                        </g>
                                                    </g>
                                                    <path id="Vector-2" data-name="Vector"
                                                        d="M11.078,8.136a.75.75,0,0,1-.75-.75V5.539a5.359,5.359,0,0,0-.873-3.445C8.727,1.19,7.446.75,5.539.75s-3.188.44-3.917,1.344A5.359,5.359,0,0,0,.75,5.539V7.386a.75.75,0,0,1-.75.75.75.75,0,0,1-.75-.75V5.539C-.75,2.839-.1-.75,5.539-.75s6.289,3.589,6.289,6.289V7.386A.75.75,0,0,1,11.078,8.136Z"
                                                        transform="translate(5.539 1.846)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-3" data-name="Vector"
                                                        d="M13.848,11.828H4.616c-2.188,0-3.411-.331-4.223-1.143S-.75,8.65-.75,6.462V4.616C-.75,2.428-.419,1.2.393.393S2.428-.75,4.616-.75h9.232c2.188,0,3.411.331,4.223,1.143s1.143,2.035,1.143,4.223V6.462c0,2.188-.331,3.411-1.143,4.223S16.036,11.828,13.848,11.828ZM4.616.75c-1.724,0-2.669.21-3.162.7S.75,2.892.75,4.616V6.462c0,1.724.21,2.669.7,3.162s1.439.7,3.162.7h9.232c1.724,0,2.669-.21,3.162-.7s.7-1.439.7-3.162V4.616c0-1.724-.21-2.669-.7-3.162s-1.439-.7-3.162-.7Z"
                                                        transform="translate(1.846 9.232)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-4" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(14.273 14.271)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-5" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(10.58 14.271)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-6" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(6.886 14.271)"
                                                        fill="#ecdfc9"></path>
                                                </svg>



                                            </span>
                                            <input type="password" class="form-control"
                                                placeholder="Old Password" id="settingsOldPassword">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon">


                                                <svg class="svg-icon" id="Group_15732"
                                                    data-name="Group 15732"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="22.157" height="22.157"
                                                    viewBox="0 0 22.157 22.157">
                                                    <g id="vuesax_linear_lock"
                                                        data-name="vuesax/linear/lock">
                                                        <g id="lock">
                                                            <path id="Vector"
                                                                d="M0,0H22.157V22.157H0Z"
                                                                fill="none" opacity="0"></path>
                                                        </g>
                                                    </g>
                                                    <path id="Vector-2" data-name="Vector"
                                                        d="M11.078,8.136a.75.75,0,0,1-.75-.75V5.539a5.359,5.359,0,0,0-.873-3.445C8.727,1.19,7.446.75,5.539.75s-3.188.44-3.917,1.344A5.359,5.359,0,0,0,.75,5.539V7.386a.75.75,0,0,1-.75.75.75.75,0,0,1-.75-.75V5.539C-.75,2.839-.1-.75,5.539-.75s6.289,3.589,6.289,6.289V7.386A.75.75,0,0,1,11.078,8.136Z"
                                                        transform="translate(5.539 1.846)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-3" data-name="Vector"
                                                        d="M13.848,11.828H4.616c-2.188,0-3.411-.331-4.223-1.143S-.75,8.65-.75,6.462V4.616C-.75,2.428-.419,1.2.393.393S2.428-.75,4.616-.75h9.232c2.188,0,3.411.331,4.223,1.143s1.143,2.035,1.143,4.223V6.462c0,2.188-.331,3.411-1.143,4.223S16.036,11.828,13.848,11.828ZM4.616.75c-1.724,0-2.669.21-3.162.7S.75,2.892.75,4.616V6.462c0,1.724.21,2.669.7,3.162s1.439.7,3.162.7h9.232c1.724,0,2.669-.21,3.162-.7s.7-1.439.7-3.162V4.616c0-1.724-.21-2.669-.7-3.162s-1.439-.7-3.162-.7Z"
                                                        transform="translate(1.846 9.232)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-4" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(14.273 14.271)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-5" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(10.58 14.271)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-6" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(6.886 14.271)"
                                                        fill="#ecdfc9"></path>
                                                </svg>



                                            </span>
                                            <input type="password" class="form-control"
                                                placeholder="New Password" id="settingsNewPassword">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon">


                                                <svg class="svg-icon" id="Group_15732"
                                                    data-name="Group 15732"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="22.157" height="22.157"
                                                    viewBox="0 0 22.157 22.157">
                                                    <g id="vuesax_linear_lock"
                                                        data-name="vuesax/linear/lock">
                                                        <g id="lock">
                                                            <path id="Vector"
                                                                d="M0,0H22.157V22.157H0Z"
                                                                fill="none" opacity="0"></path>
                                                        </g>
                                                    </g>
                                                    <path id="Vector-2" data-name="Vector"
                                                        d="M11.078,8.136a.75.75,0,0,1-.75-.75V5.539a5.359,5.359,0,0,0-.873-3.445C8.727,1.19,7.446.75,5.539.75s-3.188.44-3.917,1.344A5.359,5.359,0,0,0,.75,5.539V7.386a.75.75,0,0,1-.75.75.75.75,0,0,1-.75-.75V5.539C-.75,2.839-.1-.75,5.539-.75s6.289,3.589,6.289,6.289V7.386A.75.75,0,0,1,11.078,8.136Z"
                                                        transform="translate(5.539 1.846)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-3" data-name="Vector"
                                                        d="M13.848,11.828H4.616c-2.188,0-3.411-.331-4.223-1.143S-.75,8.65-.75,6.462V4.616C-.75,2.428-.419,1.2.393.393S2.428-.75,4.616-.75h9.232c2.188,0,3.411.331,4.223,1.143s1.143,2.035,1.143,4.223V6.462c0,2.188-.331,3.411-1.143,4.223S16.036,11.828,13.848,11.828ZM4.616.75c-1.724,0-2.669.21-3.162.7S.75,2.892.75,4.616V6.462c0,1.724.21,2.669.7,3.162s1.439.7,3.162.7h9.232c1.724,0,2.669-.21,3.162-.7s.7-1.439.7-3.162V4.616c0-1.724-.21-2.669-.7-3.162s-1.439-.7-3.162-.7Z"
                                                        transform="translate(1.846 9.232)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-4" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(14.273 14.271)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-5" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(10.58 14.271)"
                                                        fill="#ecdfc9"></path>
                                                    <path id="Vector-6" data-name="Vector"
                                                        d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z"
                                                        transform="translate(6.886 14.271)"
                                                        fill="#ecdfc9"></path>
                                                </svg>



                                            </span>
                                            <input type="password" class="form-control"
                                                placeholder="Confirm New Password" id="settingsConfirmNewPassword">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row gutters-xs">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="row gutters-xs">
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                <div class="card setting-box">
                    <div class="card-body">
                        <div class="set-card-ico">
                            <img src="assets/images/set-ic1.png" alt="">
                        </div>
                        <h3>App User</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                <div class="card setting-box">
                    <div class="card-body">
                        <div class="set-card-ico">
                            <img src="assets/images/set-ic2.png" alt="">
                        </div>
                        <h3>Help</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card setting-box">
                    <div class="card-body">
                        <div class="set-card-ico">
                            <img src="assets/images/set-ic3.png" alt="">
                        </div>
                        <h3>Privacy Policy</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('settingsForm');
        const saveBtn = document.getElementById('settingsSaveBtn');
        const fields = {
            fname: document.getElementById('settingsFName'),
            lname: document.getElementById('settingsLName'),
            phone: document.getElementById('settingsPhone'),
            email: document.getElementById('settingsEmail'),
            oldPassword: document.getElementById('settingsOldPassword'),
            newPassword: document.getElementById('settingsNewPassword'),
            confirmNewPassword: document.getElementById('settingsConfirmNewPassword')
        };

        const validateField = (field, regex, errorMessage) => {
            if (!regex.test(field.value)) {
                field.classList.add('is-invalid');
                if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('invalid-feedback')) {
                    const feedback = document.createElement('div');
                    feedback.classList.add('invalid-feedback');
                    feedback.textContent = errorMessage;
                    field.parentNode.insertBefore(feedback, field.nextSibling);
                }
                return false;
            } else {
                field.classList.remove('is-invalid');
                if (field.nextElementSibling && field.nextElementSibling.classList.contains('invalid-feedback')) {
                    field.nextElementSibling.remove();
                }
                return true;
            }
        };

        const validateForm = () => {
            let isValid = true;

            isValid &= validateField(fields.fname, /^[a-zA-Z]{2,30}$/, 'First name must be 2-30 characters long and contain only letters.');
            isValid &= validateField(fields.lname, /^[a-zA-Z]{2,30}$/, 'Last name must be 2-30 characters long and contain only letters.');
            isValid &= validateField(fields.phone, /^\+?[0-9]{10,14}$/, 'Please enter a valid phone number.');
            isValid &= validateField(fields.email, /^[^\s@]+@[^\s@]+\.[^\s@]+$/, 'Please enter a valid email address.');

            if (fields.oldPassword.value || fields.newPassword.value || fields.confirmNewPassword.value) {
                isValid &= validateField(fields.oldPassword, /.{8,}/, 'Old password must be at least 8 characters long.');
                isValid &= validateField(fields.newPassword, /.{8,}/, 'New password must be at least 8 characters long.');
                isValid &= validateField(fields.confirmNewPassword, new RegExp(`^${fields.newPassword.value}$`), 'Passwords do not match.');
            }

            saveBtn.classList.toggle('disabled', !isValid);
            return isValid;
        };

        Object.values(fields).forEach(field => {
            field.addEventListener('input', validateForm);
        });

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (validateForm()) {
                // Perform form submission
                console.log('Form is valid. Submitting...');
            }
        });
    });
</script>





@endsection