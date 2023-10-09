create database Nail_dtbase;
use Nail_dtbase;

CREATE TABLE users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);

select*from users;

CREATE TABLE Admin (
    AdminID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

CREATE TABLE Categories (
    CategoryID INT AUTO_INCREMENT PRIMARY KEY,
    CategoryName VARCHAR(100) NOT NULL
);

INSERT INTO Categories(CategoryName) VALUES
('Pure polish'),
('Nail care'),
('Nail box'),
('Sets');


CREATE TABLE Products (
    ProductID INT AUTO_INCREMENT PRIMARY KEY,
    ProductName VARCHAR(100) NOT NULL,
    Description TEXT,
    Price DECIMAL(10, 2) NOT NULL,
    ImageURL VARCHAR(255),
    CategoryID INT,
    FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID)
);
INSERT INTO Products (ProductName, Description, Price, ImageURL, CategoryID)
VALUES 
('Marigold', 'Marigold is a full coverage, creamy yellow orange, the perfect color to transition between seasons. In its iconic bottle with rose gold dome, this long-wearing, 8-free formula delivers highly pigmented color and is made in the USA.', 19.99, '../../img/image_shop/marigold.webp', 1),
('Tokyo Blossom', 'From our Fall/Winter 2023 Collection, this modern twist on mauve was inspired by a walk through Tokyo during cherry blossom season. Reach for this pink like you would any neutral polish.', 12.50, '../../img/image_shop/tokyoblossom.webp', 1),
('Lilac', 'From our Fall/Winter 2023 collection, this new take on lilac makes for a super modern and slightly edgy look. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 15.75, '../../img/image_shop/lilac.webp', 1),
('Royal Fuchsia', 'From the Fall/Winter 2023 collection, Royal Fuchsia is a bright, uplifting purple based pink that exudes self assurance (and is the color of the moment in fashion!). Plus, this long-wearing formula delivers highly pigmented color and is made in the USA. Free of the eight most toxic ingredients found in nail color.', 14.99, '../../img/image_shop/RoyalFuschia.webp', 1),
('Plum Pearl', 'From the Fall/Winter 2023 collection, Plum Pearl is a medium plum shade with a hint of fuchsia opalescence.', 22.00, '../../img/image_shop/PlumPearl.webp', 1),
('Latte', 'From our F/W 2023 Collection, Latte is a full coverage fleshy beige and a subtle hint of pink that gives it the perfect undertone to work well with all skin colors. Made with 8-free, cruelty-free, paraben free, gluten free, and vegan ingredients and made in the USA.', 8.95, '../../img/image_shop/Latte.webp', 1),
('Smoky Topaz', 'From our Fall/Winter 2023 collection, Smoky Topaz is a medium smoky brown with hints of platinum pearl. 8-free, cruelty-free, paraben free, gluten free, vegan and made in the USA.', 10.99, '../../img/image_shop/Smoky.webp', 1),
('Moss', 'From our Fall/Winter 2023 collection, Moss is a deep warm shade of green. Every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 18.50, '../../img/image_shop/Moss.webp', 1),
('Southern Belle', 'A sheer pink shade for a perfect, year-round, neutral.The color you want, without the toxins. Pure Polish is a non-toxic, highly pigmented range of color curated by our in-house experts. Our formula is 8-free, cruelty-free, paraben free, gluten free and vegan. Made in the USA.', 27.75, '../../img/image_shop/SouthernBelle.webp', 1),
('Oxblood', 'From our Fall/Winter 2023 collection, Oxblood is a dark, oxidized purple-based red, and free of the eight most toxic ingredients found in nail color. In its iconic bottle with rose gold dome, this long-wearing formula delivers highly pigmented color and is made in the USA.', 14.75, '../../img/image_shop/Oxblood.webp', 1),
('Big Poppy', 'This medium-toned, classic red is a showstopper that plays well with others. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 14.50, '../../img/image_shop/BigPoppy.webp', 1),
('Number 1', 'Classic red gets a dark, tonal twist, with equally sophisticated results. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 14.60, '../../img/image_shop/Number1.webp', 1),
('Tradition', 'This rich shimmery red is timeless and celebratory — everything we love about the holiday season. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 14.50, '../../img/image_shop/Tradition.webp', 1),
('Pretty in Pink', 'A candy-colored pink with a subtle purple undertone – sure to bring out sweetness and smiles. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 14.00, '../../img/image_shop/PrettyinPink.webp', 1),
('Tai', 'This tropical, juicy pink is the color of a hot summer day. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 14.19, '../../img/image_shop/Tai.webp', 1),
('1636', 'A can’t-go-wrong iconic burgundy red for any occasion. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 14.50, '../../img/image_shop/1636.webp', 1),
('Havana', 'The hottest shade of bright and sultry orange with red undertones. Like wearing fire on your fingers. Plus, every bottle of Pure Polish is long-wearing, 8-free, vegan-friendly, cruelty-free, gluten-free, and made in the USA.', 14.20, '../../img/image_shop/Havana.webp', 1),

('Cuticle Oil Rollerball Trio', 'Our Nourishing Cuticle Oil Rollerball has developed a following, so we proudly offer it in a set of three—one for home, one for your bag, and one just in case your best friend "borrows" it. Enjoy your favorite, soothing burst of natural tea tree oil, vitamin E and jojoba oil, with the invigorating scent of lavender and lemon anytime, anywhere. Always cruelty-free, paraben free, gluten free and vegan. Made in the USA.', 13.25, 'image_url_10.jpg', 2),
('Pure Strength Nail Strengthener', 'Restore your nails back to health with this best-selling, multi-use, vegan formula. Made with over 80% plant-based ingredients, Pure Strength works hard to strengthen nails over time with a protective coating. Use on natural nails that need a boost or after removing enhancements like gel polish or extensions.Always cruelty-free, paraben free, gluten free and vegan. Made in the USA.', 9.99, 'image_url_11.jpg', 2),
('Cuticle Oil Rollerball', 'Like a lip balm for your hands, our newly enhanced Cuticle Oil formula moisturizes and restores cuticles and promotes healthier, stronger nails. Now made with Marula oil for deeper, longer lasting hydration. Like actress Lily Collins said, “can’t live without it.”', 16.50, 'image_url_12.jpg', 2),
('Perfect Prime Base Coat', 'A strong foundation that helps to adhere polish, prevents cracking and staining, and acts as a ridge filler.', 19.95, 'image_url_13.jpg', 2),
('Pure Matte Top Coat', 'A premium top coat creates a sophisticated, muted, statement. Its velvety smooth finish is long-lasting, protects your natural nail and prevents chipping.', 11.75, 'image_url_14.jpg', 2),
('Glass Nail File', 'Achieve a studio-level mani while staying in or on-the-go! This glass nail file is your nail essential to keep nails in tip-top shape. ', 23.00, 'image_url_15.jpg', 2),
('Acetone Free Polish Remover', 'Use our polish remover to gently and easily erase nail polish of all colors and textures (including glitter and hard-to-remove dark shades) to leave the nails and skin around the nails clean and hydrated. Acetone free and citrus scented.', 17.99, 'image_url_16.jpg', 2),
('Nail Box 1', 'Launched in 2018, Nailbox was established to meet the new beauty trends of today youth. The idea originates from the need for quick and convenient beauty treatment when customers do not want to have to spend hours waiting for their nails to be completed. Not only does it save time, Nailbox also maintains a beauty that is not inferior to nails done directly at the salon because 100% of Nailbox upside-down nail designs are handcrafted by experienced nail technicians.', 10.50, 'image_url_17.jpg', 3),
('Nail Box 2', 'Launched in 2018, Nailbox was established to meet the new beauty trends of today youth. The idea originates from the need for quick and convenient beauty treatment when customers do not want to have to spend hours waiting for their nails to be completed. Not only does it save time, Nailbox also maintains a beauty that is not inferior to nails done directly at the salon because 100% of Nailbox upside-down nail designs are handcrafted by experienced nail technicians.', 12.99, 'image_url_18.jpg', 3),
('Nail Box 3', 'Launched in 2018, Nailbox was established to meet the new beauty trends of today youth. The idea originates from the need for quick and convenient beauty treatment when customers do not want to have to spend hours waiting for their nails to be completed. Not only does it save time, Nailbox also maintains a beauty that is not inferior to nails done directly at the salon because 100% of Nailbox upside-down nail designs are handcrafted by experienced nail technicians.', 14.75, 'image_url_19.jpg', 3),
('Nail Box 4', 'Launched in 2018, Nailbox was established to meet the new beauty trends of today youth. The idea originates from the need for quick and convenient beauty treatment when customers do not want to have to spend hours waiting for their nails to be completed. Not only does it save time, Nailbox also maintains a beauty that is not inferior to nails done directly at the salon because 100% of Nailbox upside-down nail designs are handcrafted by experienced nail technicians.', 21.50, 'image_url_20.jpg', 3);

select*from Products;

CREATE TABLE Appointments (
    AppointmentID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    AppointmentTime DATETIME NOT NULL,
    ServiceType VARCHAR(100) NOT NULL,
    Status VARCHAR(50) NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

CREATE TABLE Feedback (
    FeedbackID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Content TEXT NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

CREATE TABLE GiftCards (
    GiftCardID INT AUTO_INCREMENT PRIMARY KEY,
    Code VARCHAR(50) NOT NULL,
    Value DECIMAL(10, 2) NOT NULL,
    ExpiryDate DATE NOT NULL
);

INSERT INTO GiftCards (Code, Value, ExpiryDate)
VALUES 
('GIFT1123123', 1.0, '2023-12-31'),
('GIFT2413541', 2.0, '2023-12-31'),
('GIFT3545135', 3.0, '2023-12-31'),
('GIFT3515114', 4.0, '2023-12-31');


CREATE TABLE Carts (
    CartID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    ProductID INT,
    Quantity INT,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

CREATE TABLE Posts (
    PostID INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255) NOT NULL,
    Content TEXT,
    CreatedAt DATETIME NOT NULL,
    CategoryID INT,
    FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID)
);

INSERT INTO Posts (Title, Content, CreatedAt) VALUES 
('Empowerment is Beautiful', 'Founded with a vision to radically change an industry by doing what is right, not just what is standard.', '2023-10-05 14:30:00'),
('Find a Studio', 'Leading the industry with clean and healthy nails (and waxing!).', '2023-10-05 14:30:00'),
('Trends in Nail Art', 'Nail art is constantly evolving, with new trends emerging regularly. From intricate designs to vibrant colors, the nail art scene has something for everyone. In this post, we will explore the latest trends in nail art and how you can stay fashionable with your nail designs.', '2023-10-05 15:00:00');


CREATE TABLE Orders (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    OrderDate DATETIME NOT NULL,
    TotalAmount DECIMAL(10, 2) NOT NULL,
    Address varchar(100),
    Status VARCHAR(50) NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

CREATE TABLE OrderDetail (
    OrderDetailID INT AUTO_INCREMENT PRIMARY KEY,
    OrderID INT,
    ProductID INT,
    Quantity INT NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);