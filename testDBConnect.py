import mysql.connector

mydb = mysql.connector.connect(
	host="something",
	user="admin",
	password="fitnessfreaks"
)

mycursor = mydb.cursor()

mycursor.execute("CREATE DATABASE testDB")

for x in mycursor:
	print(x)

db.close()