<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m170710_102905_create_product_table extends Migration
{
    /**
     * Создание таблицы
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'price' => $this->decimal(10, 2),
        ]);
    }

    /**
     * Откат таблицы
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
