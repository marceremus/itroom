<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201116112655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tirage (id INT AUTO_INCREMENT NOT NULL, annee_numero_de_tirage DATETIME NOT NULL, jour_de_tirage VARCHAR(100) NOT NULL, date_de_tirage DATETIME NOT NULL, date_de_forclusion DATETIME NOT NULL, boule_1 INT NOT NULL, boule_2 INT NOT NULL, boule_3 INT NOT NULL, boule_4 INT NOT NULL, boule_5 INT NOT NULL, numero_chance INT NOT NULL, combinaison_gagnante_en_ordre_croissant VARCHAR(100) NOT NULL, nombre_de_gagnant_au_rang1 TINYINT(1) NOT NULL, rapport_du_rang1 INT NOT NULL, nombre_de_gagnant_au_rang2 INT NOT NULL, rapport_du_rang2 NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang3 INT NOT NULL, rapport_du_rang3 NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang4 INT NOT NULL, rapport_du_rang4 NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang5 INT NOT NULL, rapport_du_rang5 NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang6 INT NOT NULL, rapport_du_rang6 NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang7 INT NOT NULL, rapport_du_rang7 NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang8 INT NOT NULL, rapport_du_rang8 NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang9 INT NOT NULL, rapport_du_rang9 NUMERIC(10, 0) NOT NULL, nombre_de_codes_gagnants INT NOT NULL, rapport_codes_gagnants INT NOT NULL, codes_gagnants VARCHAR(100) NOT NULL, boule_1_second_tirage INT NOT NULL, boule_2_second_tirage INT NOT NULL, boule_3_second_tirage INT NOT NULL, boule_4_second_tirage INT NOT NULL, boule_5_second_tirage INT NOT NULL, combinaison_gagnant_second_tirage_en_ordre_croissant VARCHAR(100) NOT NULL, nombre_de_gagnant_au_rang_1_second_tirage INT NOT NULL, rapport_du_rang1_second_tirage INT NOT NULL, nombre_de_gagnant_au_rang_2_second_tirage INT NOT NULL, rapport_du_rang2_second_tirage NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang_3_second_tirage INT NOT NULL, rapport_du_rang3_second_tirage NUMERIC(10, 0) NOT NULL, nombre_de_gagnant_au_rang_4_second_tirage INT NOT NULL, rapport_du_rang4_second_tirage INT NOT NULL, numero_jokerplus VARCHAR(100) NOT NULL, devise VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tirage');
    }
}
