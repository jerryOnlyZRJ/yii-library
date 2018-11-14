<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $date
 * @property int $score
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'date'], 'required'],
            [['score'], 'integer'],
            [['name', 'author', 'date'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '图书ID',
            'name' => '书名',
            'author' => '作者',
            'date' => '出版日期',
            'score' => '评分',
        ];
    }
}
