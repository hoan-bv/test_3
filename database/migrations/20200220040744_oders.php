<?php


use Phinx\Migration\AbstractMigration;

class Oders extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table = $this->table('orders',['id' => 'ord_id']);
        $table->addColumn('ord_start', ColumnTypes::TIMESTAMP, ColumnOptions::CREATED_AT_OPTIONS);
        $table->addColumn('ord_user_id', ColumnTypes::INTEGER)
            ->addColumn('ord_user_time', ColumnTypes::INTEGER)
            ->addColumn('ord_bor_id', ColumnTypes::INTEGER)

            ->addColumn('ord_packet', ColumnTypes::INTEGER)
            ->addColumn('ord_city_id', ColumnTypes::INTEGER)

            ->save();
    }
    function down()
    {
        if($this->hasTable('orders')) {
            $this->dropTable('orders');
        }
    }
}
