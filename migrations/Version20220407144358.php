<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407144358 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE traduction (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE traduction_publication (traduction_id INT NOT NULL, publication_id INT NOT NULL, INDEX IDX_8DDE54767E0955EF (traduction_id), INDEX IDX_8DDE547638B217A7 (publication_id), PRIMARY KEY(traduction_id, publication_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE traduction_publication ADD CONSTRAINT FK_8DDE54767E0955EF FOREIGN KEY (traduction_id) REFERENCES traduction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE traduction_publication ADD CONSTRAINT FK_8DDE547638B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE traduction_publication DROP FOREIGN KEY FK_8DDE54767E0955EF');
        $this->addSql('DROP TABLE traduction');
        $this->addSql('DROP TABLE traduction_publication');
    }
}
