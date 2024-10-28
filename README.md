# Alaa Najeeb - Task #5


## Run seeders
just write:
php artisan db:seed
this migrates all seeders together

 

## Run e-commerce project
just type http://127.0.0.1:8000/ on your browser and you will be directed to the home page

 
## website preview
you can browse the website as a **guest** , **user** , or **admin**
as a guest or user you can browse products & categories
ad an admin you can browse products, categories, orders, users, deleted products
you can do CRUD operations on products, categories. you can browse and delete users, 

when you log in you will be directed to home page, the links in nav bar will be displayed accourding to user role (admin/user).

only logged in users can add orders.
user operation can ne done using api:
browes all products, browes products by category and add order,
*note about add order api*: in request body i add product name only, i use Auth::id() to get user id, but to work properly we should add user token in the request, 
قرات انو في طريقة لنضيف قيمة التوكن بمتحولات البيئه ل انسومنيا بهالحال ماعاد مندخل القيم يدويا، بس ماضل وقت جربا


## APIs collection link:
https://gist.github.com/AlaaNajeeb/86bf059cdc9b7d0f81e578644bf33138



ملاحظة
بالنسبة للمستخدم العادي يستطيع تسجيل الدخول وتظهر له واجهات نفس واجهات الادمن (كصفحات بليد يعني ما ضفت صفحات بليد جديدة) لكن تم اخفاء واجهات مثلا واجهة الاورود وجدول المستخدمين، وضمن واجهات البرودكت تم اخفاء ازرار اضافة منتج جديد وتعديله وحذفه  من خلال شرط ضمن صفحات البليد
