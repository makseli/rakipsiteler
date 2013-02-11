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
 * @property string $KayitTarihi
 * @property string $last_login_ip
 * @property string $last_login_date
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
		
		//$datem = new DateTime(date('d-m-Y'));
		//print_pre($datem);
		//die();
		
		return array(				
			array('takmaAd, isim, soyisim, eposta, sifre', 'required'),
			array('takmaAd, isim, soyisim', 'length', 'max'=>32),
			array('eposta, sifre, last_login_ip, xmUrl', 'length', 'max'=>128),
			array('id, takmaAd, isim, soyisim, eposta, sifre, KayitTarihi, last_login_ip, last_login_date, xmUrl', 'safe', 'on'=>'search'),
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
			'KayitTarihi' => 'Kayit Tarihi',
			'last_login_ip' => 'Last Login Ip',
			'last_login_date' => 'Last Login Date',
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
		$criteria->compare('KayitTarihi',$this->KayitTarihi,true);
		$criteria->compare('last_login_ip',$this->last_login_ip,true);
		$criteria->compare('last_login_date',$this->last_login_date,true);
		$criteria->compare('xmUrl',$this->xmUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}