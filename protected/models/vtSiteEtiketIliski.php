<?php

/**
 * This is the model class for table "site_etiket_iliski".
 *
 * The followings are the available columns in table 'site_etiket_iliski':
 * @property integer $id
 * @property integer $site_id
 * @property integer $etiket_id
 * @property string $kayitTarih
 */
class vtSiteEtiketIliski extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return vtSiteEtiketIliski the static model class
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
		return 'site_etiket_iliski';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, etiket_id, kayitTarih', 'required'),
			array('site_id, etiket_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, etiket_id, kayitTarih', 'safe', 'on'=>'search'),
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
			'site_id' => 'Site',
			'etiket_id' => 'Etiket',
			'kayitTarih' => 'Kayit Tarih',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('etiket_id',$this->etiket_id);
		$criteria->compare('kayitTarih',$this->kayitTarih,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}