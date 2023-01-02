<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230102112336 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events ADD id INT AUTO_INCREMENT NOT NULL, CHANGE date date DATETIME DEFAULT NULL, CHANGE content content VARCHAR(255) NOT NULL, CHANGE link link VARCHAR(10) DEFAULT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE members CHANGE firstname firstname VARCHAR(100) NOT NULL, CHANGE lastname lastname VARCHAR(100) NOT NULL, CHANGE password password VARCHAR(9) NOT NULL, CHANGE mail mail VARCHAR(100) NOT NULL, CHANGE phone phone INT NOT NULL, CHANGE birth birth VARCHAR(10) NOT NULL, CHANGE bapt bapt VARCHAR(10) NOT NULL, CHANGE status status VARCHAR(150) NOT NULL, CHANGE `function` `function` VARCHAR(100) DEFAULT NULL, CHANGE group_function group_function VARCHAR(100) DEFAULT NULL, CHANGE group_name group_name VARCHAR(100) DEFAULT NULL, CHANGE access access VARCHAR(100) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON events');
        $this->addSql('ALTER TABLE events DROP id, CHANGE date date DATE DEFAULT \'NULL\', CHANGE content content TEXT NOT NULL, CHANGE link link TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE members CHANGE firstname firstname VARCHAR(255) DEFAULT \'NULL\', CHANGE lastname lastname VARCHAR(255) DEFAULT \'NULL\', CHANGE password password VARCHAR(255) DEFAULT \'NULL\', CHANGE mail mail VARCHAR(255) DEFAULT \'NULL\', CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\', CHANGE birth birth VARCHAR(255) DEFAULT \'NULL\', CHANGE bapt bapt VARCHAR(255) DEFAULT \'NULL\', CHANGE status status VARCHAR(255) DEFAULT \'NULL\', CHANGE `function` `function` VARCHAR(255) DEFAULT \'NULL\', CHANGE group_function group_function VARCHAR(255) DEFAULT \'NULL\', CHANGE group_name group_name VARCHAR(255) DEFAULT \'NULL\', CHANGE access access VARCHAR(255) DEFAULT \'NULL\'');
    }
}
