<?php
use Encore\Admin\Widgets\Form;



$Form=new Form;
echo $Form->textarea('editormd_id','markdown')->rows(10)->setWidth(12,0);


?>



