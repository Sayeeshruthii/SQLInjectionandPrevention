# ethical-hacking-SQL-injection
5th semester project for Introduction to Computer Security course.

# How to use
1. Create a MySQL database using "sqlinjection.sql" file.
2. Refer the steps to perform SQL injection in the PDF report.
3. Experiment with 3 types of login methods. Edit the </form action=" "> tag in login.php and choose either loginweak.php, loginhash.php or loginPrepStmt.inc.php.
  
 # Types of sql injection attack
 1. Using VEGA scanner and Sqlmap in Kali Linux
 2. Manually inject malicious SQL queries into the website input field.
 
 # Defense mechanism
 1. Prepared statement using PDO or MySQLi
 2. Password hashing
 3. Generates a secure, signed token
 
 # References
1. MMK. (2019, Feb). How to change Port 80 and Port 443 in XAMPP Server, Retrieved from https://www.youtube.com/watch?v=rbycmTTAiqI&feature=youtu.be
2. https://wisemonkeys.in/information-technology/setup-dvwa-using-xampp-windows/
3. http://www.computersecuritystudent.com/SECURITY_TOOLS/DVWA/DVWAv107/lesson6/
4. https://www.owasp.org/index.php/Blind_SQL_Injection
5. Wikipedia contribution. (2019, Dec 19). SQL Injection. In Wikipedia, Retrieved from https://en.wikipedia.org/wiki/SQL_injection
6. https://stackoverflow.com/questions/4712037/what-is-parameterized-query
7. Paul Rubens. (2018, May 2018). What Is SQL Injection
8. David. (2013, Aug 13). Vega Scanner, Retrieved from https://github.com/subgraph/Vega/wiki/Vega-Scanner
