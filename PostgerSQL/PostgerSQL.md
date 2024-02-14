# IEEE Back-End Task-1

**what is RDBMS?**

- _A relational database management system (RDBMS) is a collection of programs and capabilities that enable IT teams and others to create, update, administer and otherwise interact with a relational database. RDBMSes store data in the form of tables, with most commercial relational database management systems using Structured Query Language (SQL) to access the database._

- _The RDBMS is the most popular database system among organizations across the world. It provides a dependable method of storing and retrieving large amounts of data while offering a combination of system performance and ease of implementation._

---

<br>

**RDBMS VS DBMS:**

_An RDBMS is a type of database management system (DBMS) that stores data in a row-based table structure which connects related data elements._

- **Number of allowed users:** <br>
  _While a DBMS can only accept one user at a time, an RDBMS can operate with multiple users._

- **Amount of data:** <br> _RDBMSes can handle any amount of data, from small to large, while a DBMS can only manage small amounts._

- **Database structure:** <br> _In a DBMS, data is kept in a hierarchical form, whereas an RDBMS utilizes a table where the headers are used as column names and the rows contain the corresponding values._

---

<br>

**What is PostgerSQL:**
<br>

- _PostgreSQL is an object-relational database management system (ORDBMS) based on POSTGRES, Version 4.2_
- \*PostgreSQL is an open-source descendant of this original Berkeley code. It supports a large part of the SQL standard and **offers many modern features:\***

  - Complex queries
  - Foreign keys
  - Triggers
  - Updatable views

---

<br>

**PostgerSQl Clients:**
<br>

- _the clients are just wrappers over SQL commands that get executed on the server and return a response using client server_

---

<br>

**What purpose does pgAdmin serve in PostgreSQL?**

- _to provide a graphical administration tool to make it easier to manipulate schema and data in PostgreSQL_

<br>

# IEEE Back-End Task-2

**Constrains in PostgerSQL :**

- **_Constraints in PostgreSQL are rules or conditions that enforce data integrity and define the valid values for columns in a table_**

---

**Indexing In PostgerSQL :**

- **_Indexes are data structures that store a sorted reference to the data in one or more columns of a table, allowing the database to quickly locate rows and improve the speed of data retrieval operation on DB._**

---

**How does indexing in mysql differ from postgresql?**

- **_while both MySQL and PostgreSQL offer indexing mechanisms to improve query performance, PostgreSQL provides a more extensive range of index types and greater flexibility in index creation and maintenance._**

- **_Default Indexing Method:_**

  - Both MySQL and PostgreSQL use B-tree indexing by default, suitable for range queries and equality comparisons.

- **_Aditional Indexing Types:_**

  - MySQL offers hash indexes and full-text indexes, while PostgreSQL supports a broader range including hash

- **_Index Maintenance:_**

  - MySQL automates index updates, while PostgreSQL requires explicit commands

- **_Functional Indexes:_**

  - PostgreSQL supports functional indexes allowing indexing on expressions or functions of column values, a feature not directly available in MySQL.

<br>

# IEEE Back-End Task-3

## primary keys vs unique keysey

- **Primary Key:**
  - **_Unique column per table._**
  - No dublicated values.
  - No Null Values.
  - It identifies specific records in the table.

---

- **Unique Key:**
  - **_Unique Value per Column_**
  - No dublicated values.
  - It prevents duplicate entries in a column, except for a NULL value.

<br>

# IEEE Back-End Task-4

## Relations (one to one & one to many)

- **One-to-One (1:1) Relationship:**

  - In a one-to-one relationship, one record in a table is associated with exactly one record in another table, and vice versa.

  - In terms of database tables, you might have a "Person" table and a "Passport" table, where the primary key of the "Person" table (e.g., person_id) is linked as a foreign key in the "Passport" table.

- **One-to-Many (1:N) Relationship:**

  - In a one-to-many relationship, one record in a table can be associated with one or more records in another table, but each record in the related table is associated with only one record in the primary table.
  - This is typically implemented by adding a foreign key column in the "many" side (e.g., the "Employee" table) that references the primary key of the "one" side (e.g., the "Department" table).

- ## **Bonus(\***write-ahead logging()**\*)**

  - Write-ahead logging (**_WAL_**) is a technique used in databases and file systems to ensure data integrity and recoverability in the event of system failures.

  - It is a protocol where modifications to a database or file system are first recorded in a log before they are applied to the actual data structures.

  ## **EX:**
  - ### **Logging Changes:**

    - When a transaction or operation modifies data in the database or file system, instead of directly updating the data structures, the changes are first recorded in a sequential log file called the "write-ahead log" or "redo log".

  - ### **Sequential Writes:**
    - The write-ahead log is typically stored on disk, and writes to the log are performed sequentially to optimize performance.


  - ### **Data Modifications:**
    - After the changes are logged, they are applied to the actual data structures in memory or on disk.

  - ## [ More Knowledge About ***(WAL)***](https://www.sqlite.org/wal.html)
