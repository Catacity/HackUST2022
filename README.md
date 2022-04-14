# HackUST2022

A English forum for Hongkongers to improve English skills by sharing their own work, commenting on others' work and reading others' comments.

Note: This is a prototype of the forum. Some features are unavailable! (e.g Search box, multiple choice statistics display, post number count in home page etc)

---

## Getting Started

This is an example of how you set up the forum website on localhost

1. Install xampp Control Panel
2. Go to xampp\htdocs in File Explorer
3. Download the zipped project to xampp\htdocs
4. Right click the zipped project and click "Extract Here"
5. Create a local database on http://localhost/phpmyadmin/ (Follow Database design below)
6. In xampp Control Panel, start Apache and MySQL
7. Start web browser and go to http://localhost/HackUST2022-main/hackust2022/

---

## Database Design
Database name: bibliohk  
  
Tables design:  
- users(<ins>userid</ins>, username, gender, email, password, profileURL, qualifications, date)
- posts(<ins>postid</ins>, userid, category, title, content, date, Q1question, Q1Option1, Q1Option2, Q1Option3, Q1Option4, Q2question, Q2Option1, Q2Option2, Q2Option3, Q2Option4, Q3question, Q3Option1, Q3Option2, Q3Option3, Q3Option4, Q4question, Q4Option1, Q4Option2, Q4Option3, Q4Option4)
- postuserinfo(<ins>postid</ins>, <ins>userid</ins>, bookmarked, Q1Ans, Q2Ans, Q3Ans, Q4Ans)
- comments(<ins>commentid</ins>, postid, userid, content, date)

---

## Contributors

- Hui Yuen Yi
- Lu Zetian

---

## License & copyright

© Hui Yuen Yi, Lu Zetian