PROGRAM HelloDear(INPUT, OUTPUT);
USES DOS;
VAR
  TNumber, Lenght: INTEGER;
  Ch: CHAR;
  Query, Example: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  FOR TNumber := 1 to 5
  DO
    BEGIN
      Example[TNumber] := Query[TNumber];
    END;
  IF Example <> 'name='
  THEN
    WRITELN('Hello Anonymous')
  ELSE
    IF LENGTH(Example) = LENGTH(Query)
    THEN
      WRITELN('Hello Anonymous')
    ELSE
      BEGIN
        WRITE('Hello Dear ');
        FOR TNumber := 6 to LENGTH(Query)
        DO
          WRITE(Query[TNumber])
      END;
  WRITELN
END.
