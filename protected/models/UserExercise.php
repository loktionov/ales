<?php

/**
 * This is the model class for table "user_exercise".
 *
 * The followings are the available columns in table 'user_exercise':
 * @property integer $id
 * @property integer $user_id
 * @property integer $exercise_id
 * @property integer $start_time
 * @property integer $end_time
 * @property integer $iteration
 * @property integer $spented_time
 *
 * The followings are the available model relations:
 * @property Exercise $exercise
 * @property Users $user
 */
class UserExercise extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'user_exercise';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, exercise_id', 'required'),
            array('user_id, exercise_id, start_time, end_time, iteration, spented_time', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, exercise_id, start_time, end_time, iteration, spented_time', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'exercise' => [self::BELONGS_TO, 'Exercise', 'exercise_id'],
            'user' => [self::BELONGS_TO, 'Users', 'user_id'],
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'exercise_id' => 'Exercise',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'iteration' => 'Iteration',
            'spented_time' => 'Spented Time',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('exercise_id', $this->exercise_id);
        $criteria->compare('start_time', $this->start_time);
        $criteria->compare('end_time', $this->end_time);
        $criteria->compare('iteration', $this->iteration);
        $criteria->compare('spented_time', $this->spented_time);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UserExercise the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
