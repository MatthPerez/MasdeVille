<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230108142207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE events (id INT AUTO_INCREMENT NOT NULL, meeting_date DATE NOT NULL, content VARCHAR(255) NOT NULL, link VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(100) NOT NULL, lastname VARCHAR(100) NOT NULL, password VARCHAR(9) NOT NULL, mail VARCHAR(100) NOT NULL, phone INT NOT NULL, birth VARCHAR(10) NOT NULL, bapt VARCHAR(10) NOT NULL, status VARCHAR(150) NOT NULL, function VARCHAR(100) DEFAULT NULL, group_function VARCHAR(100) DEFAULT NULL, group_name VARCHAR(100) DEFAULT NULL, access VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vcm (id INT AUTO_INCREMENT NOT NULL, meeting_date DATE NOT NULL, portion VARCHAR(255) NOT NULL, advisor VARCHAR(255) DEFAULT NULL, prayer1 VARCHAR(255) NOT NULL, prayer2 VARCHAR(255) NOT NULL, song1 INT NOT NULL, song2 INT NOT NULL, song3 INT NOT NULL, jewels_title VARCHAR(255) NOT NULL, jewels_speaker VARCHAR(255) NOT NULL, pearls VARCHAR(255) NOT NULL, reader1 VARCHAR(255) NOT NULL, reader2 VARCHAR(255) DEFAULT NULL, appl1 VARCHAR(255) NOT NULL, appl2 VARCHAR(255) NOT NULL, appl3 VARCHAR(255) NOT NULL, appl11 VARCHAR(255) NOT NULL, appl12 VARCHAR(255) DEFAULT NULL, appl13 VARCHAR(255) DEFAULT NULL, appl14 VARCHAR(255) DEFAULT NULL, appl22 VARCHAR(255) DEFAULT NULL, appl23 VARCHAR(255) DEFAULT NULL, appl24 VARCHAR(255) DEFAULT NULL, appl31 VARCHAR(255) NOT NULL, appl32 VARCHAR(255) NOT NULL, appl33 VARCHAR(255) NOT NULL, appl34 VARCHAR(255) NOT NULL, appl41 VARCHAR(255) NOT NULL, appl42 VARCHAR(255) NOT NULL, appl43 VARCHAR(255) NOT NULL, appl44 VARCHAR(255) NOT NULL, cl1 VARCHAR(255) NOT NULL, cl2 VARCHAR(255) NOT NULL, cl3 VARCHAR(255) DEFAULT NULL, cl1_speaker VARCHAR(255) DEFAULT NULL, cl2_speaker VARCHAR(255) DEFAULT NULL, cl3_speaker VARCHAR(255) DEFAULT NULL, study_speaker VARCHAR(255) NOT NULL, study_reader VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE events');
        $this->addSql('DROP TABLE members');
        $this->addSql('DROP TABLE vcm');
    }
}
