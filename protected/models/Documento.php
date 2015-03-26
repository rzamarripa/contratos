<?php

/**
 * This is the model class for table "Documento".
 *
 * The followings are the available columns in table 'Documento':
 * @property string $id
 * @property string $fecha_f
 * @property string $proveedor
 * @property string $areaGeneradora_did
 * @property string $estatus_did
 * @property string $tiempoValidez
 *
 * The followings are the available model relations:
 * @property Doctoenproceso[] $doctoenprocesos
 * @property Estatus $estatus
 * @property Areageneradora $areaGeneradora
 */
class Documento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Documento the static model class
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
		return 'Documento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_f, proveedor, areaGeneradora_did, estatus_did, tiempoValidez', 'required'),
			array('proveedor', 'length', 'max'=>30),
			array('areaGeneradora_did, estatus_did', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fecha_f, proveedor, areaGeneradora_did, estatus_did, tiempoValidez', 'safe', 'on'=>'search'),
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
			'doctoenprocesos' => array(self::HAS_MANY, 'Doctoenproceso', 'documento_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'areaGeneradora' => array(self::BELONGS_TO, 'Areageneradora', 'areaGeneradora_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha_f' => 'Fecha F',
			'proveedor' => 'Proveedor',
			'areaGeneradora_did' => 'Area Generadora',
			'estatus_did' => 'Estatus',
			'tiempoValidez' => 'Fecha en que caduca',
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
		$criteria->compare('fecha_f',$this->fecha_f,true);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('areaGeneradora_did',$this->areaGeneradora_did,true);
		$criteria->compare('estatus_did',$this->estatus_did,true);
		$criteria->compare('tiempoValidez',$this->tiempoValidez,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}