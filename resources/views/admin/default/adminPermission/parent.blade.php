{{--
<select name="parent_id" class="form-control" lay-ignore="">
    <option value="0">{{ lang('根级') }}</option>
    @if(!empty($permissions))
        @foreach($permissions as $perm)
            <option value="{{$perm['id']}}" {{ isset($show->id) && $perm['id'] == $show->parent_id ? 'selected' : '' }} >{{$perm['cn_name']}}</option>
            @if(isset($perm['_child']))
                @foreach($perm['_child'] as $childs)
                    <option value="{{$childs['id']}}" {{ isset($show->id) && $childs['id'] == $show->parent_id ? 'selected' : '' }} >
                        ----{{$childs['cn_name']}}</option>
                    @if(isset($childs['_child']))
                        @foreach($childs['_child'] as $lastChilds)
                            <option value="{{$lastChilds['id']}}" {{ isset($show->id) && $lastChilds['id'] == $show->parent_id ? 'selected' : '' }} >
                                --------{{$lastChilds['cn_name']}}</option>
                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
    @endif
</select>--}}
<div id="menuEditParentSel" class="ew-xmselect-tree"></div>
<input type="hidden" name="parent_id" lay-verify="rq" value="{{ $show['parent_id']??'' }}" id="parent_id" data-tips="{{ lang('请选择上级') }}">