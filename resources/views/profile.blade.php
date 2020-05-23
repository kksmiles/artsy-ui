@extends('layouts.master')

@section('title')
    Home
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/feed.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('content')
    <div class="col-12 col-xl-8" style="padding: 0px 40px 0px 40px">
        <div class="row">
            <div class="profile-card">
                <div class="container">
                    <div class="row">
                        <img src="{{ URL::asset('img/profile/cover.jpeg') }}" class="cover-pic-main" alt="Profile Picture">
                        <br>
                        <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-pic-main" alt="Profile Picture">
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="follow-box">
                                    <div class="row" style="width: 100%">
                                        <div class="col-4">
                                            <div class="row mt-2">
                                                <b class="follow-txt">13</b>
                                            </div>
                                            <div class="row mt-1">
                                                <span class="follow-txt">Posts</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row mt-2">
                                                <b class="follow-txt">255</b>
                                            </div>
                                            <div class="row mt-1">
                                                <span class="follow-txt">Followers</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row mt-2">
                                                <b class="follow-txt">255</b>
                                            </div>
                                            <div class="row mt-1">
                                                <span class="follow-txt">Following</span>
                                            </div>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button class="follow-btn" type="button" name="button">Follow</button>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row mt-5">
                        <h1 class="profile-name-main">Zwe Wint Tee</h1>
                    </div>
                    <div class="row mt-2 ml-4">
                        <div class="job-chip">
                            <i class="fas fa-graduation-cap"></i> Student
                        </div>
                        <div class="job-chip">
                            <i class="fas fa-graduation-cap"></i> Student
                        </div>
                    </div>
                    <div class="row mt-4">
                        <p class="profile-bio">
                            Curious, Open-minded. Looking to learn more.
                            Just a student at University of Information Technology learning Computer Science
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post 1 -->
        <div class="row mt-2">
            <div class="post-card">
                <div class="row">
                    <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-thumb" alt="Profile Picture">
                    <b class="post-profile-name">Zwe Wint Tee</b>
                    <span class="post-time">2 hours ago</span>
                    <i class="fas fa-ellipsis-v" style="color: gray; right: 90px; position: absolute; margin-top: 12px;"></i>
                </div>
                <div class="row mt-3">
                    <img src="{{ URL::asset('img/profile/cover.jpeg') }}" class="post-pic" alt="Profile Picture">
                </div>
                <div class="row mt-3">
                    <a href="#" class="like-btn"><i class="far fa-thumbs-up"></i>  220 </a>
                    <!-- FOR LIKED <i class="fas fa-thumbs-up"></i> -->
                    <a href="#" class="like-btn"><i class="far fa-comment-alt"></i> 60 </a>
                    <a href="#"  class="like-btn"><i class="fas fa-share-square"></i> 57 </a>
                </div>
                <div class="row mt-3">
                    <h1 class="post-title">A great view</h1>
                    <p class="post-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div class="row">
                    <input class="comment-input" type="text" placeholder="Post a Comment">
                    <span style="padding: 7px 0px 0px 10px; color:#597DFF; font-weight: bold; width: 10%; font-size: 18px;"> Post </span>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-4 d-none d-xl-block">
        @include('layouts.noticard')
    </div>
@endsection
