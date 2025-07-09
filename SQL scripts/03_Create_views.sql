
USE vas_magician_db;

SET foreign_key_checks = 0;



CREATE VIEW BlogView AS
SELECT B.id AS 'id', B.name AS 'name', B.location AS 'location', B.location2 AS 'location2', B.date AS 'date', B.text AS 'text',
    B.is_disabled AS 'is_disabled', B.created_at AS 'created_at',

    C.id AS 'category_id', C.name AS 'category_name',

    (SELECT BP.id 
     FROM BlogPhoto BP
     WHERE BP.blog_id = B.id AND BP.is_main_photo = 1
     ORDER BY BP.id ASC 
     LIMIT 1) as 'main_photo_id'

FROM Blog B
JOIN Category C ON C.id=B.category_id
;



SET foreign_key_checks = 1;