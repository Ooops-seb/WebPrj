<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $cedula
 * @property string $nombre
 * @property string $fecha_nacimiento
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cedula', 'nombre', 'fecha_nacimiento'], 'required'],
            [['fecha_nacimiento'], 'safe'],
            [['cedula'], 'string', 'max' => 10],
            [['nombre'], 'string', 'max' => 60],
            [['cedula'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cedula' => 'Cedula',
            'nombre' => 'Nombre',
            'fecha_nacimiento' => 'Fecha Nacimiento',
        ];
    }
}
