import RPi.GPIO as GPIO
import time
import smbus
import datetime
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(18,GPIO.OUT)
blink = GPIO.PWM(18,500)	
st=0
blink.start(0)
bus = smbus.SMBus(1)
addr = 0x23
dataset = 50
while (1):
    try:
        f=open("/var/www/html/set.txt","r")
        dataset = float(f.read())
    except:
        pass
    date=datetime.datetime.now()
    microsec = date.microsecond
    if microsec >700000:
        blink.ChangeDutyCycle(st)
    else:
        blink.ChangeDutyCycle(0)
	data = bus.read_i2c_block_data(addr,0x11)
	lum=(data[1] + (data[0]<<8) / 1.2)
	with open("/var/www/html/BH17500.txt","w") as text_file:
		text_file.write("DataTime: %s<br>Luminosity: %.2f lx<br>"%(date,lum))
    if lum<dataset:
        st=50
    else:
		st =0
		time.sleep(1)
    print(lum)
  
    
    
