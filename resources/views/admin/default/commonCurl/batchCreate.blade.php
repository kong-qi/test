@extends('admin.default.layouts.baseCont')
@section('content')

    <form class="layui-form ui-form">
        @include('admin.default.tpl.form.form')
    </form>

@endsection
@section('foot_js')

    @include('admin.default.tpl.listenEditorCreate')

    @if(isset($footAddJavascript) && !empty($footAddJavascript))
        @includeIf($footAddJavascript)
    @endif
@endsection