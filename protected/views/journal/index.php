<?php
/* @var $this JournalController */
/* @var $currentTasks CActiveDataProvider */
/* @var $performedTasks CActiveDataProvider */


if (empty($currentTasks->getTotalItemCount())) : ?>
    <form action="<?= Yii::app()->createAbsoluteUrl('journal/create'); ?>">
        <button type="submit" class="btn btn-success btn-lg pull-right">Начать новое задание</button>
    </form>
<?php endif; ?>

<H2>Текущее задание</H2>

<div id="current-exercise">
    <?php

    if ($currentTasks->getTotalItemCount() > 0) :
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $currentTasks,
            'itemView' => '_view',
            'template' => "{items}",
        ));

    else : ?>

        <div class="empty-block">
            Текущих заданий нет... <a href="<?= Yii::app()->createAbsoluteUrl('journal/create'); ?>">взять?</a>
        </div>

    <?php endif; ?>

</div>

<H4>Выполненные задания</H4>

<div id="done-exercise">

    <?php

    if ($performedTasks->getTotalItemCount() > 0) :
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $performedTasks,
            'itemView' => '_view',
            'summaryText' => "Задачи {start} - {end} из {count}",
        ));

    else : ?>

        <div class="empty-block">
            Выполненных заданий пока нет...
        </div>

    <?php endif; ?>

</div>