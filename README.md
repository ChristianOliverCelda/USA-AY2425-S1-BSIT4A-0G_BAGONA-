# **SQL Queries for Database Management**  

This repository contains a set of SQL scripts to create, manipulate, and manage a database with two tables: `Users` and `Transactions`. Each script focuses on specific database operations, including creating tables, inserting, updating, deleting, and retrieving data.  

## **Files Overview**  

### **1. Tables.sql**  
- **Purpose**: Defines the structure of the database tables.  
- **Operations**:  
  - Creates the `Users` table with columns for `UserID`, `UserName`, `Email`, and `TradingBalance`.  
  - Creates the `Transactions` table with columns for `TransactionID`, `UserID`, `TransactionDate`, and `Amount`.  
- **Key Features**:  
  - Includes primary and foreign key constraints.  
  - Ensures `Email` is unique.  

### **2. Select.sql**  
- **Purpose**: Retrieves all the data from each table.  
- **Operations**:  
  - Selects all columns and rows from the `Users` and `Transactions` tables.  

### **3. Insert.sql**  
- **Purpose**: Inserts new records into the tables.  
- **Operations**:  
  - Adds a new user to the `Users` table.  
  - Adds a new transaction to the `Transactions` table.  

### **4. Update.sql**  
- **Purpose**: Updates existing records in the tables.  
- **Operations**:  
  - Modifies the `TradingBalance` for a user in the `Users` table.  
  - Updates the `Amount` for a specific transaction in the `Transactions` table.  

### **5. Delete.sql**  
- **Purpose**: Deletes records from the tables.  
- **Operations**:  
  - Removes a user from the `Users` table based on `UserID`.  
  - Deletes a transaction from the `Transactions` table based on `TransactionID`.  

## **Usage Instructions**  
1. **Clone the Repository**:  
   ```bash
   git clone https://github.com/your-username/sql-database-queries.git
   cd sql-database-queries
