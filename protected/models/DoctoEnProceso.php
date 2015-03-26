<?php

/**
 * This is the model class for table "DoctoEnProceso".
 *
 * The followings are the available columns in table 'DoctoEnProceso':
 * @property string $id
 * @property string $documento_did
 * @property string $proceso_did
 * @property string $fecha_ft
 * @property string $estatus_did
 */
class DoctoEnProceso extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return DoctoEnProceso the static model class
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
		return 'DoctoEnProceso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('documento_did, fecha_ft, estatus_did', 'required'),
			array('documento_did, estatus_did', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, documento_did, fecha_ft, estatus_did', 'safe', 'on'=>'search'),
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
			'documento' => array(self::BELONGS_TO, 'Documento', 'documento_did'),
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
			'documento_did' => 'Documento',
			'fecha_ft' => 'Fecha',
			'estatus_did' => 'Estatus',
			'area_did' => 'Area',
			'tiempo' => 'Tiempo',
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
		$criteria->compare('documento_did',$this->documento_did,true);
		$criteria->compare('fecha_ft',$this->fecha_ft,true);
		$criteria->compare('estatus_did',$this->estatus_did,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}