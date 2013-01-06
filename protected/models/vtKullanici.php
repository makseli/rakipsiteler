<?php

/**
 * This is the model class for table "kullanici".
 *
 * The followings are the available columns in table 'kullanici':
 * @property integer $id
 * @property string $takmaAd
 * @property string $isim
 * @property string $soyisim
 * @property string $eposta
 * @property string $sifre
 * @property string $kayitTarih
 * @property string $ip
 * @property string $xmUrl
 */
class vtKullanici extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return vtKullanici the static model class
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
		return 'kullanici';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('takmaAd, isim, soyisim, eposta, sifre, kayitTarih, ip, xmUrl', 'required'),
			array('takmaAd, isim, soyisim, xmUrl', 'length', 'max'=>32),
			array('eposta, sifre, ip', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, takmaAd, isim, soyisim, eposta, sifre, kayitTarih, ip, xmUrl', 'safe', 'on'=>'search'),
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
			'takmaAd' => 'Takma Ad',
			'isim' => 'Isim',
			'soyisim' => 'Soyisim',
			'eposta' => 'Eposta',
			'sifre' => 'Sifre',
			'kayitTarih' => 'Kayit Tarih',
			'ip' => 'Ip',
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
		$criteria->compare('takmaAd',$this->takmaAd,true);
		$criteria->compare('isim',$this->isim,true);
		$criteria->compare('soyisim',$this->soyisim,true);
		$criteria->compare('eposta',$this->eposta,true);
		$criteria->compare('sifre',$this->sifre,true);
		$criteria->compare('kayitTarih',$this->kayitTarih,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('xmUrl',$this->xmUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}