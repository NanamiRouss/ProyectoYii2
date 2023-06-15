<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehiculos".
 *
 * @property int $IDVehiculo
 * @property int|null $IDCliente
 * @property string|null $Marca
 * @property string|null $Modelo
 * @property string|null $Placa
 *
 * @property Espacios[] $espacios
 * @property Clientes $iDCliente
 */
class Vehiculos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehiculos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDVehiculo'], 'required'],
            [['IDVehiculo', 'IDCliente'], 'integer'],
            [['Marca', 'Modelo'], 'string', 'max' => 50],
            [['Placa'], 'string', 'max' => 10],
            [['IDVehiculo'], 'unique'],
            [['IDCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::class, 'targetAttribute' => ['IDCliente' => 'IDCliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDVehiculo' => 'Id Vehiculo',
            'IDCliente' => 'Id Cliente',
            'Marca' => 'Marca',
            'Modelo' => 'Modelo',
            'Placa' => 'Placa',
        ];
    }

    /**
     * Gets query for [[Espacios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspacios()
    {
        return $this->hasMany(Espacios::class, ['IDVehiculo' => 'IDVehiculo']);
    }

    /**
     * Gets query for [[IDCliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDCliente()
    {
        return $this->hasOne(Clientes::class, ['IDCliente' => 'IDCliente']);
    }
}
