<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240527063503 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE loyalty (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE loyalty_user (loyalty_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_713FF227C906750D (loyalty_id), INDEX IDX_713FF227A76ED395 (user_id), PRIMARY KEY(loyalty_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE loyalty_user ADD CONSTRAINT FK_713FF227C906750D FOREIGN KEY (loyalty_id) REFERENCES loyalty (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE loyalty_user ADD CONSTRAINT FK_713FF227A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE loyalty_user DROP FOREIGN KEY FK_713FF227C906750D');
        $this->addSql('ALTER TABLE loyalty_user DROP FOREIGN KEY FK_713FF227A76ED395');
        $this->addSql('DROP TABLE loyalty');
        $this->addSql('DROP TABLE loyalty_user');
        $this->addSql('DROP TABLE user');
    }
}
