<?php $this->widget('application.modules.notes.widgets.NoteFormWidget', array('contentContainer' => $this->getSpace())); ?>
<?php $this->widget('application.modules.notes.widgets.NoteListWidget', array('notes' => $notes, 'space' => $this->getSpace())); ?>


