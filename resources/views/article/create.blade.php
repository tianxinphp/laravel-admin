<?php
use Encore\Admin\Widgets\Form;


$Form=new Form;
//echo $Form->textarea('editormd_id','markdown')->rows(10)->setWidth(12,0);
echo $Form->html('你的html内容',  ['label' => 'editormd_id', 'field' => '', 'form-group' => '']);

?>
{{--<div id="editormd_id">--}}
    {{--<textarea style="display:none;">### Hello Editor.md !</textarea>--}}
{{--</div>--}}



