<div class="open-icon input-group" id="{{ md5($form_item['field']) }}">

        @php
            $form_item['type'] = 'hidden';
            $form_item['attr'] = $form_item['attr']. ' readonly';
            $form_item['addClass']= $form_item['addClass'].' upload-area-input';
        @endphp
        @include('admin.default.tpl.form.text',['form_item'=>$form_item])

    <div class="input-group-prepend">
        <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-more="0"
           data-event="iconPlace" data-target="#{{ (md5($form_item['field']))}}">
            <i class="fas fa fa-cloud"></i>
            {{ ('选择图标')}}</a>
    </div>

    <div class="iupload-area-img-show mb-2 ml-2 text-secondary f16 w-100 {{($form_item['value'] ? '' : 'd-none') }}"><i class="{{$form_item['value'] }}"></i></div>



</div>
