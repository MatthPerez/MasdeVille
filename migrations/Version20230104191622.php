<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230104191622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vcm (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, portion VARCHAR(255) NOT NULL, president VARCHAR(100) NOT NULL, advisor VARCHAR(255) DEFAULT NULL, song1 INT NOT NULL, song2 INT NOT NULL, song3 INT NOT NULL, prayer1 VARCHAR(255) NOT NULL, prayer2 VARCHAR(255) NOT NULL, jewels_title VARCHAR(255) NOT NULL, jewels_speaker VARCHAR(255) NOT NULL, pearls VARCHAR(255) NOT NULL, reader1 VARCHAR(255) NOT NULL, reader2 VARCHAR(255) DEFAULT NULL, appl11 VARCHAR(255) NOT NULL, appl12 VARCHAR(255) DEFAULT NULL, appl13 VARCHAR(255) DEFAULT NULL, appl14 VARCHAR(255) DEFAULT NULL, appl21 VARCHAR(255) NOT NULL, appl22 VARCHAR(255) DEFAULT NULL, appl23 VARCHAR(255) DEFAULT NULL, appl24 VARCHAR(255) NOT NULL, appl31 VARCHAR(255) NOT NULL, appl32 VARCHAR(255) DEFAULT NULL, appl33 VARCHAR(255) DEFAULT NULL, appl34 VARCHAR(255) DEFAULT NULL, appl41 VARCHAR(255) DEFAULT NULL, appl42 VARCHAR(255) DEFAULT NULL, appl43 VARCHAR(255) DEFAULT NULL, appl44 VARCHAR(255) DEFAULT NULL, cl1 VARCHAR(255) NOT NULL, cl1_speaker VARCHAR(255) NOT NULL, cl2 VARCHAR(255) NOT NULL, cl2_speaker VARCHAR(255) NOT NULL, cl3 VARCHAR(255) NOT NULL, cl3_speaker VARCHAR(255) NOT NULL, study_speaker VARCHAR(255) NOT NULL, study_reader VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE vcm');
    }
}
