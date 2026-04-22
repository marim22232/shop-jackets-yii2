<?php

use yii\db\Migration;

class m260422_212032_create_categories_table extends Migration
{
    public function up()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'slug' => $this->string(100)->notNull()->unique(),
            'description' => $this->text(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
        
        $this->createIndex('idx-categories-slug', 'categories', 'slug');
    }

    public function down()
    {
        $this->dropTable('categories');
    }
}