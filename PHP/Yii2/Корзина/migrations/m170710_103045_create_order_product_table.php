<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order_product`.
 */
class m170710_103045_create_order_product_table extends Migration
{
    /**
     * Создание таблицы
     */
    public function up()
    {
        $this->createTable('order_product', [
            'product_id' => $this->integer(11)->notNull(),
            'order_id' => $this->integer(11)->notNull(),
            'count' => $this->string()->defaultValue(1),
            'price' => $this->decimal(10, 2),
        ]);
    }

    /**
     * Откат таблицы
     */
    public function down()
    {
        $this->dropTable('order_product');
    }
}
