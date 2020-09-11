<div {{ $form_item['attr']??'' }} class="radio-tips form-control checkbox-area h-auto" id="{{ $form_item['id'] }}" data-tips="{{ ($form_item['tips']) }}">


    <div class="custom-control custom-checkbox custom-control-inline" data-tips="{{ $form_item['tips']??'' }}">
        @if( isset($form_item['data']) && !empty($form_item['data']))
            @foreach($form_item['data'] as $k=>$v)


                <input lay-filter="{{ $form_item['filter']??'' }}" type="checkbox"
                       name="{{ $form_item['field']??'' }}[]" {{  ($v['id'] == $form_item['value'] ? 'checked' : '') }}
                       lay-verify="{{ $form_item['verify']??'' }}" class="custom-control-input {{ $form_item['addClass'] }}"
                       value="{{ $v['id'] }}" {{ $form_item['attr']??'' }}
                       id="{{ $form_item['field'] }}{{ $v['id']??'' }}" title="{{ lang($v['name']) }}"
                       autocomplete="off" />
                <label class="custom-control-label" for="{{($form_item['field']) . $v['id'] }}">{{($v['name']) }}</label>
            @endforeach
        @endif


    </div>
</div>