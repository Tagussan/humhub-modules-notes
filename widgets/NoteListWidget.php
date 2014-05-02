<?php

/**
 * This widget is used to list all notes of a space
 *
 * @package humhub.modules.notes
 * @since 0.5
 */
class NoteListWidget extends HWidget {

    public $notes;
    public $space;
    /**
     * Inits, publishs required javascript resources
     */
    public function init() {
        $assetPrefix = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../resources', true, 0, defined('YII_DEBUG'));
        Yii::app()->clientScript->registerCssFile($assetPrefix . '/notes.css');
        //Yii::app()->assetManager->publish(Yii::getPathOfAlias('notes.resources'), true, 0, defined('YII_DEBUG') );
    }

    public function run() {

        $this->render('list', array(
            'notes' => $this->notes,
            'space' => $this->space,
        ));
    }
}

?>