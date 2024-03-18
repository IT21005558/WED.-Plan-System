create table `UserTable`
(
	`UserID` int AUTO_INCREMENT,
	`User_Name` char(30) not null,				
	`Email_Address` char(50) unique not null,
	`Mobile_Number` char(10) unique not null,
	`Birthday` date,
	`Gender` char(8),
	`Address` varchar(50) not null,
	`Password` varchar(30),
	
	Primary key (UserID)
)

create table `Admin`
(
	`AdminID` int AUTO_INCREMENT,
	`Admin_Name` char(30) not null,
	`Admin_Email` char(40) Unique not null,

	Primary key (AdminID),
)

create table `Package`
(
	`Package_ID`  int AUTO_INCREMENT,
	`Package_Type` varchar(20) not null,
	`Package_Name` Varchar(30) not null,
	`Package_Price` int not null,
	`Package_description` varchar(100) not null,
	 
	Primary key(Package_ID),

)

create table `contactus`
(
	`Inquiry_ID`  int AUTO_INCREMENT,
	`Name` char(30) not null,
	`Email` char(50) not null,
	`Subject` char(50) not null,
	`Question` VARCHAR(300) not NULL,
	
	PRIMARY KEY(Inquiry_ID)
)

 create table `Booking`
 (
	`BookingID`  int AUTO_INCREMENT,			
	`email` char(50) not null,
	`phone` char(10) not null,
	`packageID` int,
	`Package_name` char(30) not null,
	`Amount` int not null,
	`checkoutdate` date not null,
	`type` char(10) not null,
	
	PRIMARY KEY (BookingID),
	
	FOREIGN KEY (email)
	REFERENCES UserTable(Email_Address)
	on delete cascade
	on update cascade,
	
	FOREIGN KEY (packageID)
	REFERENCES Package(Package_ID)
	on delete cascade
	on update cascade
)


 create table `Payment`
 (
	`Payment_ID`  int AUTO_INCREMENT,			
	`Booking_ID` int not null,
	`Amount` int,
	`Payment_date` date,
	`Payment_status` char(30) not null,
	
	PRIMARY KEY (Payment_ID,Booking_ID),
	
	FOREIGN KEY (Booking_ID)
	REFERENCES Booking(BookingID)
	on delete cascade
	on update cascade,
	
)