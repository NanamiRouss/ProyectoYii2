<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $IDCliente
 * @property string|null $Nombre
 * @property string|null $Apellido
 * @property string|null $Telefono
 * @property string|null $CorreoElectronico
 *
 * @property Vehiculos[] $vehiculos
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDCliente'], 'required'],
            [['IDCliente'], 'integer'],
            [['Nombre', 'Apellido'], 'string', 'max' => 50],
            [['Telefono'], 'string', 'max' => 20],
            [['CorreoElectronico'], 'string', 'max' => 100],
            [['IDCliente'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDCliente' => 'Id Cliente',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Telefono' => 'Telefono',
            'CorreoElectronico' => 'Correo Electronico',
        ];
    }

    /**
     * Gets query for [[Vehiculos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculos()
    {
        return $this->hasMany(Vehiculos::class, ['IDCliente' => 'IDCliente']);
    }
}
