<?php


use Phinx\Migration\AbstractMigration;

class Keywwords extends AbstractMigration
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
        $table = $this->table('key_words', ['id' => 'key_id']);
        $table->addColumn('key_name', ColumnTypes::TEXT)
            ->addColumn('key_parent_id', ColumnTypes::INTEGER)
            ->addColumn('key_news_id', ColumnTypes::INTEGER)


            ->save();

    }

    function down() {
        if ($this->hasTable('key_words')) {
            $this->dropTable('keyword');
        }
    }
}
