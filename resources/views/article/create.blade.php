<?php
use Encore\Admin\Widgets\Form;
use Encore\Admin\Widgets\Box;



//$form = new Form();
//$form->text('name', '输入框');
//echo $form->render();

$box = new Box('Box标题', 'Box内容');

$box->removable();

$box->collapsable();

$box->style('info');

$box->solid();

echo $box;

?>



