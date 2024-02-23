-- Create Members Table
CREATE TABLE
    members (
        member_id SERIAL PRIMARY KEY,
        member_name VARCHAR(255) NOT NULL,
        member_address VARCHAR(255),
        phone_number VARCHAR(255),
        member_email VARCHAR(255)
    );

-- ----------------------------
-- Create subscriptions  Table
CREATE TABLE
    subscriptions (
        subscription_id SERIAL PRIMARY KEY,
        member_id INT REFERENCES members (member_id),
    )
    -- ----------------------------
    -- Create Classes  Table
CREATE TABLE
    classes (
        class_id SERIAL PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        description TEXT,
        schedule TIMESTAMP NOT NULL,
        max_capacity INT NOT NULL
    );

-- ----------------------------
-- Create Instructors Table
CREATE TABLE
    instractors (
        instractor_id SERIAL PRIMARY KEY,
        instractor_name VARCHAR(255) NOT NULL,
        instractor_address VARCHAR(255),
        instractor_phone_number VARCHAR(255),
        instractor_email VARCHAR(255),
        expertise VARCHAR(255)
    );

-- ----------------------------
-- Create Equipment Table
CREATE TABLE
    equipment (
        equipment_id SERIAL PRIMARY KEY,
        equipment_name VARCHAR(255) NOT NULL,
        equipment_desc TEXT,
        availability BOOLEAN NOT NULL
    );

-- ----------------------------
-- Relations
-- ----------------------------
-- Many-to-many relationship between classes and members
CREATE TABLE
    class_members (
        class_id INT REFERENCES classes (class_id),
        member_id INT REFERENCES members (member_id),
        PRIMARY KEY (class_id, member_id)
    );

-- Many-to-many relationship between classes and instructors
CREATE TABLE
    class_instructors (
        class_id INT REFERENCES classes (class_id),
        instructor_id INT REFERENCES instructors (instructor_id),
        PRIMARY KEY (class_id, instructor_id)
    );

-- Many-to-many relationship between classes and equipment
CREATE TABLE
    class_equipment (
        class_id INT REFERENCES classes (class_id),
        equipment_id INT REFERENCES equipment (equipment_id),
        PRIMARY KEY (class_id, equipment_id)
    );