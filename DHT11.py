import time
import Adafruit_DHT
sensor = Adafruit_DHT.DHT11
GPIO = 4
humidity,temperature = Adafruit_DHT.read_retry(sensor,GPIO)
if humidity is not None and temperature is not None:
	print(temperature)
	print(humidity)
else:
	print('Failed to get reading. Try again!')
