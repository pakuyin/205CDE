from flask import Flask, render_template, request
import pymysql
app = Flask(__name__)

# open database connection
db = pymysql.connect(“localhost”, “Database_Username”, “Database_password”, “Database_name”)
# prepare a cursor object using cursor() method
cursor = db.cursor()
cursor.execute(“DROP TABLE IF EXISTS followme”)
# Create table as per requirement
sql = ”””CREATE TABLE followme (FIRST_NAME CHAR(20) NOT NULL, LAST_NAME CHAR(20), MOBILE INT(8), NO OF PEOPLE INT, Email String(50))”””
cursor.execute(sql )
db.close()


@app.route(‘/’)
def Join():
  return render_template(‘followme.html’)


followme.html file
<form action = http://localhost:5000/followme method = “POST”>
  <P>First Name <input type = “text”name = “F.Name” /></p>
  <P>Last Name <input type = “text”name = “L.Name” /></p>
  <P>Email <input type = “string”name = “Email” /></p>
  <P>Mobile <input type = “text”name = “Mobile” /></p>
  <P>Number of people <input type = “int”name = “No. of ppl” /></p>
</form>

# open database connection
db = pymysql.connect(“localhost”, “Database_Username”, “Database_password”, “Database_name”)
# prepare a cursor object using cursor() method
cursor = db.cursor()
# Insert data
sql = ”””INSERT INTO followme (FIRST_NAME, LAST_NAME, MOBILE, NO OF PEOPLE, Email) VALUES ( F.Name, L.Name, Mobile, No. of ppl, Email)”””
try:
  cursor.execute(sql)
  db.commit()
except:
# Rollback in case there is any error
  db.rollback()
db.close()