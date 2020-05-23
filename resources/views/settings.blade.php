@extends('layouts.master')

@section('title')
Settings
@endsection

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/settings.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('content')
<div class="container" style="padding: 0px 40px 0px 40px">
    <div class="settings-card">
        <div class="row">
            <div class="col-3 ml-5" style="font-size : 24px; color: #EB4E6F; font-weight: bold;">
                Settings
            </div>
            <div class="col-9">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <ul class="settings-menu" role="tablist">
                        <a class="settings-item" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                        <hr>
                        <a class="settings-item" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="false">General</a>
                        <hr>
                        <a class="settings-item" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="false">Notifications</a>
                        <hr>
                        <a class="settings-item" id="v-pills-privacy-tab" data-toggle="pill" href="#v-pills-privacy" role="tab" aria-controls="v-pills-privacy" aria-selected="false">Privacy Policy</a>
                        <hr>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row ml-5" style="font-size : 24px; color: #EB4E6F; font-weight: bold;">
                            Profile
                        </div>
                        <div class="row">
                            <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-pic-settings" alt="Profile Picture">
                        </div>
                        <div class="row mt-3" style="margin : auto; width: 30%">
                            <input type="file" name="" value="">
                        </div>
                        <div class="row mt-3">
                            <div class="col-1">

                            </div>
                            <div class="col-3" class="edit-input-label">
                                <label for="fullname" class="edit-input-label">Full Name : </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="fullname" class="edit-input" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-1">

                            </div>
                            <div class="col-3" class="edit-input-label">
                                <label for="bio" class="edit-input-label">Biography : </label>
                            </div>
                            <div class="col-8">
                                <textarea class="edit-input" placeholder="Biography" name="bio" rows="4" cols="80"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <button type="button" name="button" class="update-btn">Update</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                        <div class="row ml-5" style="font-size : 24px; color: #EB4E6F; font-weight: bold;">
                            General
                        </div>
                        <div class="row mt-3">
                            <div class="col-1">

                            </div>
                            <div class="col-3" class="edit-input-label">
                                <label for="password" class="edit-input-label">Password :  </label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password" class="edit-input" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4" class="edit-input-label">
                                <label for="cpassword" class="edit-input-label">Confirm Password :  </label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="cpassword" class="edit-input" placeholder="Re-enter Password">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <button type="button" name="button" class="update-btn">Update</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                        <div class="row ml-5" style="font-size : 24px; color: #EB4E6F; font-weight: bold;">
                            Notifications
                        </div>
                        <div class="row mt-3">
                            <div class="col-7" class="edit-input-label">
                                <label for="password" class="edit-input-label">Allow Notifications ?  </label>
                            </div>
                            <div class="col-4">
                                <label class="switch" style="margin-top: 12px;">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-7" class="edit-input-label">
                                <label for="password" class="edit-input-label">Notify when the person you follow post?  </label>
                            </div>
                            <div class="col-4">
                                <label class="switch" style="margin-top: 12px;">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-7" class="edit-input-label">
                                <label for="password" class="edit-input-label"> Notify Trending?  </label>
                            </div>
                            <div class="col-4">
                                <label class="switch" style="margin-top: 12px;">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab"> Privacy </div>
                </div>
            </div>
        </div>
    </div>

@endsection
