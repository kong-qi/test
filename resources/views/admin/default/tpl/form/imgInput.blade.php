<div class="upload-area" id="{{ md5($form_item['field']) }}">
    <style>
        .w250{
            width: 250px !important;
        }
    </style>
    @php
        $form_item['type'] = 'text';
        $form_item['addClass']=$form_item['addClass'].' layui-input-inline w250'
    @endphp
    @include('admin.default.tpl.form.text',['form_item'=>$form_item])



        <img ui-event="showImg" src="{{ $form_item['value'] }}"
             class="img-fluid iupload-area-img-show mb-2 {{ $form_item['value']?'':'none' }}" style="max-width: 11.5rem"
             src="" alt="">

    <div class="d-flex">


        <a href="javascript:void(0)" {{ $form_item['up_attr']??'' }}
        {{ $form_item['up_attr']??'' }}
        id="upload{{ (md5($form_item['field'])) }}"
           data-target="#{{ (md5($form_item['field'])) }}"
           data-event="upload" data-more="0"
           class="btn btn-primary btn-sm  mr-2"><i class="fas fa-upload fa-fw"></i> {{ lang('点击上传') }}</a>
        <a href="javascript:void(0)" data-more="0" data-event="uploadPlace"
           {{ $form_item['place_attr']??'' }}
           data-target="#{{ (md5($form_item['field']))  }}" class="btn btn-secondary btn-sm"><i
                    class="fas fa fa-cloud"></i> {{ lang('库选择') }}</a>
    </div>
</div>