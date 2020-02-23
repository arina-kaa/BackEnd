USE rental;

INSERT INTO dvd (title, production_year)
VALUES
  ('Т-34',           2019),
  ('Движение вверх', 2018),
  ('Притяжение',     2017),
  ('Форсаж 8',       2017),
  ('Лёд',            2018)
;

INSERT INTO customer (first_name, last_name, passport_code, registration_date)
VALUES
  ('Иван',     'Галкин',      '1234 567326', '2019-01-01'),
  ('Осип',     'Гуляев',      '1235 567325', '2019-01-03'),
  ('Вадим',    'Самойлов',    '1236 567324', '2019-04-01'),
  ('Ярослава', 'Сергеева',    '1239 567321', '2019-07-01'),
  ('Лариса',   'Кондратьева', '1224 567327', '2019-08-01')
;

INSERT INTO offer (dvd_id, customer_id, offer_date, return_date)
VALUES
  (1, 4, '2019-04-15', '2019-05-16'),
  (2, 5, '2019-06-25', '2019-07-11'),
  (2, 3, '2019-08-19', '2019-09-30'),
  (3, 1, '2019-10-07', '2019-11-03'),
  (4, 1, '2019-11-02', null)
;