<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220721105838 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE caractere (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, habilete INT DEFAULT NULL, adresse INT DEFAULT NULL, endurance INT DEFAULT NULL, chance INT DEFAULT NULL, damage INT DEFAULT NULL, armor INT DEFAULT NULL, crit INT DEFAULT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, caracteres_id INT DEFAULT NULL, notes_id INT DEFAULT NULL, items_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, pv INT DEFAULT NULL, chance INT DEFAULT NULL, gloire INT DEFAULT NULL, richesse INT DEFAULT NULL, damage INT DEFAULT NULL, armor INT DEFAULT NULL, critique INT DEFAULT NULL, pvmax INT DEFAULT NULL, habilete_base INT DEFAULT NULL, habilete_carac INT DEFAULT NULL, habilete_item INT DEFAULT NULL, habilete_gain INT DEFAULT NULL, habilete_total INT DEFAULT NULL, adresse_base INT DEFAULT NULL, adresse_carac INT DEFAULT NULL, adresse_item INT DEFAULT NULL, adresse_gain INT DEFAULT NULL, adresse_total INT DEFAULT NULL, endurance_base INT DEFAULT NULL, endurance_carac INT DEFAULT NULL, endurance_item INT DEFAULT NULL, endurance_gain INT DEFAULT NULL, endurance_total INT DEFAULT NULL, chance_base INT DEFAULT NULL, chance_carac INT DEFAULT NULL, chance_item INT DEFAULT NULL, chance_gain INT DEFAULT NULL, chance_total INT DEFAULT NULL, INDEX IDX_232B318CF41952E7 (caracteres_id), INDEX IDX_232B318CFC56F556 (notes_id), INDEX IDX_232B318C6BB0AE84 (items_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, is_start TINYINT(1) NOT NULL, name VARCHAR(255) NOT NULL, habilete INT DEFAULT NULL, adresse INT DEFAULT NULL, endurance INT DEFAULT NULL, chance INT DEFAULT NULL, damage INT DEFAULT NULL, armor INT DEFAULT NULL, crit INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, typage VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livre (id INT AUTO_INCREMENT NOT NULL, numero INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CF41952E7 FOREIGN KEY (caracteres_id) REFERENCES caractere (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CFC56F556 FOREIGN KEY (notes_id) REFERENCES note (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C6BB0AE84 FOREIGN KEY (items_id) REFERENCES item (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318CF41952E7');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C6BB0AE84');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318CFC56F556');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE caractere');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE livre');
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
    }
}
