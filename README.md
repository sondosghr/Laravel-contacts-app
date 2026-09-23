# Contact Book Web Application (Laravel)

تطبيق ويب مصغر لإدارة دليل جهات الاتصال تم بناؤه باستخدام إطار العمل **Laravel** كجزء من التدريب العملي لتطبيق أفكار ومفاهيم تطوير الباك إند.

---

### المفاهيم والتقنيات المطوّرة في المشروع:
- **Routers & Controllers:** تنظيم مسارات التطبيق وربطها بالتحكم للتعامل مع الطلبات.
- **Database & Migrations:** تصميم وهيكلة جداول قاعدة البيانات والتحكم في المخطط.
- **Laravel Query Builder:** تنفيذ عمليات الاستعلام، التصفية، والتأثير المباشر على البيانات.
- **Blade Templating Engine:** بناء واجهات مستخدم ديناميكية ومقسمة بشكل منظم.

---

### مميزات التطبيق الأساسية:
- إدارة كاملة لجهات الاتصال (إضافة، عرض، تعديل، وحذف).
- تصنيف جهات الاتصال وتصفيتها حسب الفئة.
- معالجة وإظهار البيانات للواجهة بأسلوب سلس.

---

###  كيفية تشغيل المشروع محلياً (Local Setup):

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/sondosghr/Laravel-contacts-app.git](https://github.com/sondosghr/Laravel-contacts-app.git)
   
2- Install dependencies:
composer install

3- Setup environment file:
cp .env.example .env
php artisan key:generate

ملاحظة: يجب إنشاء قاعدة البيانات محلياً وتعديل اسم قاعدة البيانات (DB_DATABASE) داخل ملف .env ليكون مطابقاً لها قبل تنفيذ الـ Migrations.
4- Run migrations:
php artisan migrate

5-Start local server:
php artisan serve

ملاحظة: بعد تشغيل السيرفر المحلي، افتح المسار المباشر لصفحة جهات الاتصال في المتصفح:

http://127.0.0.1:8000/contacts/list

