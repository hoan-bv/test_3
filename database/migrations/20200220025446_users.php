<?php


use Phinx\Migration\AbstractMigration;

class Users extends AbstractMigration
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
      $table = $this->table('user', ['id' => 'use_id']);
      $table->addColumn('use_name', ColumnTypes::TEXT)
            ->addColumn('use_name_acount', ColumnTypes::TEXT)
            ->addColumn('use_phone', ColumnTypes::INTEGER)
            ->addColumn('use_amount_money', ColumnTypes::INTEGER)
            ->addColumn('use_identity', ColumnTypes::INTEGER)
            ->addColumn('use_gender', ColumnTypes::TEXT)
            ->addColumn('use_email', ColumnTypes::TEXT)
            ->addColumn('use_job', ColumnTypes::TEXT)
            ->addColumn('use_company', ColumnTypes::TEXT)
            ->addColumn('use_company_address', ColumnTypes::TEXT)
            ->addColumn('use_company_phone', ColumnTypes::INTEGER)
            ->addColumn('use_status', ColumnTypes::INTEGER)




       ->save();
    }

    public function down()
    {if ($this->hasTable('users')) {
            $this->dropTable('users');
        }

    }

}
