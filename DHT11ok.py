import time
import json
import Adafruit_DHT
from beebotte import*
API_KEY = '9gBjn3tssSA4HfanOfDlWDfQ'
SECRET_KEY = 'MRudNKXqG693S23zTcbehp6wm9ul7dX1'
bbt = BBT(API_KEY,SECRET_KEY)
period = 5
pin = 4
temp_resource = Resource(bbt, 'RaspberryPI','Temp')
humi_resource = Resource(bbt, 'RaspberryPI','humi')
def run():
	while True:
		humidity,temperature = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11,pin)
		if humidity is not None and temperature is not None:
			print('Temp={0:0.1f}*C Humidity={1:0.1f}%'.format(temperature,humidity))
			try:
				temp_resource.write(temperature)
				humi_resource.write(humidity)				
			except Exception:
				print ("Error while writing to Beebotte")
		else:
			print ("Failed to get reading. Try again!")
			time.sleep(0.5)
run()
