<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503103243 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking ADD end DATETIME NOT NULL, ADD description LONGTEXT NOT NULL, ADD all_day TINYINT(1) NOT NULL, ADD background_color VARCHAR(7) NOT NULL, ADD border_color VARCHAR(7) NOT NULL, ADD text_color VARCHAR(7) NOT NULL, DROP end_at, CHANGE title title VARCHAR(100) NOT NULL, CHANGE begin_at start DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking ADD begin_at DATETIME NOT NULL, ADD end_at DATETIME DEFAULT NULL, DROP start, DROP end, DROP description, DROP all_day, DROP background_color, DROP border_color, DROP text_color, CHANGE title title VARCHAR(255) NOT NULL');
    }
}
