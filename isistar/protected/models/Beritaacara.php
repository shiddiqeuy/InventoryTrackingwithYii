<?php

/**
 * This is the model class for table "beritaacara".
 *
 * The followings are the available columns in table 'beritaacara':
 * @property integer $id
 * @property string $tgl_order
 * @property integer $no_tlp
 * @property string $no_speedy
 * @property string $nama_pelanggan
 * @property string $tgl_bon_modem
 * @property string $mac
 * @property string $sn_modem
 * @property string $tipe_modem
 * @property string $tgl_psg
 * @property string $tgl_cabut
 * @property string $kode_agen
 * @property string $paket
 * @property string $keterangan
 */
class Beritaacara extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Beritaacara the static model class
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
		return 'beritaacara';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tgl_order, no_tlp, no_speedy, nama_pelanggan, tgl_bon_modem, mac, sn_modem, tipe_modem, tgl_psg, tgl_cabut, kode_agen, paket, keterangan', 'required'),
			array('no_tlp', 'numerical', 'integerOnly'=>true),
			array('no_speedy, mac, sn_modem, tipe_modem', 'length', 'max'=>20),
			array('nama_pelanggan', 'length', 'max'=>50),
			array('kode_agen, paket', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tgl_order, no_tlp, no_speedy, nama_pelanggan, tgl_bon_modem, mac, sn_modem, tipe_modem, tgl_psg, tgl_cabut, kode_agen, paket, keterangan', 'safe', 'on'=>'search'),
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
			'tgl_order' => 'Tgl Order',
			'no_tlp' => 'No Tlp',
			'no_speedy' => 'No Speedy',
			'nama_pelanggan' => 'Nama Pelanggan',
			'tgl_bon_modem' => 'Tgl Bon Modem',
			'mac' => 'Mac',
			'sn_modem' => 'Sn Modem',
			'tipe_modem' => 'Tipe Modem',
			'tgl_psg' => 'Tgl Psg',
			'tgl_cabut' => 'Tgl Cabut',
			'kode_agen' => 'Kode Agen',
			'paket' => 'Paket',
			'keterangan' => 'Keterangan',
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
		$criteria->compare('tgl_order',$this->tgl_order,true);
		$criteria->compare('no_tlp',$this->no_tlp);
		$criteria->compare('no_speedy',$this->no_speedy,true);
		$criteria->compare('nama_pelanggan',$this->nama_pelanggan,true);
		$criteria->compare('tgl_bon_modem',$this->tgl_bon_modem,true);
		$criteria->compare('mac',$this->mac,true);
		$criteria->compare('sn_modem',$this->sn_modem,true);
		$criteria->compare('tipe_modem',$this->tipe_modem,true);
		$criteria->compare('tgl_psg',$this->tgl_psg,true);
		$criteria->compare('tgl_cabut',$this->tgl_cabut,true);
		$criteria->compare('kode_agen',$this->kode_agen,true);
		$criteria->compare('paket',$this->paket,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}