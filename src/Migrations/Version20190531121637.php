<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190531121637 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE home');
        $this->addSql('ALTER TABLE user ADD lastname VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL, ADD birthday DATE NOT NULL, ADD created_at DATE NOT NULL, ADD updated_at DATE NOT NULL, DROP nom, DROP prenom, DROP date_naissance, DROP date_creation, DROP date_modif');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE home (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL COLLATE utf8mb4_unicode_ci, roles JSON NOT NULL, password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD prenom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD date_naissance DATE NOT NULL, ADD date_creation DATE NOT NULL, ADD date_modif DATE NOT NULL, DROP lastname, DROP name, DROP birthday, DROP created_at, DROP updated_at');
    }
}
