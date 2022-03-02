PROGRAM Standart(INPUT, OUTPUT);
USES DOS;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('Request method: ', GetEnv('REQUEST_Method'));
  WRITELN('Query string: ', GetEnv('QUERTY_STRING'));
  WRITELN('Content lenght: ', GetEnv('CONTENT_LENGTH'));
  WRITELN('HTTP user agent: ', GetEnv('HTTP_USER_AGENT'));
  WRITELN('HTTP host: ', GetEnv('HTTP_HOST'))
END.
