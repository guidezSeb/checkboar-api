<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220521195300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE element_type (id INT AUTO_INCREMENT NOT NULL, type_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, status_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, tag_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tags_element (id INT AUTO_INCREMENT NOT NULL, element_id INT NOT NULL, tag_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE manga');
        $this->addSql('DROP TABLE movie');
        $this->addSql('ALTER TABLE comment ADD element_id INT NOT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE element ADD element_date_end DATE DEFAULT NULL, ADD element_total_chapter INT DEFAULT NULL, DROP element_is_favorite, CHANGE element_description element_description LONGTEXT DEFAULT NULL, CHANGE element_status element_status TINYINT(1) DEFAULT NULL, CHANGE element_cover_image element_cover_image VARCHAR(255) DEFAULT NULL, CHANGE element_relation element_relation INT DEFAULT NULL, CHANGE element_tag element_tags LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE element_date_release element_date_start DATE DEFAULT NULL, CHANGE element_id element_type INT NOT NULL');
        $this->addSql('ALTER TABLE user_element DROP FOREIGN KEY FK_194D4033A76ED395');
        $this->addSql('ALTER TABLE user_element DROP FOREIGN KEY FK_194D40331F1F2A24');
        $this->addSql('DROP INDEX IDX_194D40331F1F2A24 ON user_element');
        $this->addSql('DROP INDEX IDX_194D4033A76ED395 ON user_element');
        $this->addSql('ALTER TABLE user_element ADD user_status INT DEFAULT NULL, ADD user_favorite LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD user_progression INT DEFAULT NULL, ADD user_datestart DATE DEFAULT NULL, ADD userdate_end DATE DEFAULT NULL, ADD user_date_seen DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, element_id INT NOT NULL, book_date_start DATE NOT NULL, book_date_end DATE DEFAULT NULL, book_chapter_in_progress INT DEFAULT NULL, book_chapter_total INT DEFAULT NULL, book_id INT NOT NULL, UNIQUE INDEX UNIQ_CBE5A3311F1F2A24 (element_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE grade (id INT AUTO_INCREMENT NOT NULL, note INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE manga (id INT AUTO_INCREMENT NOT NULL, element_id INT NOT NULL, manga_date_start DATE DEFAULT NULL, manga_date_end DATE DEFAULT NULL, manga_chapter_total INT DEFAULT NULL, manga_chapter_in_progress INT DEFAULT NULL, manga_id INT NOT NULL, UNIQUE INDEX UNIQ_765A9E031F1F2A24 (element_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE movie (id INT AUTO_INCREMENT NOT NULL, element_id INT NOT NULL, movie_date_seen DATE DEFAULT NULL, movie_id INT NOT NULL, UNIQUE INDEX UNIQ_1D5EF26F1F1F2A24 (element_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3311F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)');
        $this->addSql('ALTER TABLE manga ADD CONSTRAINT FK_765A9E031F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)');
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26F1F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)');
        $this->addSql('DROP TABLE element_type');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE tags');
        $this->addSql('DROP TABLE tags_element');
        $this->addSql('ALTER TABLE comment DROP element_id, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE element ADD element_is_favorite TINYINT(1) DEFAULT NULL, ADD element_date_release DATE DEFAULT NULL, DROP element_date_start, DROP element_date_end, DROP element_total_chapter, CHANGE element_description element_description VARCHAR(255) NOT NULL, CHANGE element_status element_status VARCHAR(255) DEFAULT NULL, CHANGE element_cover_image element_cover_image VARCHAR(255) NOT NULL, CHANGE element_relation element_relation LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE element_type element_id INT NOT NULL, CHANGE element_tags element_tag LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE user_element DROP user_status, DROP user_favorite, DROP user_progression, DROP user_datestart, DROP userdate_end, DROP user_date_seen');
        $this->addSql('ALTER TABLE user_element ADD CONSTRAINT FK_194D4033A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_element ADD CONSTRAINT FK_194D40331F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)');
        $this->addSql('CREATE INDEX IDX_194D40331F1F2A24 ON user_element (element_id)');
        $this->addSql('CREATE INDEX IDX_194D4033A76ED395 ON user_element (user_id)');
    }
}
