<?php

return [

    /**
     * Settings text strings
     * Contains all text strings used in the general settings sections of BookStack
     * including users and roles.
     */

    'settings' => 'الإعدادات',
    'settings_save' => 'حفظ الإعدادات',
    'settings_save_success' => 'تم حفظ الإعدادات',

    /**
     * App settings
     */

    'app_settings' => 'إعدادات التطبيق',
    'app_name' => 'اسم التطبيق',
    'app_name_desc' => 'يظهر هذا الاسم في العنوان وأي رسائل بريد إلكتروني.',
    'app_name_header' => 'عرض اسم التطبيق في الأعلى؟',
    'app_public_viewing' => 'السماح للجميع للمشاهدة',
    'app_secure_images' => 'هل تريد تمكين عمليات تحميل صور أمان أعلى؟',
    'app_secure_images_desc' => 'لأسباب تتعلق بالأداء، تكون جميع الصور عامة. يضيف هذا الخيار سلسلة عشوائية، يصعب تخمينها أمام عناوين  الصورة. تأكد من عدم تمكين فهارس الدليل لمنع الوصول السهل.',
    'app_editor' => 'محرر الصفجة',
    'app_editor_desc' => 'حدد أي محرر سيتم استخدامه من قبل جميع المستخدمين لتعديل الصفحات.',
    'app_custom_html' => 'Custom HTML head content',
    'app_custom_html_desc' => 'Any content added here will be inserted into the bottom of the <head> section of every page. This is handy for overriding styles or adding analytics code.',
    'app_logo' => 'شعار التطبيق',
    'app_logo_desc' => 'يجب أن تكون هذه الصورة 43 بكسل في الارتفاع. <br>سيتم تصغير حجم الصور الكبيرة.',
    'app_primary_color' => ' اللون الأساسي للتطبيق',
    'app_primary_color_desc' => 'يجب أن تكون هذه قيمة عشرية.<br>اتركها فارغة لإعادة تعيين إلى اللون الافتراضي.',
    'app_homepage' => 'الصفحة الرئيسية للتطبيق',
    'app_homepage_desc' => 'حدد صفحة لعرضها على الصفحة الرئيسية بدلا من العرض الافتراضي. يتم تجاهل صلاحيات الصفحة للصفحات المحددة.',
    'app_homepage_default' => 'عرض الصفحة الرئيسية الافتراضية التي تم اختيارها',
    'app_disable_comments' => 'تعطيل التعليقات',
    'app_disable_comments_desc' => 'تعطيل التعليقات عبر جميع الصفحات في التطبيق. لا تظهر التعليقات الحالية.',

    /**
     * Registration settings
     */

    'reg_settings' => 'إعدادات التسجيل',
    'reg_allow' => 'هل تريد السماح بالتسجيل؟',
    'reg_default_role' => 'صلاحية المستخدم الافتراضي بعد التسجيل',
    'reg_confirm_email' => 'هل تحتاج إلى تأكيد البريد الإلكتروني؟',
    'reg_confirm_email_desc' => 'If domain restriction is used then email confirmation will be required and the below value will be ignored.',
    'reg_confirm_restrict_domain' => 'Restrict registration to domain',
    'reg_confirm_restrict_domain_desc' => 'Enter a comma separated list of email domains you would like to restrict registration to. Users will be sent an email to confirm their address before being allowed to interact with the application. <br> Note that users will be able to change their email addresses after successful registration.',
    'reg_confirm_restrict_domain_placeholder' => 'لم يتم تعيين أي قيود',

    /**
     * Role settings
     */

    'roles' => 'الصلاحيات',
    'role_user_roles' => 'صلاحيات المستخدم',
    'role_create' => 'إنشاء صلاحيات جديدة',
    'role_create_success' => 'تم إنشاء الصلاحية بنجاح',
    'role_delete' => 'حذف صلاحيات',
    'role_delete_confirm' => 'سيؤدي هذا إلى حذف الصلاحية بالاسم \':roleName\'.',
    'role_delete_users_assigned' => 'هذه الصلاحية :userCount المستخدمين المعينين لها. إذا كنت تريد ترحيل المستخدمين من هذه الصلاحية، فحدد صلاحية جديدة أدناه
.',
    'role_delete_no_migration' => "عدم ترحيل المستخدمين",
    'role_delete_sure' => 'هل تريد بالتأكيد حذف هذه الصلاحية؟',
    'role_delete_success' => 'تم حذف الصلاحية بنجاح',
    'role_edit' => 'تعديل الصلاحيات',
    'role_details' => 'تفاصيل الصلاحية',
    'role_name' => 'اسم الصلاحية',
    'role_desc' => 'وصف قصير للصلاحية',
    'role_system' => 'صلاحيات النظام',
    'role_manage_users' => 'إدارة المستخدمين',
    'role_manage_roles' => 'إدارة الصلاحيات وأذونات الأدوار',
    'role_manage_entity_permissions' => 'إدارة صلاحيات الكتب والفصول والصفحات',
    'role_manage_own_entity_permissions' => 'إدارة الصلاحيات على الكتاب الخاص بي، والفصل والصفحات',
    'role_manage_settings' => 'إدارة إعدادات التطبيق',
    'role_asset' => 'صلاحيات الأصول',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_all' => 'الكل',
    'role_own' => 'خاصة',
    'role_controlled_by_asset' => 'يتم التحكم فيها بواسطة مادة العرض التي يتم تحميلها إليها',
    'role_save' => 'حفظ الصلاحية',
    'role_update_success' => 'تم تحديث الصلاحية بنجاح',
    'role_users' => 'المستخدمون في هذه الصلاحية',
    'role_users_none' => 'لا يوجد أي مستخدم حالياً في هذه الصلاحية',

    /**
     * Users
     */

    'users' => 'المستخدمون',
    'user_profile' => 'صفحة المستخدم',
    'users_add_new' => 'إضافة مستخدم جديد',
    'users_search' => 'البحث عن المستخدمين',
    'users_role' => 'صلاحيات المستخدم',
    'users_external_auth_id' => 'معرف المصادقة الخارجية',
    'users_password_warning' => 'Only fill the below if you would like to change your password:',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'حذف مستخدم',
    'users_delete_named' => 'حذف مستخدم :userName',
    'users_delete_warning' => 'This will fully delete this user with the name \':userName\' from the system.',
    'users_delete_confirm' => 'هل تريد بالتأكيد حذف هذا المستخدم؟',
    'users_delete_success' => 'تمت إزالة المستخدمين بنجاح',
    'users_edit' => 'تحرير المستخدم',
    'users_edit_profile' => 'تعديل الملف الشخصي',
    'users_edit_success' => 'تم تحديث المستخدم بنجاح',
    'users_avatar' => 'الصورة الرمزية للمستخدم',
    'users_avatar_desc' => 'يجب أن تكون هذه الصورة حوالي 256 بكسل مربع.',
    'users_preferred_language' => 'اللغة المفضلة',
    'users_social_accounts' => 'الحسابات الاجتماعية',
    'users_social_accounts_info' => 'هنا يمكنك ربط حساباتك الأخرى لتسجيل الدخول بشكل أسرع وأسهل. لا يؤدي إلغاء ربط الحساب هنا إلى الدخول المصرح به سابقا. يمكنك إبطال الدخول من إعدادات الملف الشخصي في الحساب الاجتماعي المتصل.',
    'users_social_connect' => 'ربط الحساب',
    'users_social_disconnect' => 'إلغاء ربط الحساب',
    'users_social_connected' => ':socialAccount تم إرفاق الحساب بنجاح بملفك الشخصي.',
    'users_social_disconnected' => ':socialAccount تم إلغاء ربط الحساب بنجاح من ملفك الشخصي.',

    // Since these labels are already localized this array does not need to be
    // translated in the language-specific files.
    // DELETE BELOW IF COPIED FROM EN
    ///////////////////////////////////
    'اختر لغة' => [
        'ar' => 'العربية',
        'en' => 'English',
        'de' => 'Deutsch',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский'
    ]
    ///////////////////////////////////
];
