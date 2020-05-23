@extends('layouts.master')

@section('title')
    Home
@endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/feed.css') }}">
@endsection

@section('content')
    <!-- Middle Column (Main) -->
    <div class="col-12 col-xl-8" style="padding: 0px 40px 0px 40px">
        <!-- Create Post -->
        <div class="row">
            <div class="create-post-card">
                <b style="padding-left: 10px; color:#EB4E6F ;font-size: 20px;">Create Post</b>
                <br>
                <input class="post-title-input" type="text" placeholder="Post Title">
                <textarea class="create-post-input mt-2" name="name" placeholder="What's on your mind?"></textarea>
                <button type="button" name="button" class="add-photo-btn"><i class="fas fa-camera"></i> Add Photo </button>
                <button type="button" name="button" class="create-post-btn">Add Post</button>
            </div>
        </div>
        <!-- Post 1 -->
        <div class="row">
            <div class="post-card">
                <div class="row">
                    <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-thumb" alt="Profile Picture">
                    <b class="post-profile-name">Phone Myat Khine</b>
                    <span class="post-time">2 hours ago</span>
                    <!-- Update Edit -->
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="color: gray; right: 90px; position: absolute; margin-top: 12px;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="position: absolute; margin-left : 180px; margin-top : -10px;">
                      <a class="dropdown-item" href="#">Report</a>
                      <a class="dropdown-item" href="#" class="edit" data-toggle="modal" data-target="#editModal">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <b style="padding-left: 10px; color:#EB4E6F ;font-size: 20px;">Edit Post</b>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input class="post-title-input" type="text" placeholder="Post Title">
                                    <textarea class="create-post-input mt-2" name="name" placeholder="Post Description"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" name="button" class="create-post-btn">Edit Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Update Edit -->

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
                    <a href="#" class="view-comments" data-toggle="modal" data-target="#exampleModal">View all 69 comments</a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="overflow-y: auto; height: 400px">
                                    <!-- Comment 1 -->
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-thumb" style="margin-left: 5%" alt="Profile Picture">
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="noti-text">
                                                    <b>Kaung Khant </b> Great Photo Dude
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="noti-time">
                                                    Just Now
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- Comment 2 -->
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-thumb" style="margin-left: 5%" alt="Profile Picture">
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="noti-text">
                                                    <b>Kaung Khant </b> Great Photo Dude
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="noti-time">
                                                    Just Now
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr><!-- Comment 2 -->
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-thumb" style="margin-left: 5%" alt="Profile Picture">
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="noti-text">
                                                    <b>Kaung Khant </b> Great Photo Dude
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="noti-time">
                                                    Just Now
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr><!-- Comment 2 -->
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-thumb" style="margin-left: 5%" alt="Profile Picture">
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="noti-text">
                                                    <b>Kaung Khant </b> Great Photo Dude
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="noti-time">
                                                    Just Now
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr><!-- Comment 2 -->
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{ URL::asset('img/profile/profile.jpeg') }}" class="profile-thumb" style="margin-left: 5%" alt="Profile Picture">
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="noti-text">
                                                    <b>Kaung Khant </b> Great Photo Dude
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="noti-time">
                                                    Just Now
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="modal-footer">
                                    <input class="comment-input" type="text" placeholder="Post a Comment" style="margin-left: 0px;">
                                    <span style="padding: 7px 0px 0px 10px; color:#597DFF; font-weight: bold; width: 10%; font-size: 18px;"> Post </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="comment-input" type="text" placeholder="Post a Comment">
                    <span style="padding: 7px 0px 0px 10px; color:#597DFF; font-weight: bold; width: 10%; font-size: 18px;"> Post </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Right column -->
    <div class="col-xl-4 d-none d-xl-block">
        @include('layouts.profilecard')
        @include('layouts.noticard')
    </div>
@endsection
