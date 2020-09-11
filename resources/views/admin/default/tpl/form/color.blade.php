
@php
    $form_item['event'] = 'color';
    $form_item['type'] = 'text';
    $form_item['attr'] =$form_item['attr']. ' data-obj=color-input-'.$form_item['id'];
@endphp

<div class=" input-group">
    @include('admin.default.tpl.form.text',['form_item'=>$form_item])
    <div class="input-group-prepend">
        <div class="color-warp"  id="color-input-{{ $form_item['id'] }}"></div>
    </div>

</div>

