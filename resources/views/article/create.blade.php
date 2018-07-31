<?php
use Encore\Admin\Widgets\Form;



$form = new Form();
$form->text('name', '输入框');
echo $form->render();



