@extends('plugin.blog.front.layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <div class="col-md-3 col-xl-3 bd-sidebar">
                <div class="card shadow">
                    <div class="card-header">
                        我的会员
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            @include('plugin.blog.front.layouts.userList',['user_list'=>pn_blog_user_list(10)])
                        </ul>
                    </div>
                </div>


            </div>
            <div class="col-md-9 col-xl-8  pl-md-5 bd-content">
                <div class="card shadow">
                    <div class="card-header">
                        文章
                    </div>
                    <div class="card-body">
                        @include('plugin.blog.front.layouts.list',['list'=>$list])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection