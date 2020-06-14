<?php


use Phinx\Migration\AbstractMigration;

class CreateTableNews extends AbstractMigration
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
        $table = $this->table('news', ['id' => 'new_id']);
        $table->addColumn('new_content', ColumnTypes::TEXT)
            ->addColumn('new_cat_id', ColumnTypes::INTEGER)
            ->addColumn('new_title', ColumnTypes::TEXT)
            ->addColumn('new_img', ColumnTypes::TEXT)
            ->addColumn('new_hot',ColumnTypes::INTEGER)
            ->addColumn('new_teaser', ColumnTypes::TEXT)
            ->save();
    }

    function down()
    {
        if ($this->hasTable('news')) {
            $this->dropTable('news');
        }
    }
}
