<div class="radio-tips form-control radio-area" data-tips="{{ $form_item['tips']??'' }}" id="{{ $form_item['id']??'' }}">
    @if( isset($form_item['data']) && !empty($form_item['data']))
        @foreach($form_item['data'] as $k=>$v)
            <div class="custom-control custom-radio custom-control-inline">
            <input lay-filter="{{ $form_item['filter']??'' }}" type="radio"
                   name="{{ $form_item['field']??'' }}" {{  ($v['id'] == $form_item['value'] ? 'checked' : '') }}
                   lay-verify="{{ $form_item['verify']??'' }}" class="custom-control-input {{ $form_item['addClass'] }}"
                   value="{{ $v['id'] }}"  {{ $form_item['attr']??'' }}
                   id="{{ $form_item['field'] }}{{ $v['id']??'' }}" title="{{ lang($v['name']) }}"
                   autocomplete="off" />
                <label class="custom-control-label" for="{{  ($form_item['field']) . $v['id']}}">{{ lang($v['name']) }}</label>
            </div>


        @endforeach
    @endif



</div>