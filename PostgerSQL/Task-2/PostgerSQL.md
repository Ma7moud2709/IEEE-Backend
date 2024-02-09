# PostgerSQL Task-2

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
