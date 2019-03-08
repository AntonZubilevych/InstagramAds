<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190304195331 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE templates_comment (id INT AUTO_INCREMENT NOT NULL, template_id INT NOT NULL, author VARCHAR(255) NOT NULL, img VARCHAR(255) DEFAULT NULL, INDEX IDX_DBAFF2D55DA0FB8 (template_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE template (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, title VARCHAR(255) NOT NULL, favicon VARCHAR(255) NOT NULL, top_background VARCHAR(255) NOT NULL, bottom_background VARCHAR(255) NOT NULL, top_img VARCHAR(255) NOT NULL, INDEX IDX_97601F834584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE templates_description (id INT AUTO_INCREMENT NOT NULL, template_id INT NOT NULL, title VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, INDEX IDX_50495C835DA0FB8 (template_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE templates_comment ADD CONSTRAINT FK_DBAFF2D55DA0FB8 FOREIGN KEY (template_id) REFERENCES template (id)');
        $this->addSql('ALTER TABLE template ADD CONSTRAINT FK_97601F834584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE templates_description ADD CONSTRAINT FK_50495C835DA0FB8 FOREIGN KEY (template_id) REFERENCES template (id)');
        $this->addSql('ALTER TABLE Order_shop ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Order_shop ADD CONSTRAINT FK_AEC6756519EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_AEC6756519EB6921 ON Order_shop (client_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Order_shop DROP FOREIGN KEY FK_AEC6756519EB6921');
        $this->addSql('ALTER TABLE templates_comment DROP FOREIGN KEY FK_DBAFF2D55DA0FB8');
        $this->addSql('ALTER TABLE templates_description DROP FOREIGN KEY FK_50495C835DA0FB8');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE templates_comment');
        $this->addSql('DROP TABLE template');
        $this->addSql('DROP TABLE templates_description');
        $this->addSql('DROP INDEX IDX_AEC6756519EB6921 ON Order_shop');
        $this->addSql('ALTER TABLE Order_shop DROP client_id');
    }
}
