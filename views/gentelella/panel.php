<?php 
use yiister\gentelella\widgets\Panel;

?>
<div class="row">
    <div class="col-md-4 col-xs-12">
        <?php
        Panel::begin()
        ?>
        <p>There is a text on panel. It is a minimal that may be</p>
        <?php Panel::end() ?>
    </div>
    <div class="col-md-4 col-xs-12">
        <?php
        Panel::begin(
            [
                'header' => 'Panel example',
            ]
        )
        ?>
        <p>Same panel with a header text.</p>
        <?php Panel::end() ?>
    </div>
    <div class="col-md-4 col-xs-12">
        <?php
        Panel::begin(
            [
                'header' => 'Another panel example',
                'icon' => 'cog',
            ]
        )
        ?>
        <p>Same panel with an icon.</p>
        <?php Panel::end() ?>
    </div>
</div>