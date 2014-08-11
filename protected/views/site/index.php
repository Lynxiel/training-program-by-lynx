<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php echo TbHtml::carousel(array(
    array('image' => 'images/1.jpg', 'label' => 'First Thumbnail label', 'caption' => '...'),
    array('image' => 'images/2.jpg', 'label' => 'Second Thumbnail label', 'caption' => '...'),
    array('image' => 'images/5.jpg', 'label' => 'Third Thumbnail label', 'caption' => '...'),
)); ?>
<div class="content_container">
    <!---- statements ------>
    <div class="statements">
        <div id="statement" class="span2">
            <h4>Lorem ipsum </h4>
                <p>
                    Mauris nec sollicitudin metus, id cursus erat. Aliquam et felis ut ante auctor lacinia.
                    Suspendisse fermentum, dolor in accumsan consequat, augue purus mollis nullas tortor.
                </p>
        </div>
        <div id="statement" class="span2">
            <h4>Lorem ipsum </h4>
            <p>
                Mauris nec sollicitudin metus, id cursus erat. Aliquam et felis ut ante auctor lacinia.
                Suspendisse fermentum, dolor in accumsan consequat, augue purus mollis nullas tortor.
            </p>
        </div>
        <div id="statement" class="span2">
            <h4>Lorem ipsum </h4>
            <p>
                Mauris nec sollicitudin metus, id cursus erat. Aliquam et felis ut ante auctor lacinia.
                Suspendisse fermentum, dolor in accumsan consequat, augue purus mollis nullas tortor.
            </p>
        </div>
        <div id="statement" class="span2">
            <h4>Lorem ipsum </h4>
            <p>
                Mauris nec sollicitudin metus, id cursus erat. Aliquam et felis ut ante auctor lacinia.
                Suspendisse fermentum, dolor in accumsan consequat, augue purus mollis nullas tortor.
            </p>
        </div>
    </div>

    <!---- mind ------>
    <div class="mind">
        <div class="mind_content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Mauris nec sollicitudin metus, id cursus erat.</p>
            <button type="button" id="learn_more" class="btn btn-default">Learn More</button>
        </div>
    </div>

    <!---- gallery------>
    <div></div>

    <!---- social------>
    <div></div>

    <!---- footer ------>
    <div></div>

    <!---- copyright ------>
    <div></div>

</div>