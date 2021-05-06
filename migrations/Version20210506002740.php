<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210506002740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce CHANGE garage_id garage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE annonce RENAME INDEX garage_id TO IDX_F65593E5C4FFF555');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce CHANGE garage_id garage_id INT NOT NULL');
        $this->addSql('ALTER TABLE annonce RENAME INDEX idx_f65593e5c4fff555 TO garage_id');
    }
}
