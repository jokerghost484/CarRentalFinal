CREATE TABLE CustomerTable(
CustomerID 			INT 			NOT NULL 	AUTO_INCREMENT,
CustomerEmail		VARCHAR(40)		NOT NULL,
CustomerPassword	VARCHAR(255)	NOT NULL,
CustomerName		VARCHAR(40)		NOT NULL,
CustomerAddress		VARCHAR(255)	NOT NULL,
CustomerLicenseID	VARCHAR(10)		NOT NULL,
CustomerAge			VARCHAR(10)		NOT NULL,
CustomerState		VARCHAR(20)		NOT NULL,
CustomerZip			VARCHAR(10)		NOT NULL,
PRIMARY KEY (CustomerID),
UNIQUE KEY (CustomerEmail)
);

CREATE TABLE ManagerTable(
ManagerName			VARCHAR(30)		NOT NULL,
ManagerID 			VARCHAR(10) 			NOT NULL,
ManagerPassword		VARCHAR(255)	NOT NULL,
ManagerPosition		VARCHAR(20)		NOT NULL,
ManagerImage 		longblob,
ManagerAboutMe		TEXT			NOT NULL,
PRIMARY KEY (ManagerID)
);

CREATE TABLE ReceiptTable(
ReceiptID		INT		AUTO_INCREMENT,
NameOnCard		VARCHAR(40)		NOT NULL,
CardNumber		VARCHAR(16)		NOT NULL,
Expiration 		VARCHAR(5)		NOT NULL,
CVV				VARCHAR(3)		NOT NULL,
PRIMARY KEY(ReceiptID)
);

CREATE TABLE CarTable(
CarID	INT		AUTO_INCREMENT,
CarName 	VARCHAR(20)		NOT NULL,
CarType		VARCHAR(15)		NOT NULL,
Fuel		VARCHAR(15)		NOT NULL,
Passenger	INT				NOT NULL,
Price		VARCHAR(10)				NOT NULL,
CarImage	longblob,
PRIMARY KEY (CarID)
);

CREATE TABLE reservationtable(
ReservationID INT AUTO_INCREMENT,
CustomerEmail	VARCHAR(40)		NOT NULL,
CarID		INT		NOT NULL,
Pickupday	DATE	NOT NULL,
Dropoffday	DATE	NOT NULL,
PRIMARY KEY(ReservationID),
FOREIGN KEY(CarID) REFERENCES cartable(CarID) ON DELETE CASCADE ON UPDATE CASCADE
);

