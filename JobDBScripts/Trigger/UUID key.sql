CREATE TRIGGER AddMD5Key BEFORE INSERT  ON jobs
FOR EACH
ROW  SET NEW.key = UUID(  ) ;