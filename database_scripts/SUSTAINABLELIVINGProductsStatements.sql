CREATE TABLE SUSTAINABLELIVINGProducts (
SUSTAINABLELIVINGProductID        INT(11)        NOT NULL,
SUSTAINABLELIVINGProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
SUSTAINABLELIVINGProductName      VARCHAR(255)   NOT NULL,
SUSTAINABLELIVINGDescription      TEXT           NOT NULL,
SUSTAINABLELIVINGCategoryID       INT(11)        NOT NULL,
SUSTAINABLELIVINGWholesalePrice   DECIMAL(10,2)  NOT NULL,
SUSTAINABLELIVINGListPrice        DECIMAL(10,2)  NOT NULL,
SUSTAINABLELIVINGColor            VARCHAR (20)   NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( SUSTAINABLELIVINGProductID )
);

SELECT * FROM SUSTAINABLELIVINGProducts;

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(1000, 'LARQ', 'Waterbottle','reusable water bottles made from a range of materials, including BPA-free plastic. Great for saving enviornment.', 100, 2.99, 5.99, NOW(),'Blue');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(1001, 'SSB', 'Stainless Steel Bottle','Stainless steel bottles are double walled and are designed to retain the temperature of whatever you are drinking. Insulated water bottles keep your cold drinks cold and your hot drinks hot for hours, making them the perfect choice for any season or environment.', 100, 3.99, 9.99, NOW(),'Black');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(1002, 'BPAF', 'BPA Free Waterbottle','BPA-free water bottles are manufactured without the presence of bisphenol-A. Other traditional or older water bottles that are “regular,” or non-BPA-free water bottles, are made using bisphenol-A.', 100, 1.99, 4.99, NOW(),'Clear');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID,SUSTAINABLELIVINGWholesalePrice,SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(2000, 'Daletu', 'Bamboo Toothbrush', 'Made of biodegradable bamboo, this high-quality and eco-friendly toothbrush is naturally antimicrobial and water-resistant as its nylon bristles massage teeth and gums for good oral health.',200,1.99,4.99, NOW(),'Tan');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID,SUSTAINABLELIVINGWholesalePrice,SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(2001, 'SBBT', 'Soft Bristle Bamboo Toothbrush', 'Ideal for sensitive gums, these toothbrushes feature soft bristles made from nylon or plant-based materials.',200,1.99,3.99, NOW(),'Tan');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID,SUSTAINABLELIVINGWholesalePrice,SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(2002, 'MBBT', 'Medium Bristle Bamboo Toothbrush', ' A balanced option for those who prefer a firmer brushing experience, offering effective plaque removal without being too harsh on the gums.',200,1.99,4.49, NOW(),'Tan');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID,SUSTAINABLELIVINGProductCode,SUSTAINABLELIVINGProductName,SUSTAINABLELIVINGDescription,SUSTAINABLELIVINGCategoryID,SUSTAINABLELIVINGWholesalePrice,SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(3000, 'Rasbes', 'Solar-powered Charger', 'Solar battery charger equipped with photovoltaic (PV) cells or solar panels that convert sunlight into electrical energy. You can have it on you in case of an emergency when power is needed.', 300, 4.99, 15.99, NOW(), 'Black');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID,SUSTAINABLELIVINGProductCode,SUSTAINABLELIVINGProductName,SUSTAINABLELIVINGDescription,SUSTAINABLELIVINGCategoryID,SUSTAINABLELIVINGWholesalePrice,SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(3001, 'SPC', 'Solar-Panel Charger', 'These are foldable or rigid solar panels that can directly charge devices like phones and laptops. They typically connect via USB or other charging ports and are great for outdoor activities.', 300, 99.99, 249.99, NOW(), 'Black');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID,SUSTAINABLELIVINGProductCode,SUSTAINABLELIVINGProductName,SUSTAINABLELIVINGDescription,SUSTAINABLELIVINGCategoryID,SUSTAINABLELIVINGWholesalePrice,SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(3002, 'SPBP', 'Solar-powered Backpack', 'These backpacks come with built-in solar panels, allowing you to charge devices while you are on the move. They are ideal for hiking, camping, or daily commuting in sunny areas.', 300, 49.99, 125.99, NOW(), 'Black');



INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(4000, 'GP', 'Eco Friendly Bag', 'Made of 100 percent biodegradable material. Start using these bags to dp your part in helping saving the enviornment.',400,.99,2.99, NOW(),'Green');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(4001, 'JUTE', 'Jute Bag', 'Jute is a natural, biodegradable fiber that produces strong and sturdy bags. Often used for groceries or as beach bags, jute bags are not only eco-friendly but also stylish and versatile.',400,1.99,3.99, NOW(),'Red');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(4002, 'RPB', 'Recycle-Pet Bag', 'These bags are made from recycled plastic bottles, turning waste into a functional product. Lightweight and water-resistant, they are perfect for everyday use and help reduce plastic pollution.',400,2.99,5.99, NOW(),'Black');


INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(5000, 'JESLED', 'LED Light Bulb', 'electrical current passes through a microchip, which illuminates the tiny light sources we call LEDs and the result is visible light.', 500, 3.99, 9.99, NOW(), 'white');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(5001, 'A19', 'A19 LED Light Bulb', 'These are the most common LED bulbs, designed to replace traditional incandescent bulbs. They provide warm white light, are energy-efficient, and have a long lifespan, making them perfect for general home lighting.', 500, 3.99, 7.99, NOW(), 'white');

INSERT INTO SUSTAINABLELIVINGProducts
(SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGListPrice, DateCreated, SUSTAINABLELIVINGColor)
VALUES
(5002, 'BR30', 'BR30 LED Bulb', 'Designed for recessed or track lighting, BR30 bulbs have a wider beam angle and are ideal for illuminating larger areas. They consume less energy than incandescent options while providing bright, focused light suitable for both indoor and outdoor use.', 500, 4.99, 9.99, NOW(), 'Yellow');


