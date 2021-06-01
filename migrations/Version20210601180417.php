<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210601180417 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE developer ADD game_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE developer ADD CONSTRAINT FK_65FB8B9AE48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('CREATE INDEX IDX_65FB8B9AE48FD905 ON developer (game_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE developer DROP FOREIGN KEY FK_65FB8B9AE48FD905');
        $this->addSql('DROP INDEX IDX_65FB8B9AE48FD905 ON developer');
        $this->addSql('ALTER TABLE developer DROP game_id');
    }
}
