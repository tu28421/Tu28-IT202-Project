CREATE TABLE LEDBulbsManagers (
 LEDBulbsManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
 pronouns               VARCHAR(60)    NOT NULL,
 firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (LEDBulbsManagerID)
);
INSERT INTO LEDBulbsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('John@LEDBulbs.com', SHA2('LEDBulbs1', 256), 'He/Him', 'John', 'Smith', NOW());

INSERT INTO LEDBulbsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('mike@LEDBulbs.com', SHA2('LEDBulbs2', 256), 'He/Him', 'Mike', 'Hall', NOW());

INSERT INTO LEDBulbsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('tyler@LEDBulbs.com', SHA2('LEDBulbs3', 256), 'He/Him', 'Tyler', 'May', NOW());

--Tanzeel ur Rehman,10/4/24, IT202-005, Phase 1 assignment
