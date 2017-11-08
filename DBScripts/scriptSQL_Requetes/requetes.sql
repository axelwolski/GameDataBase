
/* Tous les jeux développés par BioWare et édité par Electronic Arts*/

SELECT g.idGame, g.GameName
FROM Game AS g, Developer AS d, Publisher AS p, Game_has_Developer AS h, Game_has_Publisher AS u
WHERE h.Developer_idDeveloper = d.idDeveloper
AND u.Publisher_idPublisher = p.idPublisher
AND d.DeveloperName = 'BioWare'
AND p.PublisherName = 'Electronic Arts'
AND g.idGame= h.Game_idGame
AND g.idGame= u.Game_idGame;

/* Tous les jeux disponible sur Xbox 360 */

SELECT g.idGame, g.GameName
FROM Game AS g, Game_has_Plateform AS h, Plateform AS p
WHERE h.Plateform_idPlateform = p.idPlateform
AND p.PlateformName = 'Xbox 360'
AND g.idGame= h.Game_idGame;

/* Tous les jeux disponibles sur Xbox 360 et pas sur PlayStation 3 */

SELECT R1.Game_idGame
FROM (SELECT h.Game_idGame
FROM Plateform AS p, Game_has_Plateform AS h
WHERE p.PlateformName = 'Xbox 360'
AND  p.idPlateform = h.Plateform_idPlateform) AS R1
LEFT JOIN (SELECT h.Game_idGame
FROM Plateform AS p, Game_has_Plateform AS h
WHERE p.PlateformName = 'PlayStation 3'
AND  p.idPlateform = h.Plateform_idPlateform) AS R2
ON R1.Game_idGame = R2.Game_idGame
WHERE R2.Game_idGame IS NULL;

/* Tous les jeux XBOX noté plus de 8 (Nom + note associés) */

SELECT GameName, Rating
FROM(SELECT h.Game_idGame
FROM Plateform AS p, Game_has_Plateform AS h
WHERE p.PlateformName = 'Xbox'
AND p.idPlateform = h.Plateform_idPlateform
) AS R1, Game
WHERE R1.Game_idGame = `idGame`
AND Rating > 8
LIMIT 0 , 30;

/* Tous les jeux XBOX360 édité par EA et du thème HORROR */

SELECT GameName
FROM (
SELECT hp.Game_idGame
FROM Plateform AS p, Game_has_Plateform AS hp
WHERE p.PlateformName = 'Xbox 360'
AND  p.idPlateform = hp.Plateform_idPlateform) AS R1,

(SELECT ht.Game_idGame
FROM Theme AS t, Game_has_Theme AS ht
WHERE t.ThemeName = 'Horror'
AND t.idTheme = ht.Theme_idTheme) AS R2,

(SELECT hd.Game_idGame
FROM Developer AS d, Game_has_Developer AS hd
WHERE d.DeveloperName = 'Electronic Arts'
AND d.idDeveloper = hd.Developer_idDeveloper) AS R3,
Game
WHERE R1.Game_idGame = `idGame`
AND R2.Game_idGame = `idGame`
AND R3.Game_idGame = `idGame`;

/* La date de sortie de tout les jeux CAPCOM (avec les dates croissants) */

SELECT GameName, ReleaseDate 
FROM (SELECT hd.Game_idGame
FROM Developer AS d, Game_has_Developer AS hd
WHERE d.DeveloperName = 'Capcom'
AND d.idDeveloper = hd.Developer_idDeveloper) AS R1, Game
WHERE R1.Game_idGame = `idGame`
ORDER BY ReleaseDate;

/* Tous les jeux sorties durant la première décennie du XIXème siècle (2000-2010) */

SELECT GameName, ReleaseDate
FROM Game
WHERE ReleaseDate > 20000101 AND ReleaseDate < 20100101
ORDER BY ReleaseDate;

/* Tous les jeux qui ne sont pas disponibles sur Microsoft Windows */

SELECT GameName
FROM (SELECT h.Game_idGame
FROM Plateform AS p, Game_has_Plateform AS h
WHERE p.PlateformName != 'Microsoft Windows'
AND  p.idPlateform = h.Plateform_idPlateform) AS R1, Game
WHERE R1.Game_idGame = idGame;

/* Tous les jeux avec un rating supérieur à 8, sortie après le 1er janvier 2008, de thême Horror, mais pas édité par les sociétés Rockstar (Rockstar Vancouver, Rockstar North, ...) */

SELECT GameName, Rating, ReleaseDate
FROM (SELECT hd.Game_idGame
FROM Developer AS p, Game_has_Developer AS hd
WHERE p.DeveloperName != 'Rockstar%'
AND  p.idDeveloper = hd.Developer_idDeveloper) AS R1,
(SELECT ht.Game_idGame
FROM Theme as t, Game_has_Theme AS ht
WHERE t.ThemeName = 'Horror'
AND t.idTheme = ht.Theme_idTheme) AS R2, Game
WHERE R1.Game_idGame = idGame
AND R2.Game_idGame = idGame
AND Rating > 8
AND ReleaseDate > 20080101;

/* Tous les jeux sur Xbox 360 du genre shooter et qui ont pour theme horror */

SELECT GameName
FROM (SELECT hg.Game_idGame
FROM Genre AS g, Game_has_Genre AS hg
WHERE g.GenreName != ''
AND  g.idGenre = hg.Genre_idGenre) AS R1,
(SELECT ht.Game_idGame
FROM Theme as t, Game_has_Theme AS ht
WHERE t.ThemeName = 'Horror'
AND t.idTheme = ht.Theme_idTheme) AS R2,
(SELECT hp.Game_idGame
FROM Plateform as p, Game_has_Plateform as hp
WHERE p.PlateformName = 'XBOX 360'
AND p.idPlateform = hp.Plateform_idPlateform) AS R3, Game
WHERE R1.Game_idGame = `idGame`
AND R2.Game_idGame = `idGame`
AND R3.Game_idGame = `idGame`;
