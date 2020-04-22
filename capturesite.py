import requests
import webbrowser
import time
from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from time import sleep

driver = webdriver.Chrome(executable_path='/home/executables/Desktop/chromedriver')
driver.get('https://google.com')
sleep(1)

driver.get_screenshot_as_file("screenshot.png")
driver.quit()
print("end...")
