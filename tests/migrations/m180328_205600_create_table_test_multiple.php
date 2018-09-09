<?php

declare(strict_types=1);

namespace bizley\migration\tests\migrations;

use yii\db\Migration;

class m180328_205600_create_table_test_multiple extends Migration
{
    public function up(): void
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%test_multiple}}', [
            'one' => $this->integer(),
        ], $tableOptions);
    }

    public function down(): void
    {
        $this->dropTable('{{%test_multiple}}');
    }
}
