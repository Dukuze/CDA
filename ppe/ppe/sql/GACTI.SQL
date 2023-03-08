DROP DATABASE IF EXISTS GACTI;

CREATE DATABASE IF NOT EXISTS GACTI;
USE GACTI;


/*

Import all the table at hom onMysql Server And complete the works

*/
# -----------------------------------------------------------------------------
#       TABLE : TYPE_ANIM
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_ANIM
 (
   CODETYPEANIM CHAR(5) NOT NULL  ,
   NOMTYPEANIM CHAR(50) NULL  
   , PRIMARY KEY (CODETYPEANIM) 
 ) 
 comment = "";



# -----------------------------------------------------------------------------
#       TABLE : INSCRIPTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSCRIPTION
 (
   NOINSCRIP BIGINT(6) NOT NULL AUTO_INCREMENT ,
   USER CHAR(8) NOT NULL  ,
   NOACT INTEGER(4) NOT NULL  ,
   DATEINSCRIP DATE NULL  ,
   DATEANNULE DATE NULL  
   , PRIMARY KEY (NOINSCRIP) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INSCRIPTION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INSCRIPTION_COMPTE
     ON INSCRIPTION (USER ASC);

CREATE  INDEX I_FK_INSCRIPTION_ACTIVITE
     ON INSCRIPTION (NOACT ASC);

# -----------------------------------------------------------------------------
#       TABLE : ETAT_ACT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ETAT_ACT
 (
   CODEETATACT CHAR(2) NOT NULL  ,
   NOMETATACT CHAR(25) NULL  
   , PRIMARY KEY (CODEETATACT) 
 ) 
 comment = "";



# -----------------------------------------------------------------------------
#       TABLE : ACTIVITE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ACTIVITE
 (
   NOACT INTEGER(4) NOT NULL  ,
   CODEANIM CHAR(8) NOT NULL  ,
   CODEETATACT CHAR(2) NOT NULL  ,
   DATEACT DATE NOT NULL  ,
   HRRDVACT TIME NULL  ,
   PRIXACT DECIMAL(7,2) NULL  ,
   HRDEBUTACT TIME NULL  ,
   HRFINACT TIME NULL  ,
   DATEANNULEACT DATE NULL  ,
   NOMRESP CHAR(40) NULL  ,
   PRENOMRESP CHAR(30) NULL  
   , PRIMARY KEY (NOACT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ACTIVITE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ACTIVITE_ANIMATION
     ON ACTIVITE (CODEANIM ASC);

CREATE  INDEX I_FK_ACTIVITE_ETAT_ACT
     ON ACTIVITE (CODEETATACT ASC);

# -----------------------------------------------------------------------------
#       TABLE : ANIMATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ANIMATION
 (
   CODEANIM CHAR(8) NOT NULL  ,
   CODETYPEANIM CHAR(5) NOT NULL  ,
   NOMANIM CHAR(40) NULL  ,
   DATECREATIONANIM DATE NULL  ,
   DATEVALIDITEANIM DATE NULL  ,
   DUREEANIM REAL(5,0) NULL       CHECK (DUREEANIM in (J,M,AM)),
   LIMITEAGE INTEGER(2) NULL  ,
   TARIFANIM DECIMAL(7,2) NULL  ,
   NBREPLACEANIM INTEGER(2) NULL  ,
   DESCRIPTANIM CHAR(250) NULL  ,
   COMMENTANIM CHAR(250) NULL  ,
   DIFFICULTEANIM CHAR(40) NULL  
   , PRIMARY KEY (CODEANIM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ANIMATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ANIMATION_TYPE_ANIM
     ON ANIMATION (CODETYPEANIM ASC);

# -----------------------------------------------------------------------------
#       TABLE : COMPTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMPTE
 (
   USER CHAR(8) NOT NULL  ,
   MDP CHAR(10) NULL  ,
   NOMCOMPTE CHAR(40) NULL  ,
   PRENOMCOMPTE CHAR(30) NULL  ,
   DATEINSCRIP DATE NULL  ,
   DATEFERME DATE NULL  ,
   TYPEPROFIL CHAR(2) NULL  ,
   DATEDEBSEJOUR DATE NULL  ,
   DATEFINSEJOUR DATE NULL  ,
   DATENAISCOMPTE DATE NULL  ,
   ADRMAILCOMPTE CHAR(70) NULL  ,
   NOTELCOMPTE CHAR(15) NULL  
   , PRIMARY KEY (USER) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE INSCRIPTION 
  ADD FOREIGN KEY FK_INSCRIPTION_COMPTE (USER)
      REFERENCES COMPTE (USER) ;


ALTER TABLE INSCRIPTION 
  ADD FOREIGN KEY FK_INSCRIPTION_ACTIVITE (NOACT)
      REFERENCES ACTIVITE (NOACT) ;


ALTER TABLE ACTIVITE 
  ADD FOREIGN KEY FK_ACTIVITE_ANIMATION (CODEANIM)
      REFERENCES ANIMATION (CODEANIM) ;


ALTER TABLE ACTIVITE 
  ADD FOREIGN KEY FK_ACTIVITE_ETAT_ACT (CODEETATACT)
      REFERENCES ETAT_ACT (CODEETATACT) ;


ALTER TABLE ANIMATION 
  ADD FOREIGN KEY FK_ANIMATION_TYPE_ANIM (CODETYPEANIM)
      REFERENCES TYPE_ANIM (CODETYPEANIM) ;

