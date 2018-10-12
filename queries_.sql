INSERT INTO categories
    (category, ctg-class)
VALUES 
    ('Доски и лыжи@', 'promo__item--boards'),
    ('Крепления', 'promo__item--attachment'),
    ('Ботинки', 'promo__item--boots'),
    ('Одежда', 'promo__item--clothing'),
    ('Инструменты', 'promo__item--tools'),
    ('Разное', 'promo__item--other')
;

INSERT INTO users
    (email, pass, username, useradres, avatar, registration)
VALUES
    ('frodo@mail.ru', 'test1234', 'Фродо', '222222 Средиземье 13', '..\img\user.jpg', '1538503408'),
    ('gandalf@mail.ru', 'test1234', 'Гендальф', '222222 Средиземье 1', '..\img\user.jpg', '1538503409')
;

INSERT INTO lots 
    (lot_name, lot_description, lot_picture, lot_category, init_price, end_date, step, lot_seller, lot_buyer)
values
    ('2014 Rossignol District Snowboard', '2014 Rossignol District Snowboard', 'img/lot-1.jpg', '1', '10999', '1555745821', '100', '1', '2'),
    ('DC Ply Mens 2016/2017 Snowboard', 'DC Ply Mens 2016/2017 Snowboard', 'img/lot-2.jpg', '1', '159999', '1555745821', '100', '1', '2'),
    ('Крепления Union Contact Pro 2015 года размер L/XL', 'Крепления Union Contact Pro 2015 года размер L/XL', 'img/lot-3.jpg', '2', '8000', '1555745821', '100', '1', '2'),
    ('Ботинки для сноуборда DC Mutiny Charocal', 'Ботинки для сноуборда DC Mutiny Charocal', 'img/lot-4.jpg', '4', '10999', '1555745821', '100', '1', '2'),
    ('Куртка для сноуборда DC Mutiny Charocal', 'Куртка для сноуборда DC Mutiny Charocal', 'img/lot-5.jpg', '5', '7500', '1555745821', '100', '1', '2'),
    ('Маска Oakley Canopy', 'Маска Oakley Canopy', 'img/lot-6.jpg', '6', '5400', '1555745821', '100', '1', '2')
;

INSERT INTO rates
    (rate_date, rate_sum, rate_buyer, lot_id)
VALUES
    ('1538503647', '12099', '2', '1'),
    ('1538503650', '13099', '2', '1')
;

#получить все категории
SELECT category FROM categories ORDER BY id;

#получить самые новые открытые лоты
SELECT lots.lot_name, lots.init_price, lots.lot_picture, (SELECT MAX(rates.rate_sum) FROM rates where lots.id=rates.lot_id), (SELECT COUNT(rates.lot_id) from rates where lots.id=rates.lot_id), lot_category FROM lots WHERE end_date > NOW();
   
#показать лот по его id
SELECT lots.id, lots.lot_name, categories.category FROM lots WHERE lot.lot_category=categories.id;
                                                                                                                              
#обновить название лота по его идентификатору
UPDATE lots SET lot_name = 'Новые лыжи' WHERE id = '1';

#получить список самых свежих ставок для лота по его идентификатору
SELECT rate_sum FROM rates WHERE lot_id = 1 ORDER BY rate_date DESC;