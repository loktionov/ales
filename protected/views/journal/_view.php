<?php
/* @var $this JournalController */

use helpers\DateTimeHelper;

/* @var $data UserExercise */
?>

<div class="view">

    <b>
        <?php echo CHtml::encode($data->exercise->name); ?>
    </b>
    <br/>
    <br/>

    <b>
        <?php echo CHtml::encode($data->exercise->description); ?>
    </b>
    <br/>
    <br/>
    <div>
        <?php
        if (empty($data->start_time)) : ?>
            <form action="<?= Yii::app()->createAbsoluteUrl('journal/startTask') ?>">
                <button type="submit" class="btn btn-success btn-lg" name="taskId"
                        value="<?= $data->id; ?>">Начать
                </button>
            </form>
        <?php elseif (empty($data->end_time)): ?>
            Начато: <?= Yii::app()->dateFormatter->formatDateTime($data->start_time); ?>
            <br/>
            Прошло: <?= DateTimeHelper::getSecondsToTimeString(time() - $data->start_time); ?>
            <br/>
            <div style="display: flow-root;"> <?php //Хак для того чтоб конпка не вылезала из блока ?>
                <form action="<?= Yii::app()->createAbsoluteUrl('journal/endTask') ?>">
                    <button type="submit" class="btn btn-success btn-lg pull-right" name="taskId" value="<?= $data->id; ?>">
                        Завершить
                    </button>
                </form>
            </div>
        <?php else: ?>
            Начато: <?= Yii::app()->dateFormatter->formatDateTime($data->start_time); ?>
            <br/>
            Завершено: <?= Yii::app()->dateFormatter->formatDateTime($data->end_time); ?>
            <br/>
            За: <?= DateTimeHelper::getSecondsToTimeString($data->end_time - $data->start_time); ?>
        <?php endif; ?>
    </div>
</div>