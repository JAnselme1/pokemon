-- TABLE CARTE
SELECT * FROM `carte` WHERE abbreviationSerie LIKE "CEL" ORDER BY `carte`.`rang` ASC

insert into`carte`(`referenceCM`, `rang`, `secrete`, `nomCarteFR`, `nomCarteEN`, `rarete`, `prix`, `abbreviationSerie`) VALUES
	('CEL001',1,0,'Ho-Oh','Ho-Oh',3,NULL,'CEL'),
	('CEL002',2,0,'Reshiram','Reshiram',3,NULL,'CEL'),
	('CEL003',3,0,'Kyogre','Kyogre',3,NULL,'CEL'),
	('CEL004',4,0,'Palkia','Palkia' ,3,NULL,'CEL'),
	('CEL005',5,0,'Pikachu','Pikachu',3,NULL,'CEL');


-----------------------------------------------------------------------------------------------------------------------------------------

insert into`carte`(`referenceCM`, `rang`, `secrete`, `nomCarteFR`, `nomCarteEN`, `rarete`, `prix`, `abbreviationSerie`) VALUES
	('CEL006',6,0,'Pikachu Volant V','Flying Pikachu V',4,NULL,'CEL'),
	('CEL007',7,0,'Pikachu Volant-VMAX','Flying Pikachu-VMAX',4,NULL,'CEL'),
	('CEL008',8,0,'Pikachu Surfeur-V','Surfing Pikachu-V',4,NULL,'CEL'),
	('CEL009',9,0,'Pikachu Surfeur-VMAX','Surfing Pikachu-VMAX' ,4,NULL,'CEL'),
	('CEL010',10,0,'Zekrom','Zekrom',3,NULL,'CEL');
	
-----------------------------------------------------------------------------------------------------------------------------------------

insert into`carte`(`referenceCM`, `rang`, `secrete`, `nomCarteFR`, `nomCarteEN`, `rarete`, `prix`, `abbreviationSerie`) VALUES
	('CEL011',11,0,'Mew','Mew',3,NULL,'CEL'),
	('CEL012',12,0,'Xerneas','Xerneas',3,NULL,'CEL'),
	('CEL013',13,0,'Cosmog','Cosmog',3,NULL,'CEL'),
	('CEL014',14,0,'Cosmovum','Cosmoem',3,NULL,'CEL'),
	('CEL015',15,0,'Lunala','Lunala',3,NULL,'CEL');
	
-----------------------------------------------------------------------------------------------------------------------------------------

insert into`carte`(`referenceCM`, `rang`, `secrete`, `nomCarteFR`, `nomCarteEN`, `rarete`, `prix`, `abbreviationSerie`) VALUES
	('CEL016',16,0,'Zacian-V','Zacian-V',4,NULL,'CEL'),
	('CEL017',17,0,'Groudon','Groudon',3,NULL,'CEL'),
	('CEL018',18,0,'Zamazenta-V','Zamazenta-V',4,NULL,'CEL'),
	('CEL019',19,0,'Yveltal','Yveltal',3,NULL,'CEL'),
	('CEL020',20,0,'Dialga','Dialga',3,NULL,'CEL');
	
-----------------------------------------------------------------------------------------------------------------------------------------

insert into`carte`(`referenceCM`, `rang`, `secrete`, `nomCarteFR`, `nomCarteEN`, `rarete`, `prix`, `abbreviationSerie`) VALUES
	('CEL021',21,0,'Solgaleo','Solgaleo',3,NULL,'CEL'),
	('CEL022',22,0,'Lugia','Lugia',3,NULL,'CEL'),
	('CEL023',23,0,'Recherches Professorales',"Professor's Research",3,NULL,'CEL'),
	('CEL024',24,0,'Recherches Professorales',"Professor's Research",4,NULL,'CEL'),
	('CEL025',25,0,'Mew','Mew',4,NULL,'CEL');

	
insert into`carte`(`referenceCM`, `rang`, `secrete`, `nomCarteFR`, `nomCarteEN`, `rarete`, `prix`, `abbreviationSerie`) VALUES
	('CEL BS2',26,1,'Tortank','Blastoise',4,NULL,'CEL'),
	('CEL BS4',27,1,'Dracaufeu','Charizard',4,NULL,'CEL'),
	('CEL BS15',28,1,'Florizarre','Venusaur',4,NULL,'CEL'),
	('CEL BS73',29,1,'Faux Professeur Chen','Imposter Professor Oak' ,4,NULL,'CEL'),
	('CEL TR8',30,1,'Léviator Obscur','Dark Gyarados',4,NULL,'CEL'),
	('CEL TR15',31,1,'Et voilà la Team Rocket !','Here Comes Team Rocket!',4,NULL,'CEL'),
	('CEL GC15',32,1,'Électhor de Rocket',"Rocket's Zapdos",4,NULL,'CEL'),
	('CEL WP24',33,1,'Pikachu de _____',"_____'s Pikachu",4,NULL,'CEL'),
	('CEL NG20',34,1,'Mélo','Imposter Professor Oak' ,4,NULL,'CEL'),
	('CEL NR66',35,1,'Magicarpe Brillant','Shining Magikarp',4,NULL,'CEL'),
	('CEL MA9',36,1,'Groudon de Team Magma',"Team Magma's Groudon",4,NULL,'CEL'),
	('CEL TRR86',37,1,'Admin Rocket',"Rocket's Admin",4,NULL,'CEL'),
	('CEL LM88',38,1,'Mew ex','Mew ex',4,NULL,'CEL'),
	('CEL DF93',39,1,'Gardevoir ex',"Gardevoir ex" ,4,NULL,'CEL'),
	('CEL POP517',40,1,'Noctali','Umbreon',4,NULL,'CEL'),
	('CEL GE15',41,1,'Kaorine','Claydol',4,NULL,'CEL'),
	('CEL RR109',42,1,'Luxray GL NIV.X','Luxray GL LV.X',4,NULL,'CEL'),
	('CEL SV145',43,1,'Carchacrok C NIV.X','Garchomp C LV.X',4,NULL,'CEL'),
	('CEL HS107',44,1,'Donphan','Donphan',4,NULL,'CEL'),
	('CEL BLW113',45,1,'Reshiram','Reshiram',4,NULL,'CEL'),
	('CEL BLW114',46,1,'Zekrom','Zekrom',4,NULL,'CEL'),
	('CEL NXD54',47,1,'Mewtwo-EX','Mewtwo-EX',4,NULL,'CEL'),
	('CEL XY97',48,1,'Xerneas-EX ','Xerneas-EX ',4,NULL,'CEL'),
	('CEL ROS76',49,1,'Méga Rayquaza-EX','Mega Rayquaza-EX',4,NULL,'CEL'),
	('CEL GRI60',50,1,'Tokopiyon-GX','Tapu Lele-GX',4,NULL,'CEL');
	
-----------------------------------------------------------------------------------------------------------------------------------------

-- TABLE collection

INSERT INTO `collection`(`nombreCarte`, `PKCollection`, `referenceCM`, `idTypeCarte`) VALUES 
(1,10,'CEL001',3),
(1,11,'CEL002',3),
(1,12,'CEL003',3),
(1,13,'CEL004',3),
(1,14,'CEL005',3);

-----------------------------------------------------------------------------------------------------------------------------------------
	
INSERT INTO `collection`(`nombreCarte`, `PKCollection`, `referenceCM`, `idTypeCarte`) VALUES 
(1,15,'CEL006',3),
(1,16,'CEL007',3),
(1,17,'CEL008',3),
(1,18,'CEL009',3),
(1,19,'CEL010',3);

-----------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO `collection`(`nombreCarte`, `PKCollection`, `referenceCM`, `idTypeCarte`) VALUES 
(1,20,'CEL011',3),
(1,21,'CEL012',3),
(1,22,'CEL013',3),
(1,23,'CEL014',3),
(1,24,'CEL015',3);
(1,25,'CEL016',3),
(1,26,'CEL017',3),
(1,27,'CEL018',3),
(1,28,'CEL019',3),
(1,29,'CEL020',3);

-----------------------------------------------------------------------------------------------------------------------------------------
-- afficher CEL : select * from collection where LEFT(referenceCM ,3) LIKE "CEL";
-- afficher secrètes : select * from collection where PKCollection > 34
INSERT INTO `collection`(`nombreCarte`, `PKCollection`, `referenceCM`, `idTypeCarte`) VALUES 
(1,30,'CEL021',3),
(1,31,'CEL022',3),
(1,32,'CEL023',3),
(1,33,'CEL024',3),
(1,34,'CEL025',3),
(1,35,'CEL BS2',3),
(1,36,'CEL BS4',3),
(1,37,'CEL BS15',3),
(1,38,'CEL BS73',3),
(1,39,'CEL TR8',3);
	
-----------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO `collection`(`nombreCarte`, `PKCollection`, `referenceCM`, `idTypeCarte`) VALUES 
(1,40,'CEL TR15',3),
(1,41,'CEL GC15',3),
(1,42,'CEL WP24',3),
(1,43,'CEL NG20',3),
(1,44,'CEL NR66',3),
(1,45,'CEL MA9',3),
(1,46,'CEL TRR86',3),
(1,47,'CEL LM88',3),
(1,48,'CEL DF93',3),
(1,49,'CEL POP517',3);

-----------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO `collection`(`nombreCarte`, `PKCollection`, `referenceCM`, `idTypeCarte`) VALUES 
(1,50,'CEL GE15',3),
(1,51,'CEL RR109',3),
(1,52,'CEL SV145',3),
(1,53,'CEL HS107',3),
(1,54,'CEL BLW113',3),
(1,55,'CEL BLW114',3),
(1,56,'CEL NXD54',3),
(1,57,'CEL XY97',3),
(1,58,'CEL ROS76',3),
(1,59,'CEL GRI60',3);

-----------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO `collection`(`nombreCarte`, `PKCollection`, `referenceCM`, `idTypeCarte`) VALUES 
(1,38,'CEL BS73',3),
(1,40,'CEL TR15',3),
(1,41,'CEL GC15',3),
(1,58,'CEL ROS76',3);

SELECT * FROM `carte` WHERE abbreviationSerie LIKE "CEL" ORDER BY `carte`.`rang` ASC

	