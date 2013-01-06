<?php

/**
 * This is the model class for table "kullanici_site_iliski".
 *
 * The followings are the available columns in table 'kullanici_site_iliski':
 * @property integer $id
 * @property integer $kullanici_id
 * @property integer $site_id
 */
class vtKullaniciSiteIliski extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return vtKullaniciSiteIliski the static model class
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
		return 'kullanici_site_iliski';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kullanici_id, site_id', 'required'),
			array('kullanici_id, site_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, kullanici_id, site_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kullanici_id' => 'Kullanici',
			'site_id' => 'Site',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('kullanici_id',$this->kullanici_id);
		$criteria->compare('site_id',$this->site_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}