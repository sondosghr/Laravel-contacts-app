# Contact Book Application (Laravel)

تطبيق مصغر لإدارة دليل جهات الاتصال تم بناؤه باستخدام إطار العمل **Laravel** كجزء من التدريب العملي لتطبيق أفكار ومفاهيم تطوير الباك إند.

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
   
1- Install dependencies:
composer install

2- Setup environment file:
cp .env.example .env
php artisan key:generate

3- Run migrations:
php artisan migrate

4-Start local server:
php artisan serve

