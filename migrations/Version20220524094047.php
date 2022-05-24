<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220524094047 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE author DROP FOREIGN KEY FK_BDAFD8C8DF41190F');
        $this->addSql('ALTER TABLE element DROP FOREIGN KEY FK_41405E399DBEC54D');
        $this->addSql('DROP TABLE nationality');
        $this->addSql('DROP INDEX IDX_BDAFD8C8DF41190F ON author');
        $this->addSql('ALTER TABLE author ADD author_nationality VARCHAR(255) DEFAULT NULL, DROP author_nationality_id, DROP author_firstname');
        $this->addSql('DROP INDEX IDX_41405E399DBEC54D ON element');
        $this->addSql('ALTER TABLE element ADD element_nationality VARCHAR(255) DEFAULT NULL, DROP element_nationality_id');
        $this->addSql('ALTER TABLE user ADD user_lastname VARCHAR(255) DEFAULT NULL, ADD user_firstname VARCHAR(255) DEFAULT NULL, ADD user_gender TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nationality (id INT AUTO_INCREMENT NOT NULL, nationality_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE author ADD author_nationality_id INT DEFAULT NULL, ADD author_firstname VARCHAR(255) NOT NULL, DROP author_nationality');
        $this->addSql('ALTER TABLE author ADD CONSTRAINT FK_BDAFD8C8DF41190F FOREIGN KEY (author_nationality_id) REFERENCES nationality (id)');
        $this->addSql('CREATE INDEX IDX_BDAFD8C8DF41190F ON author (author_nationality_id)');
        $this->addSql('ALTER TABLE element ADD element_nationality_id INT DEFAULT NULL, DROP element_nationality');
        $this->addSql('ALTER TABLE element ADD CONSTRAINT FK_41405E399DBEC54D FOREIGN KEY (element_nationality_id) REFERENCES nationality (id)');
        $this->addSql('CREATE INDEX IDX_41405E399DBEC54D ON element (element_nationality_id)');
        $this->addSql('ALTER TABLE `user` DROP user_lastname, DROP user_firstname, DROP user_gender');
    }
}
