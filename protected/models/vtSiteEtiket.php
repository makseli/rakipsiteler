<?php

/**
 * This is the model class for table "site_etiket".
 *
 * The followings are the available columns in table 'site_etiket':
 * @property integer $id
 * @property integer $kullanici_id
 * @property string $adi
 * @property string $kayit
 * @property string $xmUrl
 */
class vtSiteEtiket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return vtSiteEtiket the static model class
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
		return 'site_etiket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adi, kayit, xmUrl', 'required'),
			array('kullanici_id', 'numerical', 'integerOnly'=>true),
			array('adi, xmUrl', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, kullanici_id, adi, kayit, xmUrl', 'safe', 'on'=>'search'),
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
			'adi' => 'Adi',
			'kayit' => 'Kayit',
			'xmUrl' => 'Xm Url',
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
		$criteria->compare('adi',$this->adi,true);
		$criteria->compare('kayit',$this->kayit,true);
		$criteria->compare('xmUrl',$this->xmUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}