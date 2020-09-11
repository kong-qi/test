@extends('admin.default.layouts.base')

@section('body')
    <body id="page-top">
    @endsection
    @section('content')
        <div id="wrapper">
            @include('admin.default.layouts.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                @include('admin.default.layouts.top')
                <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    <div class="layui-body layout-content" id="admin-app-body">
                        <div class="admin-tabs-body-item layui-show">

                            <iframe src="{{ nroute('admin.home') }}" frameborder="0" class="admin-iframe"></iframe>

                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->


            </div>
        </div>

    @endsection

    @section('foot_js')
        <script>
            layui.extend({
                admin: '/admin' //附加入库
            }).use('cacheNav',function(){
              var cacheNav=layui.cacheNav;
              cacheNav.cacheName="admin_nav";//设置导航的缓存名称，如果多个后台应用，更改这个名称即可
            }).use('admin') //加载入口


        </script>
@endsection
