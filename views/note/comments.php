<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-body">

            <?php $this->widget('application.modules_core.comment.widgets.CommentsWidget', array('modelName' => 'Note', 'modelId' => $id)); ?>

        </div>
        <div class="modal-footer">

            <button type="button" class="btn btn-primary"
                    data-dismiss="modal"><?php echo Yii::t('base', 'Close'); ?></button>

        </div>

    </div>

</div>


<script type="text/javascript">



</script>