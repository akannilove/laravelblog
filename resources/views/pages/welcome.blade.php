@extends('main')
@section('content')
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron">
                    <h1>Welcome to my blog</h1>
                    <p class="lead">Thank you so much for visiting. This is my test website with Laravel, please read my latest posts!</p>
                    <p><a href="#" class="btn btn-primary btn-lg" role="button">Popular post</a></p>
                </div>
            </div>
        </div> <!-- end of header row -->
        <div class="row">
            <div class="col-sm-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse...</p>
                    <a href="#" class="btn btn-primary" role="button">Read more</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse...</p>
                    <a href="#" class="btn btn-primary" role="button">Read more</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse...</p>
                    <a href="#" class="btn btn-primary" role="button">Read more</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse...</p>
                    <a href="#" class="btn btn-primary" role="button">Read more</a>
                </div>
            </div>

            <div class="col-sm-3 col-sm-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
   @endsection