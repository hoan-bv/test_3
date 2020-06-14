<?php


use Phinx\Migration\AbstractMigration;

class Borrows extends AbstractMigration
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
        $table = $this->table('borrows', ['id' => 'bor_id']);
        $table->addColumn('bor_option', ColumnTypes::TEXT)

            ->addColumn('bor_img', ColumnTypes::TEXT)
            ->addColumn('bor_price', ColumnTypes::TEXT)
            ->addColumn('bor_discount', ColumnTypes::INTEGER)

            ->save();
    }
    function down() {
        if ($this->table('borrows')) {
            $this->dropTable('borrows');
        }
    }
}
