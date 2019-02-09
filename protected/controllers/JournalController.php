<?php

class JournalController extends Controller
{

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',
                'users' => array('@'),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex()
    {
        $currentTasks = new CActiveDataProvider(UserExercise::class);
        $currentTasks->setCriteria(
            new CDbCriteria(
                [
                    'condition' => 'user_id = :userId AND end_time IS NULL',
                    'params' => [':userId' => Yii::app()->user->id],
                ]
            )
        );
        $performedTasks = new CActiveDataProvider(UserExercise::class);
        $performedTasks->setCriteria(
            new CDbCriteria(
                [
                    'condition' => 'user_id = :userId AND end_time IS NOT NULL',
                    'params' => [':userId' => Yii::app()->user->id],
                ]
            )
        );
        $this->render('index', ['currentTasks' => $currentTasks, 'performedTasks' => $performedTasks]);
    }

    public function actionCreate()
    {
        $task = Exercise::model()->with('userTask')->find(['condition' => 'userTask.id IS NULL', 'order' => 't.level, t.id']);
        if ($task === null) {
            throw new Exception('Нет новых заданий');
        }
        $userTask = new UserExercise();
        $userTask->exercise_id = $task->id;
        $userTask->user_id = Yii::app()->user->id;
        $userTask->save();
        $this->redirect('index');
    }

    public function actionStartTask($taskId)
    {
        $task = $this->loadModel($taskId);
        $task->start_time = time();
        $task->save(true, ['start_time']);
        $this->redirect('index');
    }

    public function actionEndTask($taskId)
    {
        $task = $this->loadModel($taskId);
        $task->end_time = time();
        $task->save(true, ['end_time']);
        $this->redirect('index');
    }

    public function loadModel($id)
    {
        $model = UserExercise::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}