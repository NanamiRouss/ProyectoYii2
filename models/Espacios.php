<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "espacios".
 *
 * @property int $IDEspacio
 * @property string|null $Estado
 * @property int|null $IDVehiculo
 *
 * @property Vehiculos $iDVehiculo
 */
class Espacios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'espacios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDEspacio'], 'required'],
            [['IDEspacio', 'IDVehiculo'], 'integer'],
            [['Estado'], 'string', 'max' => 20],
            [['IDEspacio'], 'unique'],
            [['IDVehiculo'], 'exist', 'skipOnError' => true, 'targetClass' => Vehiculos::class, 'targetAttribute' => ['IDVehiculo' => 'IDVehiculo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDEspacio' => 'Id Espacio',
            'Estado' => 'Estado',
            'IDVehiculo' => 'Id Vehiculo',
        ];
    }

    /**
     * Gets query for [[IDVehiculo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDVehiculo()
    {
        return $this->hasOne(Vehiculos::class, ['IDVehiculo' => 'IDVehiculo']);
    }
}
