PROGRAM SarahRevere (INPUT, OUTPUT);
USES DOS;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF(GetEnv('QUERY_STRING') = 'lanterns=1')
  THEN
    WRITE('The british are coming by sea')
END.
