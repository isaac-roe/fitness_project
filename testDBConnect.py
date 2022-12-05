import pyodbc
import codecs
import webbrowser


cursor = pyodbc.connect('DRIVER={SQL Server}; SERVER=localhost; DATABASE=FitnessWebsite')

sql_command = "SELECT * FROM Workout WHERE WorkoutID = 1;"

output = cursor.execute(sql_command)

f = open('day1workout.html', 'w')

html_template = """
<html>
<head></head>
<body>
<p>Hello World! </p>

</body>
</html>
"""

f.write(html_template)

for row in output:
    f.write("<h2>" + row.WorkoutName + "</h2>")
    f.write("<p>" + row.LiftA1Name + "</p>")
    f.write("<p>" + row.LiftA2Name + "</p>")
    f.write("<p>" + row.LiftB1Name + "</p>")
    f.write("<p>" + row.LiftB2Name + "</p>")
    f.write("<p>" + row.LiftC1Name + "</p>")
    f.write("<p>" + row.LiftC2Name + "</p>")
    f.write("<p>" + row.LiftC3Name + "</p>")

cursor.close()

f.close()

file = codecs.open("day1workout.html", 'r', "utf-8")

print(file.read())

webbrowser.open('day1workout.html')
