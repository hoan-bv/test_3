<?php


use Phinx\Migration\AbstractMigration;

class ImageUsers extends AbstractMigration
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
        $table = $this->table('image_users', ['id' => 'imu_id']);
        $table->addColumn('imu_use_id', ColumnTypes::INTEGER)
            ->addColumn('imu_type',ColumnTypes::INTEGER)
            ->addColumn('imu_value',ColumnTypes::TEXT)

            ->save();
    }
    function down() {
        if ($this->hasTable('key_words')) {
            $this -> dropTable('key_words');
        }
    }
}
