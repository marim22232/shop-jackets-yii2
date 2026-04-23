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
 * @property Category $category
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
        [['name', 'slug'], 'required'],
        [['category_id', 'stock'], 'integer'],
        [['price'], 'number'],
        [['description', 'size', 'color', 'material'], 'string'],
        [['created_at', 'updated_at'], 'safe'],  // Добавить эту строку
        [['name', 'slug', 'image'], 'string', 'max' => 255],
        [['slug'], 'unique'],
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
    return $this->hasOne(Category::class, ['id' => 'category_id']);
}

}
