<?php
/**
 * This view represents a wall entry of a note.
 * Used by NoteWallEntryWidget to show Notes inside a wall.
 *
 * @property User $user the user which created this post
 * @property Note $note the current note
 * @property Space $space the current space
 *
 * @package humhub.modules.notes
 * @since 0.5
 */
?>

<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->beginContent('application.modules_core.wall.views.wallLayout', array('object' => $note)); ?>

        <div class="media note-entry">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?php echo Yii::app()->getModule('notes')->assetsUrl; ?>/notes-logo72x72.png" style="width: 72px; height: 72px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $note->title; ?></h4>

                <!-- show snippet of the note content -->
                <?php
                foreach (array_slice(explode("\n", $note->getPadContent()), 0, 4) as $line) {
                    echo Helpers::truncateText($line, 75);
                }
                ?>
                <br/>
                <a href="<?php echo Yii::app()->createUrl('notes/note/open', array('id' => $note->id, 'guid' => $space->guid)); ?>"
                   class="btn btn-primary btn-notes"><?php echo Yii::t('NotesModule.base', 'Open note'); ?></a>

            </div>
        </div>
        <hr/>
        <?php $this->endContent(); ?>
    </div>
</div>


