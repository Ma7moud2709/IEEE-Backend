# IEEE Back-End Task-1

**what is RDBMS?**

- _A relational database management system (RDBMS) is a collection of programs and capabilities that enable IT teams and others to create, update, administer and otherwise interact with a relational database. RDBMSes store data in the form of tables, with most commercial relational database management systems using Structured Query Language (SQL) to access the database._

- _The RDBMS is the most popular database system among organizations across the world. It provides a dependable method of storing and retrieving large amounts of data while offering a combination of system performance and ease of implementation._

---

<br>

**RDBMS VS DBMS:**

_An RDBMS is a type of database management system (DBMS) that stores data in a row-based table structure which connects related data elements._

- **Number of allowed users:** <br>
  *While a DBMS can only accept one user at a time, an RDBMS can operate with multiple users.*

- **Amount of data:** <br> *RDBMSes can handle any amount of data, from small to large, while a DBMS can only manage small amounts.*

- **Database structure:** <br> *In a DBMS, data is kept in a hierarchical form, whereas an RDBMS utilizes a table where the headers are used as column names and the rows contain the corresponding values.*

---

<br>

**What is PostgerSQL:**
<br>

* *PostgreSQL is an object-relational database management system (ORDBMS) based on POSTGRES, Version 4.2* 
* *PostgreSQL is an open-source descendant of this original Berkeley code. It supports a large part of the SQL standard and **offers many modern features:***

    * Complex queries
    * Foreign keys 
    * Triggers
    * Updatable views

---
<br>

**PostgerSQl Clients:**
<br>

* *the clients are just wrappers over SQL commands that get executed on the server and return a response using client server*

---
<br>

**What purpose does pgAdmin serve in PostgreSQL?**

* *to provide a graphical administration tool to make it easier to manipulate schema and data in PostgreSQL*

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
