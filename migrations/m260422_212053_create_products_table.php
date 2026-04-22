<?php

use yii\db\Migration;

class m260422_212053_create_products_table extends Migration
{
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string(200)->notNull(),
            'slug' => $this->string(200)->notNull()->unique(),
            'price' => $this->decimal(10,2),
            'description' => $this->text(),
            'image' => $this->string(255),
            'size' => $this->string(50),
            'color' => $this->string(50),
            'material' => $this->string(100),
            'stock' => $this->integer()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
        
        $this->addForeignKey(
            'fk-products-category_id',
            'products',
            'category_id',
            'categories',
            'id',
            'SET NULL',
            'CASCADE'
        );
        
        $this->createIndex('idx-products-slug', 'products', 'slug');
        $this->createIndex('idx-products-price', 'products', 'price');
    }

    public function down()
    {
        $this->dropForeignKey('fk-products-category_id', 'products');
        $this->dropTable('products');
    }
}