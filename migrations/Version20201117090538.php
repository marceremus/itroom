<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117090538 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tirage CHANGE annee_numero_de_tirage annee_numero_de_tirage VARCHAR(200) DEFAULT NULL, CHANGE date_de_tirage date_de_tirage VARCHAR(200) DEFAULT NULL, CHANGE date_de_forclusion date_de_forclusion VARCHAR(200) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tirage CHANGE annee_numero_de_tirage annee_numero_de_tirage DATETIME DEFAULT NULL, CHANGE date_de_tirage date_de_tirage DATETIME DEFAULT NULL, CHANGE date_de_forclusion date_de_forclusion DATETIME DEFAULT NULL');
    }
}
