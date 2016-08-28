@extends('app')

@section('title')
Мой первый сайт
@endsection


@section('About')
    <li><a href="#">Home</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
@endsection


@section('header-title')
    <h2>Blog Post Title</h2>
@endsection


@section('header-data')
    By <a href="#">Danny</a> on May 25, 2015
@endsection

@section('header-article')
    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
        officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut
        aliquip.</p>
@endsection

@section('content')
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
        et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
        et justo duo dolores et ea rebum.</p>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
        et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
        et justo duo dolores et ea rebum.</p>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
        et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
        et justo duo dolores et ea rebum.</p>@endsection

@section('comments')
    <h4>Leave a Comment:</h4>
    <form role="form">
        <div class="form-group">
                                    <textarea class="form-control" rows="3"
                                              style="margin: 0px -1px 0px 0px; width: 100%; height: 80px;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('Search')
    <h4>Search</h4>
@endsection

@section('Categories')
    <div class="col-xs-6">
        <a href="#">Category Name</a>
        <a href="#">Category Name</a>
        <a href="#">Category Name</a>
    </div>
    <div class="col-xs-6">
        <a href="#">Category Name</a>
        <a href="#">Category Name</a>
        <a href="#">Category Name</a>
    </div>
@endsection

@section('About Us')
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
        et justo duo dolores et ea rebum. </p>
@endsection

@section('footer')
    Copyright &copy; Your Website - <a href="http://www.365bootstrap.com"
                                       target="_blank">Bootstrap Themes</a> Designed
    by 365Bootstrap.com
@endsection
