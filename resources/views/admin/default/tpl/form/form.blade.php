@if(isset($form_tpl) && !empty($form_tpl))


    @if($form_tpl['is_group'])
        <div class="card " >
            <div class="card-header">
                <div class="nav nav-tabs  card-header-tabs" role="tablist">
                    @foreach($form_tpl['data'] as $form_key=>$form_item)
                        <a class="nav-item nav-link {{ $form_key==0?'active':'' }}" id="nav-home-tab" data-toggle="tab" href="#input-nav-{{ $form_key }}">{{ $form_item['name'] }}</a>
                    @endforeach
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                    @foreach($form_tpl['data'] as $form_key_t=>$form_item_t)
                        <div class="tab-pane fade  {{ $form_key_t==0?'active show':'' }}" id="input-nav-{{ $form_key_t }}">
                            @foreach($form_item_t['data'] as $form_key=>$form_item)
                                @if(isset($form_item['remove']) && $form_item['remove']==1)
                                    @continue
                                @endif
                                @include('admin.default.tpl.form.formSwitchTpl',['form_tpl_item'=>$form_item])
                            @endforeach
                        </div>


                    @endforeach

                </div>

                <div class="mt-35  {{ $showSubmit??'d-none' }}">
                    <button class="btn btn-primary" type="button" lay-submit="" lay-filter="LAY-form-submit"
                            id="LAY-form-submit">{{ lang('提交') }}</button>
                </div>

            </div>

        </div>
    @else
        <div class="card " >
            <div class="card-body">
                @foreach($form_tpl['data'] as $form_key=>$form_item)
                    @if(isset($form_item['remove']) && $form_item['remove']==1)
                        @continue
                    @endif
                    @include('admin.default.tpl.form.formSwitchTpl',['form_tpl_item'=>$form_item])
                @endforeach
                    <div class="mt-35 {{ $showSubmit??'d-none' }}">
                        <button class="btn btn-primary" type="button" lay-submit="" lay-filter="LAY-form-submit"
                                id="LAY-form-submit">{{ lang('提交') }}</button>
                    </div>
            </div>
        </div>





    @endif

@endif
