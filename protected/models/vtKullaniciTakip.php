<?php

/**
 * This is the model class for table "kullanici_takip".
 *
 * The followings are the available columns in table 'kullanici_takip':
 * @property integer $id
 * @property integer $kullanici_id
 * @property string $takipAdi
 * @property string $kayitTarih
 * @property string $takipAciklama
 * @property integer $ozel
 * @property string $xmUrl
 */
class vtKullaniciTakip extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return vtKullaniciTakip the static model class
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
		return 'kullanici_takip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kullanici_id, takipAdi, kayitTarih, takipAciklama, xmUrl', 'required'),
			array('kullanici_id, ozel', 'numerical', 'integerOnly'=>true),
			array('takipAdi', 'length', 'max'=>64),
			array('takipAciklama', 'length', 'max'=>2048),
			array('xmUrl', 'length', 'max'=>674),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, kullanici_id, takipAdi, kayitTarih, takipAciklama, ozel, xmUrl', 'safe', 'on'=>'search'),
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
			'takipAdi' => 'Takip Adi',
			'kayitTarih' => 'Kayit Tarih',
			'takipAciklama' => 'Takip Aciklama',
			'ozel' => 'Ozel',
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
		$criteria->compare('takipAdi',$this->takipAdi,true);
		$criteria->compare('kayitTarih',$this->kayitTarih,true);
		$criteria->compare('takipAciklama',$this->takipAciklama,true);
		$criteria->compare('ozel',$this->ozel);
		$criteria->compare('xmUrl',$this->xmUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}