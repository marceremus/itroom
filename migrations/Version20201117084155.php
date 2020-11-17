<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117084155 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tirage CHANGE nombre_de_gagnant_au_rang3 nombre_de_gagnant_au_rang3 VARCHAR(200) DEFAULT NULL, CHANGE nombre_de_gagnant_au_rang4 nombre_de_gagnant_au_rang4 VARCHAR(200) DEFAULT NULL, CHANGE nombre_de_gagnant_au_rang5 nombre_de_gagnant_au_rang5 VARCHAR(200) DEFAULT NULL, CHANGE nombre_de_gagnant_au_rang6 nombre_de_gagnant_au_rang6 VARCHAR(200) DEFAULT NULL, CHANGE nombre_de_gagnant_au_rang7 nombre_de_gagnant_au_rang7 VARCHAR(200) DEFAULT NULL, CHANGE nombre_de_gagnant_au_rang8 nombre_de_gagnant_au_rang8 VARCHAR(200) DEFAULT NULL, CHANGE nombre_de_gagnant_au_rang9 nombre_de_gagnant_au_rang9 VARCHAR(200) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tirage CHANGE nombre_de_gagnant_au_rang3 nombre_de_gagnant_au_rang3 VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nombre_de_gagnant_au_rang4 nombre_de_gagnant_au_rang4 VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nombre_de_gagnant_au_rang5 nombre_de_gagnant_au_rang5 VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nombre_de_gagnant_au_rang6 nombre_de_gagnant_au_rang6 VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nombre_de_gagnant_au_rang7 nombre_de_gagnant_au_rang7 VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nombre_de_gagnant_au_rang8 nombre_de_gagnant_au_rang8 VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nombre_de_gagnant_au_rang9 nombre_de_gagnant_au_rang9 VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
