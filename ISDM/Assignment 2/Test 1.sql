---------Create table Customer
CREATE TABLE Customer(
	
	C_ID INT,
	Email VARCHAR(50),
	Dob DATE,
	C_Type VARCHAR(20),
	First_Name VARCHAR(50),
	Last_Name VARCHAR(50),
	M_Id int,

	CONSTRAINT customer_PK primary key(C_ID),
	CONSTRAINT customer_FK foreign key (M_Id) references Manager(M_Id),
 
);

--Create table Customer_Contact
CREATE TABLE Customer_Contact(

	C_Phone INT,
	C_ID INT,

	CONSTRAINT CC_PK primary key(C_Phone),
	CONSTRAINT CC_FK foreign key (C_ID) references Customer(C_ID),
	
);

--Create table Manager
CREATE TABLE Manager(
		
	M_Id INT,
	Sur_Name VARCHAR(50),
	First_Name VARCHAR(50),
	Last_Name VARCHAR(50),
	Dob DATE,
	Email VARCHAR(50),
	Address VARCHAR(100),

	CONSTRAINT Manager_pk primary key(M_Id),
	
);

--Create table Manager_Contact
CREATE TABLE Manager_Contact(
	
	M_Id INT,
	phone INT,

	CONSTRAINT Manager_Contact_PK primary key(phone),
	CONSTRAINT Manager_Contact_FK foreign key(M_Id) references Manager(M_Id)
);

--Create table Service
CREATE TABLE Service(
	
	S_Id INT,
	S_Name VARCHAR(50),
	S_Description VARCHAR(100),
	Price INT,
	Duration TIME,
	Marketer_Id INT,
	C_Id INT,

	CONSTRAINT Service_pk primary key(S_Id),
	CONSTRAINT Service_Fk_Marketer foreign key(Marketer_Id) references Marketer(Marketer_id),
	CONSTRAINT Service_Fk_Customer FOREIGN KEY (C_Id) REFERENCES Customer(C_ID),
);

--Create table Item
CREATE TABLE Item(

	Item_No int,
	Item_Name VARCHAR(50),
	I_Type VARCHAR(50),
	I_Qty INT,
	I_Description VARCHAR(200),

	CONSTRAINT Item_Pk primary key(Item_No),

);
--Create table Outlet
CREATE TABLE Outlet(

	O_Id INT,
	O_Name VARCHAR(50),
	House_No INT,
	Street VARCHAR(50),
	City VARCHAR(50),
	Postal_Code INT,
	M_Id INT,

	CONSTRAINT Outlet_PK primary key(O_Id),
	CONSTRAINT Outlet_fk foreign key(M_Id) references Manager(M_Id),


);

--Create table Outlet_Contact
CREATE TABLE Outlet_Contact(

	O_Id INT,
	O_Phone INT,

	CONSTRAINT Outlet_Contact_PK primary key(O_Phone),
	CONSTRAINT Outlet_Contact_FK foreign key(O_Id) references Outlet(O_Id),
);

--Create table Outlet_Email
CREATE TABLE Outlet_Email(

	O_Id INT,
	O_Email VARCHAR(50),

	CONSTRAINT Outlet_Email_PK primary key(O_Email),
	CONSTRAINT Outlet_Email_FK foreign key(O_Id) references Outlet(O_Id),
);
--Create table Provide
CREATE TABLE Provide(

	C_ID INT,
	Item_No INT,
	O_Id INT,

	CONSTRAINT Provide_FK_Outlet foreign key(O_Id) references Outlet(O_Id),
	CONSTRAINT Provide_FK_Customer  foreign key(C_ID) references Customer(C_ID),
	CONSTRAINT Provide_FK_Item foreign key(Item_No) references Item(Item_No),
);

--Create table Employee
CREATE TABLE Employee(

	Emp_Id INT,
	Address VARCHAR(100),
	Email VARCHAR(100),
	Age INT,
	Dob DATE,
	Emp_Phone INT,
	First_Name VARCHAR(50),
	Last_Name VARCHAR(50),
	M_Id INT,

	CONSTRAINT Employee_PK primary key(Emp_Id),
	CONSTRAINT Employee_FK foreign key(M_Id) references Manager(M_Id),
);

--Create table Dependent
CREATE TABLE Dependent(
	
	D_Id INT,
	Emp_id INT,
	D_Name VARCHAR(50),
	Address VARCHAR(100),
	Dob DATE,

	CONSTRAINT dependent_pk primary key(D_Id,Emp_Id),
	CONSTRAINT Dependent_FK_Employee foreign key(Emp_id) references Employee(Emp_Id),
);

--Create table Supplier
CREATE TABLE Supplier(

	Sup_Id INT,
	S_Name VARCHAR(50),
	S_Address VARCHAR(50),
	M_Id INT,

	CONSTRAINT Supplier_pk primary key(Sup_Id),
	CONSTRAINT Supplier_FK foreign key(M_Id) references Manager(M_Id),
);

--Create table Supplier_Contact
CREATE TABLE Supplier_Contact(

	Sup_Id INT,
	S_Phone CHAR(10),

	CONSTRAINT Supplier_Contact_PK primary key(S_Phone),
	CONSTRAINT Supplier_Contact_FK foreign key(Sup_Id) references Supplier(Sup_Id),
);

--Create table Suppler_Email
CREATE TABLE Supplier_Email(
	
	Sup_Id INT,
	S_Email VARCHAR(50),

	CONSTRAINT Supplier_Email_PK primary key(S_Email),
	CONSTRAINT Supplier_Email_FK foreign key(Sup_Id) references Supplier(Sup_Id),

);
--Create table Supply
CREATE TABLE Supply(

	O_Id INT,
	Sup_Id INT,

	CONSTRAINT Supply_FK_Outlet foreign key(O_Id) references Outlet(O_Id),
	CONSTRAINT Supply_FK_Supplier foreign key(Sup_Id) references Supplier(Sup_Id),

);

--Create table Payment
CREATE TABLE Payment(

	P_Id INT,
	P_Type VARCHAR(50),
	Date DATE,
	Invoice_No VARCHAR(50),
	P_Method VARCHAR(100),
	Amount INT,
	M_Id INT,

	CONSTRAINT Payment_PK primary key(P_Id),
	CONSTRAINT Payment_FK_Manager foreign key (M_Id) references Manager(M_Id),

);


--Create table Direct_Pay
CREATE TABLE Direct_Pay(

	P_Id INT,
	O_Id INT,

	CONSTRAINT Direct_Pay_FK_Payment foreign key(P_Id) references Payment(P_Id),
	CONSTRAINT Direct_Pay_FK_Outlet foreign key(O_Id) references Outlet(O_Id),

);
--Create table Online_Pay
CREATE TABLE Online_Pay(

	P_Id INT,
	S_Id INT

	CONSTRAINT Online_Pay_FK_Payment foreign key(P_Id) references Payment(P_Id),
	CONSTRAINT Online_Pay_FK_Service foreign key(S_Id) references Service(S_Id),
);

--Create table Marketer
CREATE TABLE Marketer(

	Marketer_id INT,
	M_Name VARCHAR(50),
	Dob DATE,
	Phone_No INT,
	Email VARCHAR(50),
	M_Id INT,

	CONSTRAINT Markrter_PK primary key(Marketer_id),
	CONSTRAINT Marketer_FK foreign key(M_Id) references Manager(M_Id),

);


INSERT INTO Manager
VALUES (1000, 'Smith', 'John', 'Doe', '1980-01-15', 'john.doe@email.com', '123 Main St');
  

INSERT INTO Customer
VALUES
    (1001, 'customer1@email.com', '1990-05-12', 'Daily Customer', 'John', 'Doe', 1000),
    (2002, 'customer2@email.com', '1985-03-20', 'Monthly Customer', 'Jane', 'Smith', 1000),
    (3003, 'customer3@email.com', '1982-08-15', 'Daily Customer', 'Robert', 'Johnson', 1000),
    (4004, 'customer4@email.com', '1993-07-10', 'Weekly Customer', 'Emily', 'Williams', 1000),
    (5005, 'customer5@email.com', '1980-12-28', 'Daily Customer', 'Michael', 'Brown', 1000),
    (6006, 'customer6@email.com', '1988-02-18', 'Weekly Customer', 'Sarah', 'Jones', 1000);


-- Insert data into Customer_Contact table
INSERT INTO Customer_Contact
VALUES
    (0714567890, 1001),
    (0766543210, 2002),
    (0785555555, 2002),
    (0747777777, 2002),
    (0871111111, 3003),
    (0772222222, 3003);

-- Insert data into the Manager_Contact table
INSERT INTO Manager_Contact (M_Id,Phone)
VALUES
    (1000, 0704567890),
    (1000, 0706543210);
    
-- Insert data into the Service table
INSERT INTO Service
VALUES
    (1, 'Dry Cleaning', 'Drying and Cleaning Clothes', 500, '01:30:00', 10, 1001),
    (2, 'Washing', 'Washing Clothes', 750, '02:00:00', 10, 2002),
    (3, 'Pressing', 'Pressing Clothes', 600, '01:45:00', 10, 3003),
    (4, 'Mending Service', 'Mending Clothes', 900, '02:30:00', 10, 4004),
    (5, 'Pickup and Delivery', 'Pickup and deliever clothes', 550, '01:15:00', 10, 5005);
    
-- Insert data into the Item table
INSERT INTO Item (Item_No, Item_Name, I_Type, I_Qty, I_Description)
VALUES
    (100, 'Trouser', 'Cotton', 10, 'White Trouser'),
    (200, 'Blouse', 'Silk', 15, 'Blue Blouse'),
    (300, 'Under Wear', 'Cotton', 20, 'Small Size Underwear'),
    (400, 'Cap', 'Cotton', 8, 'Rap Cap'),
    (500, 'Sock', 'Cotton', 12, 'Athletic Sock'),
    (600, 'Shoe', 'Leather', 5, 'Formal Shoe');

-- Insert data into the Outlet table
INSERT INTO Outlet (O_Id, O_Name, House_No, Street, City, Postal_Code, M_Id)
VALUES
    (111, 'Outlet 1', 123, 'Main St', 'City A', 12345, 1000),
    (222, 'Outlet 2', 456, 'Elm St', 'City B', 23456,1000),
    (333, 'Outlet 3', 789, 'Oak St', 'City C', 34567, 1000),
    (444, 'Outlet 4', 101, 'Pine St', 'City D', 45678, 1000),
    (555, 'Outlet 5', 222, 'Cedar St', 'City E', 56789, 1000),
    (666, 'Outlet 6', 333, 'Birch St', 'City F', 67890, 1000);

-- Insert data into the Outlet_Contact table
INSERT INTO Outlet_Contact (O_Id, O_Phone)
VALUES
    (111, 0714567890),
    (111, 0786543210),
    (222, 0705555555),
    (222, 0707777777),
    (333, 0801111111),
    (333, 0812222222);

-- Insert data into the Outlet_Email table
INSERT INTO Outlet_Email (O_Id, O_Email)
VALUES
    (111, 'outlet1@email.com'),
    (111, 'contact1@email.com'),
    (222, 'outlet2@email.com'),
    (222, 'contact2@email.com'),
    (333, 'outlet3@email.com'),
    (333, 'contact3@email.com');


-- Insert data into the Provide table
INSERT INTO Provide (C_ID, Item_No, O_Id)
VALUES
    (1001, 100, 111),
    (2002, 200, 222),
    (3003, 300, 333),
    (4004, 400, 444),
    (5005, 500, 555),
    (6006, 600, 666);

-- Insert data into the Employee table
INSERT INTO Employee (Emp_Id, Address, Email, Age, Dob, Emp_Phone, First_Name, Last_Name, M_Id)
VALUES
    (1010, '123 Main St', 'employee1@email.com', 30, '1990-01-15', 0704567890, 'John', 'Doe', 1000),
    (2020, '456 Elm St', 'employee2@email.com', 28, '1992-03-20', 0706543210, 'Jane', 'Smith', 1000),
    (3030, '789 Oak St', 'employee3@email.com', 35, '1985-05-10', 0755555555, 'Robert', 'Johnson', 1000),
    (4040, '101 Pine St', 'employee4@email.com', 25, '1995-08-28', 0917777777, 'Emily', 'Williams', 1000),
    (5050, '222 Cedar St', 'employee5@email.com', 32, '1988-02-12', 0861111111, 'Michael', 'Brown', 1000),
    (6060, '333 Birch St', 'employee6@email.com', 27, '1993-06-17', 0862222222, 'Sarah', 'Jones', 1000);

-- Insert data into the Dependent table
INSERT INTO Dependent (D_Id, Emp_id, D_Name, Address, Dob)
VALUES
    (101, 1010, 'Dileepa', '123 Main St', '2010-03-05'),
    (202, 2020, 'Sarithmal', '456 Elm St', '2012-07-10'),
    (303, 3030, 'pasindu', '789 Oak St', '2008-01-15');
    

-- Insert data into the Supplier table
INSERT INTO Supplier (Sup_Id, S_Name, S_Address, M_Id)
VALUES
    (110, 'Gunapala', '123 Supplier St', 1000),
    (220, 'KFC', '456 Supplier Rd', 1000),
    (330, 'Ayubowan', '789 Supplier Ave', 1000),
    (440, 'Nona Haamu', '101 Supplier Blvd', 1000),
    (660, 'David', '333 Supplier Dr', 1000);

-- Insert data into the Supplier_Contact table
INSERT INTO Supplier_Contact (Sup_Id, S_Phone)
VALUES
    (110, 0701111111),
    (110, 0782222222),
    (220, 0763333333),
    (220, 0984444444),
    (330, 0775555555),
    (330, 0756666666);

-- Insert data into the Supplier_Email table
INSERT INTO Supplier_Email (Sup_Id, S_Email)
VALUES
    (110, 'supplier1@email.com'),
    (110, 'contact1@email.com'),
    (220, 'supplier2@email.com'),
    (220, 'contact2@email.com'),
    (330, 'supplier3@email.com'),
    (330, 'contact3@email.com');

-- Insert data into the Supply table
INSERT INTO Supply(O_Id, Sup_Id)
VALUES
    (111, 110),
    (222, 220),
    (333, 330),
    (444, 440),
    (555, 440),
    (666, 330);

-- Insert data into the Payment table
INSERT INTO Payment (P_Id, P_Type, Date, Invoice_No, P_Method, Amount, M_Id)
VALUES
    (10001, 'E Money', '2023-01-15', 'INV001', 'Online Payment', 1500, 1000),
    (20001, 'E Money', '2023-02-20', 'INV002', 'Visa', 1500, 1000),
    (30001, 'E Money', '2023-03-10', 'INV003', 'Master', 1200, 1000),
    (40001, 'E Money', '2023-05-12', 'INV004', 'American Express', 1100, 1000),
	(50001, 'E Money', '2023-06-17', 'INV005', 'Online Payment', 1250, 1000),
    (60001, 'Cash', '2023-06-17', 'INV006', 'ATM', 1700, 1000);

-- Insert data into the Direct_Pay table
INSERT INTO Direct_Pay (P_Id, O_Id)
VALUES
    (10001, 111),
    (20001, 222),
    (30001, 333),
    (40001, 444),
    (50001, 555),
    (60001, 666);

-- Insert data into the Online_Pay table
INSERT INTO Online_Pay (P_Id, S_Id)
VALUES
    (10001, 1),
    (20001, 2),
    (30001, 3),
    (40001, 4),
    (50001, 5),
    (60001, 5);

-- Insert data into the Marketer table
INSERT INTO Marketer (Marketer_id, M_Name, Dob, Phone_No, Email, M_Id)
VALUES
    (10, 'Ravindu', '1990-01-15', 0704567890, 'Ravindu@email.com', 1000);
  

select * from Customer;
select * from Provide;
select * from Item;
select * from Customer_Contact;
select * from Manager_Contact;
select * from Manager;
select * from Employee;
select * from Dependent;
select * from Marketer;
select * from Service;
select * from Online_Pay;
select * from Payment;
select * from Direct_Pay;
select * from Outlet;
select * from Outlet_Contact;
select * from Outlet_Email;
select * from Supply;
select * from Supplier;
select * from Supplier_Contact;
select * from Sup