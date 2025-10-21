CREATE OR REPLACE DATABASE loi_fi;
USE loi_fi;


-- macroeco
CREATE TABLE Previsions_macroeco( AGREGASTS_MACROECONOMIQUE VARCHAR(100), 
annees_2024 DECIMAL(10,2), 
annees_2025 DECIMAL(10,2), 
annees_2026 DECIMAL(10,2) );
INSERT INTO Previsions_macroeco VALUES  
('PIB nominal', 78945.4, 88851.6, 99826.3), 
('Taux de croissance économique', 4.4, 5.0, 5.2), 
('Indice des prix à la consommation', 8.2, 7.1, 7.2), 
('Ratio de dépenses publiques', 16.2, 18.4, 17.8), 
('Solde global', -4.3, -4.1, -4.1), 
('Solde primaire', 214.2, 1097.6, 866.0);

CREATE TABLE Taux_change (
    TYPE_TAUX VARCHAR(100),
    annees_2024 DECIMAL(10,2),
    annees_2025 DECIMAL(10,2),
    annees_2026 DECIMAL(10,2)
);

INSERT INTO Taux_change VALUES
('Dollars/Ariary', 4508.6, 4688.8, 4853.2),
('Euro/Ariary', 4905.5, 5275.2, 5532.7);

CREATE TABLE Taux_investissement_fiscal (
    INDICATEUR VARCHAR(100),
    annees_2024 DECIMAL(10,2),
    annees_2025 DECIMAL(10,2),
    annees_2026 DECIMAL(10,2)
);

INSERT INTO Taux_investissement_fiscal VALUES
('Investissement Public (% PIB)', 6.1, 9.6, 8.3),
('Investissement Privé (% PIB)', 14.6, 12.0, 13.7),
('Taux de pression fiscale (% PIB)', 10.6, 11.2, 11.8);


CREATE TABLE Taux_croiss_sec(
    Variation VARCHAR(100),
    Annees_2024 DECIMAL(10,2),
    Annees_2025 DECIMAL(10,2)
);

INSERT INTO Taux_croiss_sec VALUES
('SECTEUR PRIMAIRE', 5.3, 7.8),
('Agriculture', 6.0, 9.5),
('Elevage et pêche', 3.9, 4.0),
('Sylviculture', 1.0, 1.1),
('SECTEUR SECONDAIRE', -3.3, 3.4),
('Industrie extractive', -20.8, 4.0),
('Alimentaire, boisson, tabac', 0.9, 2.4),
('Textile', 31.5, 4.0),
('Bois, papiers, imprimerie', 0.4, 0.7),
('Matériaux de construction', 7.9, 8.0),
('Industrie métallique', 7.2, 7.3),
('Machine, matériels électriques', 3.1, 3.2),
('Industries diverses', 0.5, 0.6),
('Électricité, eau, gaz', 3.9, 4.0),
('SECTEUR TERTIAIRE', 5.0, 4.0),
('BTP', 3.2, 3.6),
('Commerce, entretiens, réparations', 4.2, 4.3),
('Hôtel, restaurant', 14.7, 14.9),
('Transport', 7.0, 7.2),
('Poste et télécommunication', 13.4, 13.7),
('Banque, assurance', 5.3, 6.1),
('Services aux entreprises', 2.3, 2.4),
('Administration', 1.7, 1.9),
('Éducation', 1.7, 1.8),
('Santé', 1.8, 1.9),
('Services rendus aux ménages', 1.3, 1.4);


-- Recette
CREATE TABLE Recettes_non_fiscales (
    POSTES VARCHAR(100),
    LFR_2024 DECIMAL(10,1),
    LF_2025 DECIMAL(10,1)
);

INSERT INTO Recettes_non_fiscales VALUES
('Dividendes', 89.5, 120.2),
('Productions immobilières financières', 0.5, 2.1),
('Redevance de pêche', 10.0, 15.0),
('Redevance minières', 84.9, 331.2),
('Autres redevance', 9.7, 10.0),
('Produits des activités et autres', 11.1, 8.1),
('Autres', 140.1, 5.2),
('TOTAL', 345.8, 491.7);


CREATE TABLE Dons (
    POSTES VARCHAR(50),
    LF_2024 DECIMAL(10,1),
    LF_2025 DECIMAL(10,1)
);


INSERT INTO Dons VALUES
('Courants', 0.3, 31.0),
('Capital', 1086.0, 2445.6),
('TOTAL', 1086.3, 2476.6);


CREATE TABLE Droits_taxes_import (
    NATURE_DES_DROITS_TAXES VARCHAR(100),
    LFR_2024 DECIMAL(10,1),
    LF_2025 DECIMAL(10,1)
);

INSERT INTO Droits_taxes_import VALUES
('Droit de douane', 847.5, 1010.7),
('TVA à l’importation', 1768.3, 2148.3),
('Taxe sur les produits pétroliers', 308.0, 326.0),
('TVA sur les produits pétroliers', 842.8, 879.0),
('Droit de navigation', 1.2, 1.9),
('Autres', 0.2, 0.1),
('TOTAL', 3768.0, 4366.0);


-- depences
CREATE TABLE Venti_dep_rub(
    RUBRIQUES VARCHAR(100),
    LFR2024 DECIMAL(10,2),
    LF2025 DECIMAL(10,2)
);

INSERT INTO Venti_dep_rub (RUBRIQUES,LFR2024,LF2025) values
('Interêts de la dette', 672.0 , 756.5 ),
('Dépenses courantes de solde (hors indemnités)' , 3814.5 , 3846.4),
('Dépenses courantes hors solde ', 3069.0 , 2304.3),
('Indemnites' , 244.8 , 244.8 ),
('Biens/Services', 573.2 , 504.7),
('Transferts et subventions' ,2251.0 , 1554.8),
('Dépenses d investissement' , 4836.8 , 8537.2),
('PIP sur financement interne' , 1262.5 ,2377.3),
('PIP sur financement externe' , 3574.3 ,6159.9),
('Autres opérations nettes du tresor' , 390.2 , 860.6),
('TOTAL' , 12782.4 ,16304.9);

CREATE TABLE budg_admin(
    Instition_ministeres VARCHAR(100),
    LFR2024 DECIMAL(10,2),
    LF2025 DECIMAL(10,2)
);

INSERT INTO budg_admin VALUES
('Présidence de la République',177.1, 224.7),
('Sénat', 22.1, 21.3),
('Assemblée Nationale', 87.4, 85.9),
('Haute Cour Constitutionnelle', 11.9, 9.3),
('Primature', 278.3, 339.9),
('Conseil du Fampihavanana Malagasy', 6.7, 6.3),
('Commission Électorale Nationale Indépendante', 113.3, 16.4),
('Ministère de la Défense Nationale', 557.0, 543.2),
('Ministère des Affaires Étrangères', 99.2, 104.7),
('Ministère de la Justice', 199.6, 219.8),
('Ministère de l’Intérieur', 150.2, 134.7),
('Ministère de l’Économie et des Finances', 2848.0, 2332.7),
('Ministère de la Sécurite Publique', 228.3, 229.2),
('Ministère de l’Industrialisation et du Commerce', 113.2, 119.6),
('Ministère de la Décentralisation et de l’Aménagement du Territoire', 356.8, 568.1),
('Ministère du Travail, de l’Emploi et de la Fonction Publique', 31.8, 33.7),
('Ministère du Tourisme et de l’Artisanat', 19.2, 43.9),
('Ministère de l’Enseignement Supérieur et de la Recherche Scientifique', 284.2, 285.6),
('Ministère de l’Environnement et du Développement Durable', 94.4, 188.8),
('Ministère de l’Éducation Nationale', 1532.8, 1562.0),
('Ministère des Transports et de la Météorologie', 63.9, 216.3),
('Ministère de la Santé Publique', 716.6, 921.0),
('Ministère de la Communication et de la Culture', 38.4, 32.1),
('Ministère des Travaux Publics', 1217.3, 2327.5),
('Ministère des Mines et des Ressources Strategiques', 18.3, 18.1),
('Ministère de l’Énergie et des Hydrocarbures', 407.9, 1332.0),
('Ministère de l’Eau, de l’Assainissement et de l’Hygiène', 306.1, 600.2),
('Ministère de l’Agriculture et de l’Élevage', 469.8, 795.5),
('Ministère de la Pêche et de l’Économie Bleue', 29.9, 28.8),
('Ministère de l’Enseignement Technique et de la Formation Professionnelle', 103.7, 94.8),
('Ministère de l’Artisanat et des Métiers', 2.5, NULL),
('Ministère du Développement Numérique, des Postes et des Télécommunications', 8.4, 8.8),
('Ministère de la Population et des Solidarités', 99.1, 193.4),
('Ministère de la Jeunesse et des Sports', 40.5, 58.1),
('Secretariat d’État en charge des Nouvelles Villes et de l’Habitat', 247.1, 138.8),
('Ministère délégué chargé de la Gendarmerie', 414.8, 446.4),
('Secrétariat d’État en charge de la Souveraineté Alimentaire', NULL, 127.3),
('Total Institutions et Ministères', 11395.9, 14408.9),
('Organes Constitutionnels', NULL, NULL),
('Haut Conseil pour la Défense de la Démocratie et de l’État de Droit (HCDDED)', 2.1, 2.0),
('Commission Nationale Indépendante des Droits de l’Homme (CNIDH)', 2.1, 2.0),
('Total « Organes Constitutionnels »', 4.2, 4.0),
('Haute Cour de Justice', 3.7, 3.5),
('Total Hors « Opérations d’ordre »', 11403.8, 14416.4);

CREATE TABLE Evo_dep_soldes (
    LIBELLES VARCHAR(150),
    LFR2024 DECIMAL(10,2),
    LF2025 DECIMAL(10,2),
    ECART DECIMAL(10,2)
);

INSERT INTO Evo_dep_soldes (LIBELLES, LFR2024, LF2025, ECART) VALUES
('Dépenses de solde', 3814.5, 3846.4, 31.9),
('Solde/PIB Nominal', 4.8, 4.3, -0.5),
('Solde/Recettes fiscales nettes', 47.9, 40.5, -7.4),
('Solde/Dépenses totales', 29.9, 23.6, -6.3);
