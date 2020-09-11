<div class="table-responsive">
    <div class="mb-2 mt-2 "
         style="{{ isset($index_handle_btn_number)?'width:'.($index_handle_btn_number*100).'px':"" }}">
        <div class="btn-group">
            @if(!empty($index_handle_btn_tpl))
                @foreach($index_handle_btn_tpl as $k=>$v)
                    @if(isset($v['custorm']) && !empty($v['custorm']))
                        {{--自定义模板--}}
                        @include('admin.default.'.$v['custorm'],['handle_btn_tpl'=>$v])
                    @else
                        @include('admin.default.tpl.form.button',['handle_btn_tpl'=>$v])
                    @endif

                @endforeach
            @endif
        </div>
    </div>
</div>