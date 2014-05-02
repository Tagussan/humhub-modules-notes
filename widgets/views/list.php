<div class="panel panel-default">
    <div class="panel-body">
        <?php //print_r($notes); ?>
        <table class="table">
            <thead>
            <tr>
                <th width="30"></th>
                <th>Title</th>
                <th>Editors</th>
                <th width="150">Last changes</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($notes as $note) : ?>
                <tr>
                    <td><img src="<?php echo Yii::app()->getModule('notes')->assetsUrl; ?>/notes-logo16x16.png" alt=""/></td>
                    <td>
                        <a href="<?php echo Yii::app()->createUrl('notes/note/open', array('id' => $note->id, 'guid' => $space->guid, 'history' => '//' . Yii::app()->controller->module->id . "/" . Yii::app()->getController()->id . "/" . Yii::app()->controller->action->id)); ?>"><?php echo $note->title; ?></a>
                    </td>
                    <td>
                        <?php $editors = $note->getPadUser(); ?>

                        <?php if (count($editors) > 1) { ?>

                            <?php foreach ($editors as $editor) : ?>

                                <a href="<?php echo $editor['url']; ?>">
                                    <img src="<?php echo $editor['image']; ?>" class="img-rounded tt img_margin"
                                         height="22" width="22" alt="22x22" data-src="holder.js/22x22"
                                         style="width: 22px; height: 22px; <?php if ($editor['online'] == "false" || $editor['id'] == Yii::app()->user->id) { ?>opacity: 0.5;<?php } ?>"
                                         data-toggle="tooltip" data-placement="top" title=""
                                         data-original-title="<strong><?php echo $editor['displayName']; ?></strong><br><?php echo $editor['title']; ?> <?php if ($editor['online'] == "true" && $editor['id'] != Yii::app()->user->id) { ?>(Online)<?php } ?>">
                                </a>

                            <?php endforeach; ?>

                        <?php } ?>
                    </td>
                    <td><?php echo HHtml::timeago($note->updated_at); ?></td>
                    <td>
                        <?php
                        echo CHtml::link('<i class="icon-comments" ></i>', $this->createUrl('//notes/note/getcomments', array('id' => $note->id)), array('class' => '', 'data-toggle' => 'modal', 'data-target' => '#globalModal'));
                        ?>


                    </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


