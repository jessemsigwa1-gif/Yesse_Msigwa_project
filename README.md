# JESSENIZER FOOD SUPPLY SYSTEM

## SYSTEM DESCRIPTION DOCUMENT

### Prepared by:

**Name:** Jesse Msigwa

# CHAPTER ONE: INTRODUCTION

## 1.1 Background of the Study

The advancement of information technology has transformed the way businesses conduct their daily operations. Many businesses that previously relied on manual methods are now adopting computerized systems to improve efficiency, accuracy, and customer satisfaction. In the food supply industry, managing products, customer orders, and sales records manually can lead to delays, errors, and poor record keeping.

The JESSENIZER FOOD SUPPLY SYSTEM was developed to address these challenges by providing a digital platform that supports both online and manual food sales. The system allows customers to browse available food products, place orders online, and monitor the progress of their purchases. At the same time, administrators and sellers are able to manage products, monitor sales, and oversee customer orders effectively.


## 1.2 Problem Statement

Many small and medium food supply businesses still use traditional methods to manage their operations. These methods often result in poor inventory control, inaccurate sales records, difficulties in tracking customer orders, and delays in service delivery. Customers may also experience inconvenience due to the lack of an online ordering system.

Therefore, there is a need for a computerized system that simplifies food supply management and improves customer service.


## 1.3 Objectives of the System

### 1.3.1 General Objective

To develop a web-based system that improves the management and sale of food products through both online and manual processes.

### 1.3.2 Specific Objectives

The system aims to:

* Allow customers to register and log into the system.
* Enable customers to view available food products and their prices.
* Allow customers to purchase products online.
* Enable customers to track the status of their orders.
* Provide administrators with tools to manage products and customer orders.
* Generate reports that support decision-making and business management.


# CHAPTER TWO: SYSTEM ANALYSIS

## 2.1 Existing System

In many food supply businesses, transactions are carried out manually. Product records, customer orders, and sales information are often documented using notebooks or paper files. This approach consumes time and increases the likelihood of errors.

### Limitations of the Existing System

* Poor record management.
* Difficulty in tracking orders.
* Delays in customer service.
* Increased risk of data loss.
* Lack of accurate sales reports.

## 2.2 Proposed System

The proposed JESSENIZER FOOD SUPPLY SYSTEM introduces an automated approach to food supply management. The system provides an online environment where customers can place orders while administrators manage products and monitor transactions.

### Benefits of the Proposed System

* Improved efficiency.
* Better record keeping.
* Faster customer service.
* Reduced operational errors.
* Enhanced order tracking.

# CHAPTER THREE: SYSTEM DESIGN

## 3.1 System Users

### Administrator (Admin)

The administrator has the authority to:

* Add, update, and delete products.
* Monitor customer orders.
* Update order status.
* Manage users.
* View sales information.

### Seller

The seller is responsible for:

* Viewing available products.
* Monitoring orders.
* Assisting with sales activities.

### Customer

The customer can:

* Create an account.
* Log into the system.
* View available products.
* Purchase products online.
* View the status of orders.
* Provide feedback on services received.

## 3.2 Functional Requirements

The system shall:

* Support user registration and login.
* Display products with their prices.
* Allow customers to place orders.
* Store transaction records in the database.
* Allow administrators to manage products.
* Provide order status updates.
* Display transaction dates and details.

## 3.3 Non-Functional Requirements

The system should:

* Be easy to use.
* Provide reliable performance.
* Ensure data security.
* Support future improvements.
* Maintain data accuracy.

---

# CHAPTER FOUR: SYSTEM IMPLEMENTATION

## 4.1 Technologies Used

The following technologies were used in developing the system:

| Technology | Purpose                  |
| ---------- | ------------------------ |
| HTML       | Structure of web pages   |
| CSS        | User interface design    |
| JavaScript | Client-side interactions |
| PHP        | Server-side processing   |
| MySQL      | Database management      |
| XAMPP      | Local server environment |



## 4.2 Database Design

The system uses a MySQL database to store information.

### Users Table

Stores user information including:

* User ID
* Full name
* Email address
* Phone number
* Password
* User role

### Products Table

Stores product details including:

* Product ID
* Product name
* Product price
* Stock quantity
* Delivery information

### myOrder Table

Stores order information including:

* Order ID
* User ID
* Product name
* Quantity
* Price
* Total amount
* Order status
* Date and time of transaction


# CHAPTER FIVE: SYSTEM OPERATION

The system operates through the following steps:

1. A customer registers for an account.
2. The customer logs into the system.
3. The customer views available products.
4. The customer selects a product and places an order.
5. The system stores the order information in the database.
6. The customer monitors the status of the order through the My Orders section.
7. The administrator reviews and updates order statuses when necessary.

# CHAPTER SIX: ADVANTAGES OF THE SYSTEM

The JESSENIZER FOOD SUPPLY SYSTEM offers several benefits, including:

* Improved efficiency in managing food sales.
* Better customer experience through online ordering.
* Reduced paperwork.
* Accurate record management.
* Easy monitoring of customer orders.
* Enhanced accessibility of information.

# CHAPTER SEVEN: LIMITATIONS OF THE SYSTEM

Despite its advantages, the system has some limitations:

* It requires internet access for online operations.
* Users need basic computer skills.
* The current version does not support online payment integration.
* System maintenance is necessary to ensure continuous operation.

# CHAPTER EIGHT: RECOMMENDATIONS

The following improvements are recommended for future versions of the system:

* Integration of mobile payment services.
* Development of a shopping cart feature.
* Implementation of email notifications.
* Generation of printable receipts.
* Development of a mobile application version.
  
# CONCLUSION

The JESSENIZER FOOD SUPPLY SYSTEM provides an effective solution for improving the management of food supply businesses. By automating customer registration, product management, and order processing, the system enhances efficiency, minimizes errors, and improves customer satisfaction. Although there are opportunities for further development, the current system establishes a strong foundation for modern food supply management.
