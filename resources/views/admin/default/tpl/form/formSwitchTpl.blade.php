@if(isset($form_tpl_item['remove']) && $form_tpl_item['remove'])
@else
    @if($form_tpl_item['type']=='custorm')
        {{--//完全自定义模板--}}
        @include('admin.default.'.$form_tpl_item['custorm_blade'])
    @else


        @if($form_tpl_item['type']!='hidden')

            @if(isset($is_search) && $is_search==1)
                <div class="input-group mb-2 mr-2">
                    @else
                        <div class="form-group">
                            @endif
                            @include('admin.default.tpl.form.label',['form_item'=>$form_tpl_item,'is_search'=>$is_search??0 ])
                            @switch($form_tpl_item['type'])
                                @case('text')
                                @case('type')
                                @case('email')
                                @case('number')
                                @case('date')
                                @case('datetime')
                                @include('admin.default.tpl.form.text',['form_item'=>$form_tpl_item])
                                @break
                                @case('select')
                                @include('admin.default.tpl.form.select',['form_item'=>$form_tpl_item])
                                @break
                                @case('textarea')
                                @include('admin.default.tpl.form.textarea',['form_item'=>$form_tpl_item])
                                @break
                                @case('radio')
                                @include('admin.default.tpl.form.radio',['form_item'=>$form_tpl_item])
                                @break
                                @case('checkbox')
                                @include('admin.default.tpl.form.checkbox',['form_item'=>$form_tpl_item])
                                @break
                                @case('editor')
                                @include('admin.default.tpl.form.textarea',['form_item'=>$form_tpl_item])
                                @break
                                @case('img')
                                @include('admin.default.tpl.form.img',['form_item'=>$form_tpl_item])
                                @break
                                @case('imgMore')
                                @include('admin.default.tpl.form.imgMore',['form_item'=>$form_tpl_item])
                                @break
                                @case('icon')
                                @include('admin.default.tpl.form.icon',['form_item'=>$form_tpl_item])
                                @break
                                @case('color')
                                @include('admin.default.tpl.form.color',['form_item'=>$form_tpl_item])
                                @break
                                @case('blade')
                                @include('admin.default.'.$form_tpl_item['blade_name'],['form_item'=>$form_tpl_item])
                                @break
                                @case('map')
                                @include('admin.default.tpl.form.map',['form_item'=>$form_tpl_item])
                                @break

                            @endswitch
                            @if(isset($is_search) && $is_search==1)
                        </div>
                        @else
                </div>
            @endif


        @else
            @include('admin.default.tpl.form.text',['form_item'=>$form_tpl_item])
        @endif
    @endif
@endif
