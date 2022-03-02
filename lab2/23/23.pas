PROGRAM HelloDear(INPUT, OUTPUT);
USES DOS;
VAR
  TNumber, Lenght: INTEGER;
  Ch: CHAR;
  Query: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  TNumber := 5;
  IF TNumber = LENGTH(Query)
  THEN
    WRITE('Hello Anonymous')
  ELSE
    BEGIN
      WRITE('Hello dear, ');
      WHILE TNumber < LENGTH(Query)
      DO
        BEGIN
          TNumber := TNumber + 1;
          WRITE(Query[Tnumber])
        END
    END
END. 