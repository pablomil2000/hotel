CREATE TABLE IF NOT EXISTS carrusel(
  id INT AUTO_INCREMENT PRIMARY KEY,
  img VARCHAR(40),
  fecha_creacion timestamp
);
INSERT INTO
  carrusel(img)
VALUES
  ('views/img/hero/hero-1.jpg'),
  ('views/img/hero/hero-2.jpg'),
  ('views/img/hero/hero-3.jpg');
CREATE TABLE IF NOT EXISTS Habitacion(
    Id_Categoria INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(75),
    imagen VARCHAR(100),
    imagen_room VARCHAR(100),
    tama ñ o INT(4),
    precio INT(5),
    capacidad INT(2),
    tipo_cama VARCHAR(50),
    direccion VARCHAR(100),
    fecha timestamp
  );
INSERT INTO
  Habitacion(
    tipo,
    imagen,
    imagen_room,
    tama ñ o,
    precio,
    capacidad,
    direccion,
    tipo_cama
  )
VALUES
  (
    "Doble",
    "views/img/room/room-b1.jpg",
    "VIEWS/img/room/room-3.jpg",
    8,
    49,
    2,
    'habitacion-tipo-doble',
    "King Size"
  ),
  (
    "Premium",
    "views/img/room/room-b2.jpg",
    "VIEWS/img/room/room-1.jpg",
    12,
    99,
    2,
    'habitacion-tipo-premium',
    "King Size"
  ),
  (
    "Deluxe",
    "views/img/room/room-b3.jpg",
    "VIEWS/img/room/room-2.jpg",
    18,
    149,
    2,
    'habitacion-tipo-deluxe',
    "King Size"
  ),
  (
    "Familiar",
    "views/img/room/room-b4.jpg",
    "VIEWS/img/room/room-4.jpg",
    28,
    199,
    5,
    'habitacion-tipo-familiar',
    "King Size"
  ),
  (
    "Individual",
    "views/img/room/room-4.jpg",
    "VIEWS/img/room/room-4.jpg",
    28,
    199,
    5,
    'habitacion-tipo-individual',
    "King Size"
  ),
  (
    "Doble interior",
    "views/img/room/room-6.jpg",
    "views/img/room/room-6.jpg",
    28,
    199,
    5,
    'habitacion-tipo-doble-interior',
    "King Size"
  );
CREATE TABLE IF NOT EXISTS servicios(
    id_servicio INT AUTO_INCREMENT PRIMARY KEY,
    servicio VARCHAR(100)
  );
INSERT INTO
  servicios(servicio)
VALUES
  ("Wifi"),
  ("Television"),
  ("Baño"),
  ("Aier acondicionado"),
  ("Minibar"),
  ("Servicio de habitaciones"),
  ("Lavanderia"),
  ("Caja fuerte");
CREATE TABLE IF NOT EXISTS serviciosHabitacion(
    id_categoria INT,
    id_servicio INT,
    PRIMARY KEY(id_categoria, id_servicio)
  );
ALTER TABLE
  serviciosHabitacion
ADD
  FOREIGN KEY (id_categoria) REFERENCES Habitacion (Id_Categoria) ON DELETE CASCADE;
ALTER TABLE
  serviciosHabitacion
ADD
  FOREIGN KEY (id_servicio) REFERENCES servicios (id_servicio) ON DELETE CASCADE;
INSERT INTO
  serviciosHabitacion
VALUES
  (1, 1),
  (1, 2),
  (1, 3),
  (1, 4),
  (1, 5),
  (2, 1);
CREATE TABLE IF NOT EXISTS serviciosHotel(
    id_servicio INT AUTO_INCREMENT PRIMARY KEY,
    servicio VARCHAR(50),
    texto VARCHAR(200),
    icono VARCHAR(40)
  );
INSERT INTO
  serviciosHotel(servicio, texto, icono)
VALUES
  (
    'Travel Plan',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
    'flaticon-036-parking'
  ),
  (
    'Catering Servic',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
    'flaticon-033-dinner'
  ),
  (
    'Babysitting',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
    'flaticon-026-bed'
  ),
  (
    'Laundry',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
    'flaticon-024-towel'
  ),
  (
    'Hire Driver',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
    'flaticon-044-clock-1'
  ),
  (
    'Bar & Drink',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
    'flaticon-012-cocktail'
  );
CREATE TABLE IF NOT EXISTS Review(
    idReview INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    imgAutor varchar(50),
    autor varchar(50),
    opinion text,
    habitacion int,
    fecha TIMESTAMP
  );
INSERT INTO
  Review(imgAutor, autor, opinion, habitacion)
VALUES
  (
    'img/blog/blog-deails/avatar/avatar-1.jpg',
    'Autor1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id ducimus culpa quo laudantium. Est aut numquam asperiores, maxime, repellendus esse blanditiis fugiat consectetur quasi rem praesentium aliquam similique voluptate?',
    '1'
  ),
  (
    'img/blog/blog-deails/avatar/avatar-1.jpg',
    'Autor1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id ducimus culpa quo laudantium. Est aut numquam asperiores, maxime, repellendus esse blanditiis fugiat consectetur quasi rem praesentium aliquam similique voluptate?',
    '1'
  ),
  (
    'img/blog/blog-deails/avatar/avatar-1.jpg',
    'Autor1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id ducimus culpa quo laudantium. Est aut numquam asperiores, maxime, repellendus esse blanditiis fugiat consectetur quasi rem praesentium aliquam similique voluptate?',
    '1'
  ),
  (
    'img/blog/blog-deails/avatar/avatar-1.jpg',
    'Autor1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id ducimus culpa quo laudantium. Est aut numquam asperiores, maxime, repellendus esse blanditiis fugiat consectetur quasi rem praesentium aliquam similique voluptate?',
    '1'
  ),
  (
    'img/blog/blog-deails/avatar/avatar-1.jpg',
    'Autor1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id ducimus culpa quo laudantium. Est aut numquam asperiores, maxime, repellendus esse blanditiis fugiat consectetur quasi rem praesentium aliquam similique voluptate?',
    '1'
  ),
  (
    'img/blog/blog-deails/avatar/avatar-1.jpg',
    'Autor1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id ducimus culpa quo laudantium. Est aut numquam asperiores, maxime, repellendus esse blanditiis fugiat consectetur quasi rem praesentium aliquam similique voluptate?',
    '1'
  ),
  (
    'img/blog/blog-deails/avatar/avatar-1.jpg',
    'Autor1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id ducimus culpa quo laudantium. Est aut numquam asperiores, maxime, repellendus esse blanditiis fugiat consectetur quasi rem praesentium aliquam similique voluptate?',
    '1'
  );