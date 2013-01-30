import serial, time, httplib, urllib
s = serial.Serial(port='/dev/cu.usbmodem1411',baudrate=9600,writeTimeout=0)
while True:
    valor = s.readline()
    print"Serial: ",valor
    valor 
    if int(valor) > 200:
        chave = "1"
    else:
        chave = "0"
    params = urllib.urlencode({'chave': chave})
    headers = {"Content-type": "application/x-www-form-urlencoded","Accept": "text/plain"}
    conn = httplib.HTTPConnection("localhost:8888")
    conn.request("POST", "/arduino-i-see-people-here/server.php", params, headers)
    response = conn.getresponse()
    #print response.status, response.reason
    data = response.read()
    conn.close()
    time.sleep(1)

