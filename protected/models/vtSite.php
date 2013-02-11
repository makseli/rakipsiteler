<?php

/**
 * This is the model class for table "siteler".
 *
 * The followings are the available columns in table 'siteler':
 * @property integer $id
 * @property string $adi
 * @property string $url
 * @property integer $alanAdiKayitTarih
 * @property integer $alanAdiGuncellemeTarih
 * @property integer $alanAdiBitisTarih
 * @property integer $alexaGlobal
 * @property integer $alexaUlke
 * @property integer $alexaLink
 * @property integer $googleIndex
 * @property integer $googlePageRank
 * @property integer $dmozKaydi
 * @property integer $yahooIndex
 * @property integer $bingIndex
 * @property string $xmUrl
 */
class vtSite extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return vtSite the static model class
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
		return 'siteler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adi, url, alanAdiKayitTarih, alanAdiGuncellemeTarih, alanAdiBitisTarih, alexaGlobal, alexaUlke, alexaLink, googleIndex, googlePageRank, dmozKaydi, yahooIndex, bingIndex, xmUrl', 'required'),
			array('alanAdiKayitTarih, alanAdiGuncellemeTarih, alanAdiBitisTarih, alexaGlobal, alexaUlke, alexaLink, googleIndex, googlePageRank, dmozKaydi, yahooIndex, bingIndex', 'numerical', 'integerOnly'=>true),
			array('adi, xmUrl', 'length', 'max'=>128),
			array('url', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, adi, url, alanAdiKayitTarih, alanAdiGuncellemeTarih, alanAdiBitisTarih, alexaGlobal, alexaUlke, alexaLink, googleIndex, googlePageRank, dmozKaydi, yahooIndex, bingIndex, xmUrl', 'safe', 'on'=>'search'),
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
			'adi' => 'Adi',
			'url' => 'Url',
			'alanAdiKayitTarih' => 'Alan Adi Kayit Tarih',
			'alanAdiGuncellemeTarih' => 'Alan Adi Guncelleme Tarih',
			'alanAdiBitisTarih' => 'Alan Adi Bitis Tarih',
			'alexaGlobal' => 'Alexa Global',
			'alexaUlke' => 'Alexa Ulke',
			'alexaLink' => 'Alexa Link',
			'googleIndex' => 'Google Index',
			'googlePageRank' => 'Google Page Rank',
			'dmozKaydi' => 'Dmoz Kaydi',
			'yahooIndex' => 'Yahoo Index',
			'bingIndex' => 'Bing Index',
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
		$criteria->compare('adi',$this->adi,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('alanAdiKayitTarih',$this->alanAdiKayitTarih);
		$criteria->compare('alanAdiGuncellemeTarih',$this->alanAdiGuncellemeTarih);
		$criteria->compare('alanAdiBitisTarih',$this->alanAdiBitisTarih);
		$criteria->compare('alexaGlobal',$this->alexaGlobal);
		$criteria->compare('alexaUlke',$this->alexaUlke);
		$criteria->compare('alexaLink',$this->alexaLink);
		$criteria->compare('googleIndex',$this->googleIndex);
		$criteria->compare('googlePageRank',$this->googlePageRank);
		$criteria->compare('dmozKaydi',$this->dmozKaydi);
		$criteria->compare('yahooIndex',$this->yahooIndex);
		$criteria->compare('bingIndex',$this->bingIndex);
		$criteria->compare('xmUrl',$this->xmUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}