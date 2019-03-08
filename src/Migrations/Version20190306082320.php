<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190306082320 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE template CHANGE product_id product_id INT DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE favicon favicon VARCHAR(255) DEFAULT NULL, CHANGE top_background top_background VARCHAR(255) DEFAULT NULL, CHANGE bottom_background bottom_background VARCHAR(255) DEFAULT NULL, CHANGE top_img top_img VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE template CHANGE product_id product_id INT NOT NULL, CHANGE title title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE favicon favicon VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE top_background top_background VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE bottom_background bottom_background VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE top_img top_img VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
