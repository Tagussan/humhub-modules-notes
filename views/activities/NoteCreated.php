<?php $this->beginContent('application.modules_core.activity.views.activityLayout', array('activity' => $activity)); ?>

<strong><?php echo $user->displayName; ?></strong>
<?php echo Yii::t('NotesModule.base', 'created a new note'); ?> "<i><?php echo Helpers::truncateText($target->title, 25); ?></i>".

<?php $this->endContent(); ?>

