<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $name
 * @property string $slug
 * @property float|null $price
 * @property string|null $description
 * @property string|null $image
 * @property string|null $size
 * @property string|null $color
 * @property string|null $material
 * @property int|null $stock
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Categories $category
 */
class Product extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'price', 'description', 'image', 'size', 'color', 'material'], 'default', 'value' => null],
            [['stock'], 'default', 'value' => 0],
            [['category_id', 'stock'], 'default', 'value' => null],
            [['category_id', 'stock'], 'integer'],
            [['name', 'slug'], 'required'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'slug'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 255],
            [['size', 'color'], 'string', 'max' => 50],
            [['material'], 'string', 'max' => 100],
            [['slug'], 'unique'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
            'size' => 'Size',
            'color' => 'Color',
            'material' => 'Material',
            'stock' => 'Stock',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }

}
