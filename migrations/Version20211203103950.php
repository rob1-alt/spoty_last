<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211203103950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE top_artist (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, spotify_id VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE top_artist_user (top_artist_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_2F0BDF34C85C3489 (top_artist_id), INDEX IDX_2F0BDF34A76ED395 (user_id), PRIMARY KEY(top_artist_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE top_track (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, image_url LONGTEXT NOT NULL, duration INT NOT NULL, release_date DATE NOT NULL, spotify_id VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE top_track_user (top_track_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_37B874DEFFE7F60F (top_track_id), INDEX IDX_37B874DEA76ED395 (user_id), PRIMARY KEY(top_track_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE top_artist_user ADD CONSTRAINT FK_2F0BDF34C85C3489 FOREIGN KEY (top_artist_id) REFERENCES top_artist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE top_artist_user ADD CONSTRAINT FK_2F0BDF34A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE top_track_user ADD CONSTRAINT FK_37B874DEFFE7F60F FOREIGN KEY (top_track_id) REFERENCES top_track (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE top_track_user ADD CONSTRAINT FK_37B874DEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user DROP top_items');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE top_artist_user DROP FOREIGN KEY FK_2F0BDF34C85C3489');
        $this->addSql('ALTER TABLE top_track_user DROP FOREIGN KEY FK_37B874DEFFE7F60F');
        $this->addSql('DROP TABLE top_artist');
        $this->addSql('DROP TABLE top_artist_user');
        $this->addSql('DROP TABLE top_track');
        $this->addSql('DROP TABLE top_track_user');
        $this->addSql('ALTER TABLE user ADD top_items LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
