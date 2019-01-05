import time
import Adafruit_DHT
sensor = Adafruit_DHT.DHT11
GPIO=4
humidity, temperature = Adafruit_DHT.read_retry(sensor,GPIO)
if humidity is not None and temperature is not None:
	print (temperature)
	print (humidity)
	time.sleep(1)
else:
	print('Failed to Get reading. Try again!')
