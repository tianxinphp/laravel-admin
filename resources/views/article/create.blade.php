<?php
use Encore\Admin\Widgets\Form;



$Form=new Form;
print_r($Form->textarea('markdown')->rows(10)->getViewElementClasses());


?>



