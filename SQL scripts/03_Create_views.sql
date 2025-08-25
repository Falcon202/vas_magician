
USE vas_magician_db;

SET foreign_key_checks = 0;



CREATE VIEW BlogView AS
SELECT B.id AS 'id', B.name AS 'name', B.location2 AS 'location2', B.date AS 'date', B.text AS 'text',
    B.is_disabled AS 'is_disabled', B.created_at AS 'created_at',

    C.id AS 'category_id', C.name AS 'category_name',
    City.id AS 'city_id', City.name AS 'city_name',

    (SELECT BP.id 
     FROM BlogPhoto BP
     WHERE BP.blog_id = B.id AND BP.is_main_photo = 1
     ORDER BY BP.id ASC 
     LIMIT 1) as 'main_photo_id'

FROM Blog B
JOIN Category C ON C.id=B.category_id
JOIN City ON City.id=B.city_id
;


CREATE VIEW CityView AS
SELECT C.id AS 'id', C.name AS 'name', C.created_at AS 'created_at', C.updated_at AS 'updated_at', COUNT(B.id) AS 'blog_count'
FROM City C
LEFT JOIN Blog B ON B.city_id = C.id
GROUP BY C.id, C.name, C.created_at, C.updated_at;
;



SET foreign_key_checks = 1;