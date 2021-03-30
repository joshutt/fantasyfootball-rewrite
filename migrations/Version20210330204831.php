<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330204831 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nfl_draft_pick (id INT AUTO_INCREMENT NOT NULL, team_id INT NOT NULL, player_id INT NOT NULL, year INT NOT NULL, round INT NOT NULL, pick INT NOT NULL, INDEX IDX_9EF2FF6F296CD8AE (team_id), UNIQUE INDEX UNIQ_9EF2FF6F99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nfl_former_names (id INT AUTO_INCREMENT NOT NULL, nfl_team_id INT NOT NULL, city VARCHAR(20) NOT NULL, nickname VARCHAR(30) NOT NULL, abbrev VARCHAR(3) NOT NULL, start_year DATE NOT NULL, end_year DATE DEFAULT NULL, INDEX IDX_6C88AECA378DECEF (nfl_team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nfl_roster (id INT AUTO_INCREMENT NOT NULL, player_id INT NOT NULL, team_id INT NOT NULL, pos_id VARCHAR(2) DEFAULT NULL, date_on DATETIME NOT NULL, date_off DATETIME DEFAULT NULL, INDEX IDX_807F846B99E6F5DF (player_id), INDEX IDX_807F846B296CD8AE (team_id), INDEX IDX_807F846B41085FAE (pos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nfl_team (id INT AUTO_INCREMENT NOT NULL, city VARCHAR(20) NOT NULL, nickname VARCHAR(30) NOT NULL, abbrev VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, pos_id VARCHAR(2) DEFAULT NULL, last_name VARCHAR(25) NOT NULL, first_name VARCHAR(25) NOT NULL, height INT DEFAULT NULL, weight INT DEFAULT NULL, dob DATE DEFAULT NULL, active TINYINT(1) NOT NULL, number INT DEFAULT NULL, INDEX IDX_98197A6541085FAE (pos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_ext_id (id INT AUTO_INCREMENT NOT NULL, player_id INT NOT NULL, system VARCHAR(20) NOT NULL, ext_id VARCHAR(20) NOT NULL, INDEX IDX_C204297399E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_score (id INT AUTO_INCREMENT NOT NULL, player_id INT NOT NULL, week_id INT NOT NULL, pts INT NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_8DEB4C1799E6F5DF (player_id), INDEX IDX_8DEB4C17C86F3B2F (week_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_stats (id INT AUTO_INCREMENT NOT NULL, week_id INT NOT NULL, player_id INT NOT NULL, complete TINYINT(1) NOT NULL, yards INT DEFAULT NULL, int_throw INT DEFAULT NULL, rec INT DEFAULT NULL, fumble INT DEFAULT NULL, tackles INT DEFAULT NULL, sacks INT DEFAULT NULL, half_sack INT DEFAULT NULL, int_catch INT DEFAULT NULL, pass_defend INT DEFAULT NULL, return_yard INT DEFAULT NULL, fum_rec INT DEFAULT NULL, fum_force INT DEFAULT NULL, td INT DEFAULT NULL, two_point INT DEFAULT NULL, spec_td INT DEFAULT NULL, safety INT DEFAULT NULL, xp INT DEFAULT NULL, miss_xp INT DEFAULT NULL, fg30 INT DEFAULT NULL, fg40 INT DEFAULT NULL, fg50 INT DEFAULT NULL, fg60 INT DEFAULT NULL, miss_fg30 INT DEFAULT NULL, pt_diff INT DEFAULT NULL, block_punt INT DEFAULT NULL, block_fg INT DEFAULT NULL, block_xp INT DEFAULT NULL, penalty INT DEFAULT NULL, INDEX IDX_E8351CECC86F3B2F (week_id), INDEX IDX_E8351CEC99E6F5DF (player_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE position (id VARCHAR(2) NOT NULL, use_pos TINYINT(1) NOT NULL, full_name VARCHAR(15) NOT NULL, offense TINYINT(1) NOT NULL, defense TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE season (id INT NOT NULL, draft_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE week (id INT AUTO_INCREMENT NOT NULL, season_id INT NOT NULL, week INT NOT NULL, display_name VARCHAR(255) NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, activation_due DATETIME NOT NULL, display_date DATETIME NOT NULL, INDEX IDX_5B5A69C04EC001D1 (season_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nfl_draft_pick ADD CONSTRAINT FK_9EF2FF6F296CD8AE FOREIGN KEY (team_id) REFERENCES nfl_team (id)');
        $this->addSql('ALTER TABLE nfl_draft_pick ADD CONSTRAINT FK_9EF2FF6F99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE nfl_former_names ADD CONSTRAINT FK_6C88AECA378DECEF FOREIGN KEY (nfl_team_id) REFERENCES nfl_team (id)');
        $this->addSql('ALTER TABLE nfl_roster ADD CONSTRAINT FK_807F846B99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE nfl_roster ADD CONSTRAINT FK_807F846B296CD8AE FOREIGN KEY (team_id) REFERENCES nfl_team (id)');
        $this->addSql('ALTER TABLE nfl_roster ADD CONSTRAINT FK_807F846B41085FAE FOREIGN KEY (pos_id) REFERENCES position (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A6541085FAE FOREIGN KEY (pos_id) REFERENCES position (id)');
        $this->addSql('ALTER TABLE player_ext_id ADD CONSTRAINT FK_C204297399E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_score ADD CONSTRAINT FK_8DEB4C1799E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player_score ADD CONSTRAINT FK_8DEB4C17C86F3B2F FOREIGN KEY (week_id) REFERENCES week (id)');
        $this->addSql('ALTER TABLE player_stats ADD CONSTRAINT FK_E8351CECC86F3B2F FOREIGN KEY (week_id) REFERENCES week (id)');
        $this->addSql('ALTER TABLE player_stats ADD CONSTRAINT FK_E8351CEC99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE week ADD CONSTRAINT FK_5B5A69C04EC001D1 FOREIGN KEY (season_id) REFERENCES season (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE nfl_draft_pick DROP FOREIGN KEY FK_9EF2FF6F296CD8AE');
        $this->addSql('ALTER TABLE nfl_former_names DROP FOREIGN KEY FK_6C88AECA378DECEF');
        $this->addSql('ALTER TABLE nfl_roster DROP FOREIGN KEY FK_807F846B296CD8AE');
        $this->addSql('ALTER TABLE nfl_draft_pick DROP FOREIGN KEY FK_9EF2FF6F99E6F5DF');
        $this->addSql('ALTER TABLE nfl_roster DROP FOREIGN KEY FK_807F846B99E6F5DF');
        $this->addSql('ALTER TABLE player_ext_id DROP FOREIGN KEY FK_C204297399E6F5DF');
        $this->addSql('ALTER TABLE player_score DROP FOREIGN KEY FK_8DEB4C1799E6F5DF');
        $this->addSql('ALTER TABLE player_stats DROP FOREIGN KEY FK_E8351CEC99E6F5DF');
        $this->addSql('ALTER TABLE nfl_roster DROP FOREIGN KEY FK_807F846B41085FAE');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A6541085FAE');
        $this->addSql('ALTER TABLE week DROP FOREIGN KEY FK_5B5A69C04EC001D1');
        $this->addSql('ALTER TABLE player_score DROP FOREIGN KEY FK_8DEB4C17C86F3B2F');
        $this->addSql('ALTER TABLE player_stats DROP FOREIGN KEY FK_E8351CECC86F3B2F');
        $this->addSql('DROP TABLE nfl_draft_pick');
        $this->addSql('DROP TABLE nfl_former_names');
        $this->addSql('DROP TABLE nfl_roster');
        $this->addSql('DROP TABLE nfl_team');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE player_ext_id');
        $this->addSql('DROP TABLE player_score');
        $this->addSql('DROP TABLE player_stats');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE season');
        $this->addSql('DROP TABLE week');
    }
}
