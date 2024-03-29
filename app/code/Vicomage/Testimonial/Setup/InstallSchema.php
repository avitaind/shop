<?php

namespace Vicomage\Testimonial\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'testimonial'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('vicomage_testimonial')
        )->addColumn(
            'testimonial_id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Testimonial Id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            [],
            'Name'
        )->addColumn(
            'information',
            Table::TYPE_TEXT,
            255,
            [],
            'Information'
        )->addColumn(
            'avatar',
            Table::TYPE_TEXT,
            255,
            [],
            'Avatar'
        )->addColumn(
            'content',
            Table::TYPE_TEXT,
            '2M',
            [],
            'Content'
        )->addColumn(
            'status',
            Table::TYPE_SMALLINT,
            null,
            ['nullable' => false, 'default' => 1],
            'Is Active'
        )->addColumn(
            'company',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
            'company'
        )->addColumn(
            'email',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
            'email'
        )->addColumn(
            'website',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
            'website'
        )->addColumn(
            'rating_summary',
            Table::TYPE_SMALLINT,
            255,
            ['nullable' => true, 'default' => '5'],
            'rating_summary'
        )->addColumn(
            'stores',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
            'stores'
        )->addColumn(
            'order',
            Table::TYPE_SMALLINT,
            255,
            ['nullable' => true, 'default' => '0'],
            'order'
        )->addColumn(
            'created_time',
            Table::TYPE_DATETIME,
            null,
            ['nullable' => true, 'default' => null],
            'created_time'
        )->addColumn(
            'update_time',
            Table::TYPE_DATETIME,
            null,
            ['nullable' => true, 'default' => null],
            'update_time'
        );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();

    }
}
