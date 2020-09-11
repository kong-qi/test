@if(isset($form_item['name']) && !empty($form_item['name'])  )
    @if(isset($is_search) && $is_search==1)
        <div class="input-group-prepend"><label class="input-group-text" for="{{ $form_item['field'] }}">{{ $form_item['name'] }}</label></div>
    @else
        @if(isset($form_item['must']) && !empty($form_item['must']) )
            <strong class="mr-1 text-danger input-must">*</strong>
        @endif
        <label class="input-label" for="{{ $form_item['field'] }}"> {{ $form_item['name'] }}</label>
        @if(isset($form_item['mark']) && !empty($form_item['mark']) )
            <span class="text-secondary pl-2 input-mark">
           ({{ $form_item['mark'] }})
        </span>
        @endif
    @endif


@endif