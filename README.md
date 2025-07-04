# مشروع التخرج
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/first_page.png)
# screen photo
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(114).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(115).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(116).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(117).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(118).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(119).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(120).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(121).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(122).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(123).png)
![ مشروع التخرج](https://github.com/TaherZreeka/Graduation-Project/blob/main/public/assets/img/Screenshot%20(124).png)
# مخططات UML 
# مخططات فصول UML لنظام إدارة المعهد


![  UML](https://github.com/TaherZreeka/Graduation-Project/blob/main/docs/sql.png)
![ UML](https://github.com/TaherZreeka/Graduation-Project/blob/main/docs/uml_class_diagram.png)



## نظرة عامة على النظام

يتكون نظام إدارة المعهد من المكونات الرئيسية التالية:

### إدارة المستخدمين
- **المستخدم**: جهة مصادقة مركزية مع البريد الإلكتروني وكلمة المرور
- **دور المستخدم**: يحدد أدوار المستخدم (المسؤول، المعلم، الطالب)
- **المسؤول**: مستخدمون إداريون يتمتعون بصلاحية الوصول على مستوى النظام

### الإدارة الأكاديمية
- **الطالب**: معلومات الطالب والسجلات الأكاديمية
- **المعلم**: معلومات المعلم وواجبات التدريس
- **الوصي**: معلومات ولي الأمر/الوصي للطلاب
- **الفصول**: إدارة الفصل/القسم
- **المادة**: معلومات المادة/المقرر الدراسي
- **مسار المادة**: المسارات الأكاديمية (مثل العلوم، الآداب، التجارة)
- **الصف**: المستويات الدراسية (مثل الصف العاشر، الصف الحادي عشر)

### التواصل
- **الإعلان**: إعلانات على مستوى النظام وخاصة بالفصل الدراسي

## المفتاح العلاقات

### علاقات واحد لواحد
- مستخدم ↔ مدير (يمكن لمستخدم واحد أن يكون مديرًا واحدًا)
- مستخدم ↔ معلم (يمكن لمستخدم واحد أن يكون معلمًا واحدًا)
- مستخدم ↔ طالب (يمكن لمستخدم واحد أن يكون طالبًا واحدًا)

### علاقات واحد لكثيرين
- دور المستخدم ↔ مستخدم (يمكن لدور واحد أن يضم عدة مستخدمين)
- ولي أمر ↔ طالب (يمكن لولي أمر واحد أن يضم عدة طلاب)
- معلم ↔ فصول دراسية (يمكن لمعلم واحد أن يُدرّس عدة فصول دراسية)
- معلم ↔ إعلان (يمكن لمعلم واحد إنشاء عدة إعلانات)
- الصف ↔ فصول دراسية (يمكن للصف الواحد أن يضم عدة فصول دراسية)
- مسار المادة ↔ فصول دراسية (يمكن لمسار واحد أن يضم عدة فصول دراسية)

### علاقات كثير لكثيرين
- طالب ↔ فصول دراسية (يمكن للطلاب التواجد في عدة فصول دراسية)
- طالب ↔ مادة دراسية (يمكن للطلاب دراسة عدة مواد دراسية)
- معلم ↔ مادة دراسية (يمكن للمعلمين تدريس عدة مواد دراسية)
- فصول دراسية ↔ الموضوع (يمكن أن تحتوي الفئات على مواضيع متعددة)
- تدفق الموضوع ↔ الموضوع (يمكن أن تحتوي التدفقات على مواضيع متعددة)

## ملاحظات تصميم قاعدة البيانات

- يستخدم النظام Laravel Eloquent ORM للعلاقات
- تُستخدم جداول Pivot لعلاقات متعدد إلى متعدد:
- `class_student` لعلاقة الطالب بالفئات
- `student_subjects` لعلاقة الطالب بالموضوع
- `subject_stream_subject` لعلاقة تدفق الموضوع بالموضوع
- تضمن قيود المفتاح الخارجي سلامة البيانات
- يتم الاحتفاظ بالطوابع الزمنية لمسارات التدقيق


## ميزات النظام

بناءً على بنية UML، يدعم هذا النظام:
- مستخدم متعدد الأدوار المصادقة
- تسجيل الطلاب وإدارتهم
- مهام المعلم وجدولته
- إدارة الصف والمواد الدراسية
- تنظيم المسار الأكاديمي
- تتبع معلومات ولي الأمر/الوالد
- نظام إعلان للتواصل
- تنظيم مستوى الصف
## التثبيت والإعداد
1. أولًا، عليك استنساخ المستودع على جهازك المحلي. للقيام بذلك، يمكنك تشغيل الأمر التالي في الطرفية.
```bash
git clone https://github.com/TaherZreeka/Graduation-project.git
```

2. بعد ذلك، عليك الانتقال إلى مجلد المشروع.
```bash
cd Graduation-project
```

3. الآن عليك تثبيت التبعيات. للقيام بذلك، يمكنك تشغيل الأمر التالي.
```bash
composer install
```
سيؤدي هذا إلى تثبيت جميع التبعيات المطلوبة للمشروع. إذا لم تقم بتثبيت composer بعد، يمكنك تنزيله من [هنا](https://getcomposer.org/download/).

4. الآن يمكنك إنشاء قاعدة بيانات باستخدام mysql. يمكنك استخدام الأمر التالي لإنشاء قاعدة البيانات.
```sql
CREATE DATABASE sms;
```

5. الآن، عليك ترحيل الجداول إلى قاعدة البيانات. للقيام بذلك، يمكنك تنفيذ الأمر التالي:
```bash
php artisan migrate
```
سيؤدي هذا إلى إنشاء جميع الجداول المطلوبة للمشروع.

6. الآن، يمكنك تزويد قاعدة البيانات ببعض البيانات. للقيام بذلك، يمكنك تنفيذ الأمر التالي:
```bash
php artisan db:seed
```
سيؤدي هذا إلى تزويد قاعدة البيانات ببعض البيانات.

7. الآن، يمكنك تشغيل المشروع. للقيام بذلك، يمكنك تنفيذ الأمر التالي.
```bash
php artisan Serve
```
سيؤدي هذا إلى تشغيل الخادم، ويمكنك الوصول إلى المشروع بالانتقال إلى:
```
http://127.0.0.1:8000
```

8. يمكنك الآن تسجيل الدخول إلى النظام باستخدام بيانات الاعتماد التالية:

> المدير:<br>
البريد الإلكتروني: test@admin.com<br>
كلمة المرور: admin123

> المعلم:<br>
البريد الإلكتروني: test@teacher.com<br>
كلمة المرور: teacher123

> الطالب:<br>
البريد الإلكتروني: test@student.com<br>
كلمة المرور: student123




