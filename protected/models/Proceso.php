<?php

/**
 * This is the model class for table "Proceso".
 *
 * The followings are the available columns in table 'Proceso':
 * @property string $id
 * @property string $area_did
 * @property integer $tiempo
 * @property string $estatus_did
 *
 * The followings are the available model relations:
 * @property Doctoenproceso[] $doctoenprocesos
 * @property Estatus $estatus
 * @property Area $area
 */
class Proceso extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Proceso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Proceso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_did, tiempo, estatus_did', 'required'),
			array('tiempo', 'numerical', 'integerOnly'=>true),
			array('area_did, estatus_did', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, area_did, tiempo, estatus_did', 'safe', 'on'=>'search'),
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
			'doctoenprocesos' => array(self::HAS_MANY, 'Doctoenproceso', 'proceso_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'area' => array(self::BELONGS_TO, 'Area', 'area_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'area_did' => 'Area',
			'tiempo' => 'Tiempo',
			'estatus_did' => 'Estatus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('area_did',$this->area_did,true);
		$criteria->compare('tiempo',$this->tiempo);
		$criteria->compare('estatus_did',$this->estatus_did,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}