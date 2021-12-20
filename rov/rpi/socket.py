#
# Datagram socket server class – derives from sserver
#
#
# requires http://pypi.python.org/pypi/gevent-websocket/

import socket
import serial
import sserver
from socketIO_client import SocketIO

ser = serial.Serial()
ser.port = “/dev/ttyACM0″
ser.baudrate =9600

try:
ser.open()
except Exception, e:
print “ACM0 not available, try ACM1″
ser.port = “/dev/ttyACM1″
ser.baudrate=9600
ser.open()

buf = 1024

class dgramserver (sserver.sserver):
# use inherited constructor

def handleconnection (self):    # Handle one incoming connection, from birth to death – not very long
stat = self.ssock.recvfrom(buf)
data, self.raddr = stat
if not data:
pass
else:
self.handlemsg (data)           # our last words

def handlemsg (self, data):         # s/b overriden in subclass
pass

def sendmsg (self, data):
self.ssock.sendto (data, self.raddr)

def serve (self):
while 1:
self.ssock = socket.socket (socket.AF_INET, socket.SOCK_DGRAM)
self.ssock.bind (self.addr)
#self.ssock.connect((’10.0.0.28′,9091))
self.handleconnection ()
self.ssock.close()

if __name__ == ‘__main__’:        # self test code
class echoserver (dgramserver):    # echo server
def handlemsg (self, data):    # simply send back the message
#data = “sending back ” + data
print data
self.sendmsg (“5:1::{‘name’:’message’,’args’:’” + data + “‘}”)
ser.write(data)

#connect back to NodeJS server as the client to be able to send back the data
client = socket.socket (socket.AF_INET, socket.SOCK_STREAM)
client.connect((’10.0.0.28′,1234))
client.sendall (‘robot:’+data)

#self.mainSocket = SocketIO(‘localhost’,9092)
#self.gazeSocket = self.mainSocket.connect()
#self.gazeSocket.emit(‘message’, data)

echo = echoserver (”, 9090)
print ‘Serving….’
echo.serve ()