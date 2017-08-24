/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  19/04/2016 12:57:40                      */
/*==============================================================*/


drop table if exists CAMPAGNE;

drop table if exists DCSRX;

drop table if exists DCSTX;

drop table if exists DECT;

drop table if exists FM;

drop table if exists GSMRX;

drop table if exists GSMTX;

drop table if exists PROJET;

drop table if exists RESULTAT;

drop table if exists TETRA;

drop table if exists TV3;

drop table if exists TV45;

drop table if exists UMTSRX;

drop table if exists UMTSTX;

drop table if exists UTILISATEUR;

drop table if exists WIFI;

/*==============================================================*/
/* Table : CAMPAGNE                                             */
/*==============================================================*/
create table CAMPAGNE
(
   IDCAMPAGNE           bigint not null AUTO_INCREMENT,
   IDPROJET             bigint not null,
   FICHIER              char(60),
   primary key (IDCAMPAGNE)
);

/*==============================================================*/
/* Table : DCSRX                                                */
/*==============================================================*/
create table DCSRX
(
   IDDCSRX              bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDDCSRX)
);

/*==============================================================*/
/* Table : DCSTX                                                */
/*==============================================================*/
create table DCSTX
(
   IDDCSTX              bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDDCSTX)
);

/*==============================================================*/
/* Table : DECT                                                 */
/*==============================================================*/
create table DECT
(
   IDDECT               bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDDECT)
);

/*==============================================================*/
/* Table : FM                                                   */
/*==============================================================*/
create table FM
(
   IDFM                 bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDFM)
);

/*==============================================================*/
/* Table : GSMRX                                                */
/*==============================================================*/
create table GSMRX
(
   IDGSMRX              bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDGSMRX)
);

/*==============================================================*/
/* Table : GSMTX                                                */
/*==============================================================*/
create table GSMTX
(
   IDGSMTX              bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDGSMTX)
);

/*==============================================================*/
/* Table : PROJET                                               */
/*==============================================================*/
create table PROJET
(
   IDPROJET             bigint not null AUTO_INCREMENT,
   IDUTILISATEUR        bigint not null,
   REGION               char(160),
   VILLE                char(160),
   DATEDEDEBUT          char(20),
   COMMENTAIRE          text,
   primary key (IDPROJET)
);

/*==============================================================*/
/* Table : RESULTAT                                             */
/*==============================================================*/
create table RESULTAT
(
   IDRESULTAT           bigint not null AUTO_INCREMENT,
   IDCAMPAGNE           bigint not null,
   DATE                 char(20),
   TIME                 char(20),
   BATTERY              int,
   TEMPERATURE          float(4),
   MARQUEUR             char(60),
   GPS                  char(60),
   primary key (IDRESULTAT)
);

/*==============================================================*/
/* Table : TETRA                                                */
/*==============================================================*/
create table TETRA
(
   IDTETRA              bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   MERTIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDTETRA)
);

/*==============================================================*/
/* Table : TV3                                                  */
/*==============================================================*/
create table TV3
(
   IDTV3                bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDTV3)
);

/*==============================================================*/
/* Table : TV45                                                 */
/*==============================================================*/
create table TV45
(
   IDTV45               bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDTV45)
);

/*==============================================================*/
/* Table : UMTSRX                                               */
/*==============================================================*/
create table UMTSRX
(
   IDUMTSRX             bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDUMTSRX)
);

/*==============================================================*/
/* Table : UMTSTX                                               */
/*==============================================================*/
create table UMTSTX
(
   IMTSTX               bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IMTSTX)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   IDUTILISATEUR        bigint not null AUTO_INCREMENT,
   NOM                  char(60),
   PRENOM               char(60),
   EMAIL                char(60),
   M2P                  char(60),
   PROFIL               char(60),
   primary key (IDUTILISATEUR)
);

/*==============================================================*/
/* Table : WIFI                                                 */
/*==============================================================*/
create table WIFI
(
   IDWIFI               bigint not null AUTO_INCREMENT,
   IDRESULTAT           bigint not null,
   V_M                  double,
   MW_CM                double,
   W_M                  double,
   GPE                  double,
   OE                   double,
   METRIQUE1            double,
   METRIQUE2            double,
   METRIQUE3            double,
   METRIQUE4            double,
   primary key (IDWIFI)
);

alter table CAMPAGNE add constraint FK_ASSOCIATION_2 foreign key (IDPROJET)
      references PROJET (IDPROJET) on delete restrict on update cascade;

alter table DCSRX add constraint FK_ASSOCIATION_11 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table DCSTX add constraint FK_ASSOCIATION_8 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table DECT add constraint FK_ASSOCIATION_15 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table FM add constraint FK_ASSOCIATION_5 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table GSMRX add constraint FK_ASSOCIATION_9 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table GSMTX add constraint FK_ASSOCIATION_7 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table PROJET add constraint FK_ASSOCIATION_1 foreign key (IDUTILISATEUR)
      references UTILISATEUR (IDUTILISATEUR) on delete restrict on update cascade;

alter table RESULTAT add constraint FK_ASSOCIATION_3 foreign key (IDCAMPAGNE)
      references CAMPAGNE (IDCAMPAGNE) on delete restrict on update cascade;

alter table TETRA add constraint FK_ASSOCIATION_16 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table TV3 add constraint FK_ASSOCIATION_14 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table TV45 add constraint FK_ASSOCIATION_4 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table UMTSRX add constraint FK_ASSOCIATION_6 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table UMTSTX add constraint FK_ASSOCIATION_10 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

alter table WIFI add constraint FK_ASSOCIATION_12 foreign key (IDRESULTAT)
      references RESULTAT (IDRESULTAT) on delete restrict on update cascade;

