CREATE TABLE SUSTAINABLELIVINGManagers (
 SUSTAINABLELIVINGManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
 pronouns               VARCHAR(60)    NOT NULL,
 firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (SUSTAINABLELIVINGManagerID)
);
INSERT INTO SUSTAINABLELIVINGManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('John@SUSTAINABLELIVING.com', SHA2('SUSTAINABLELIVING1', 256), 'He/Him', 'John', 'Smith', NOW());

INSERT INTO SUSTAINABLELIVINGManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('mike@SUSTAINABLELIVING.com', SHA2('SUSTAINABLELIVING2', 256), 'He/Him', 'Mike', 'Hall', NOW());

INSERT INTO SUSTAINABLELIVINGManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('tyler@SUSTAINABLELIVING.com', SHA2('SUSTAINABLELIVING3', 256), 'He/Him', 'Tyler', 'May', NOW());

--Tanzeel ur Rehman,10/4/24, IT202-005, Phase 1 assignment


