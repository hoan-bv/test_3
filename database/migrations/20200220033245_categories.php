<?php


use Phinx\Migration\AbstractMigration;

class Categories extends AbstractMigration
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
        $table = $this->table('categories',['id' => 'cat_id']);
        $table->addColumn('cat_name', ColumnTypes::TEXT)
            ->addColumn('cat_img', ColumnTypes::BINARY)


            ->save();
    }

    public function down()
    {
        if ($this->hasTable('categories')) {
            $this ->dropTable('categories');
        }
    }
}
