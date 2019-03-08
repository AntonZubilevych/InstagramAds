<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190304170431 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE `order` RENAME INDEX idx_f52993984584665a TO IDX_34E8BC9C4584665A');
        $this->addSql('ALTER TABLE `order` RENAME INDEX idx_f52993986bf700bd TO IDX_34E8BC9C6BF700BD');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE `Order` RENAME INDEX idx_34e8bc9c6bf700bd TO IDX_F52993986BF700BD');
        $this->addSql('ALTER TABLE `Order` RENAME INDEX idx_34e8bc9c4584665a TO IDX_F52993984584665A');
    }
}
