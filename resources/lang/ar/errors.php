<?php

return [

    /**
     * Error text strings.
     */

    // Permissions
    'permission' => 'ليس لديك صلاحية للدخول إلى الصفحة المطلوبة.',
    'permissionJson' => 'ليس لديك صلاحية لتنفيذ الإجراء المطلوب.',

    // Auth
    'error_user_exists_different_creds' => 'A user with the email :email already exists but with different credentials.',
    'email_already_confirmed' => 'Email has already been confirmed, Try logging in.',
    'email_confirmation_invalid' => 'This confirmation token is not valid or has already been used, Please try registering again.',
    'email_confirmation_expired' => 'The confirmation token has expired, A new confirmation email has been sent.',
    'ldap_fail_anonymous' => 'LDAP access failed using anonymous bind',
    'ldap_fail_authed' => 'LDAP access failed using given dn & password details',
    'ldap_extension_not_installed' => 'LDAP PHP extension not installed',
    'ldap_cannot_connect' => 'Cannot connect to ldap server, Initial connection failed',
    'social_no_action_defined' => 'No action defined',
    'social_login_bad_response' => "Error received during :socialAccount login: \n:error",
    'social_account_in_use' => 'This :socialAccount account is already in use, Try logging in via the :socialAccount option.',
    'social_account_email_in_use' => 'The email :email is already in use. If you already have an account you can connect your :socialAccount account from your profile settings.',
    'social_account_existing' => 'This :socialAccount is already attached to your profile.',
    'social_account_already_used_existing' => 'This :socialAccount account is already used by another user.',
    'social_account_not_used' => 'This :socialAccount account is not linked to any users. Please attach it in your profile settings. ',
    'social_account_register_instructions' => 'If you do not yet have an account, You can register an account using the :socialAccount option.',
    'social_driver_not_found' => 'Social driver not found',
    'social_driver_not_configured' => 'Your :socialAccount social settings are not configured correctly.',

    // System
    'path_not_writable' => 'File path :filePath could not be uploaded to. Ensure it is writable to the server.',
    'cannot_get_image_from_url' => 'لا يمكن الحصول على صورة من :url',
    'cannot_create_thumbs' => 'The server cannot create thumbnails. Please check you have the GD PHP extension installed.',
    'server_upload_limit' => 'لا يسمح الخادم بتحميلات بهذا الحجم. الرجاء رفع حجم ملف أصغر.',
    'image_upload_error' => 'حدث خطأ أثناء تحميل الصورة',

    // Attachments
    'attachment_page_mismatch' => 'عدم تطابق الصفحة أثناء تحديث المرفقات',

    // Pages
    'page_draft_autosave_fail' => 'خطأ في  حفظ المسودة. تأكد من توفر اتصال بالإنترنت قبل حفظ هذه الصفحة',
    'page_custom_home_deletion' => 'لا يمكن حذف صفحة أثناء تعيينها كصفحة رئيسية',

    // Entities
    'entity_not_found' => 'Entity not found',
    'book_not_found' => 'الكتاب غير موجود',
    'page_not_found' => 'الصفحة غير موجودة',
    'chapter_not_found' => 'الفصل غير موجود',
    'selected_book_not_found' => 'لم يتم العثور على الكتاب المحدد',
    'selected_book_chapter_not_found' => 'لم يتم العثور على الكتاب أو الفصل المحدد',
    'guests_cannot_save_drafts' => 'لا يمكن لغير المسجلين حفظ المسودات',

    // Users
    'users_cannot_delete_only_admin' => 'لا يمكنك حذف المشرف الوحيد',
    'users_cannot_delete_guest' => 'لا يمكنك حذف المستخدم الضيف',

    // Roles
    'role_cannot_be_edited' => 'لا يمكن تعديل هذه الصلاحية',
    'role_system_cannot_be_deleted' => 'هذه الصلاحية هي صلاحية النظام ولا يمكن حذفها',
    'role_registration_default_cannot_delete' => 'لا يمكن حذف هذه الصلاحية أثناء تعيين صلاحية التسجيل الافتراضي',

    // Comments
    'comment_list' => 'حدث خطأ أثناء جلب التعليقات.',
    'cannot_add_comment_to_draft' => 'لا يمكنك إضافة تعليقات إلى مسودة.',
    'comment_add' => 'حدث خطأ أثناء إضافة / تحديث التعليق.',
    'comment_delete' => 'حدث خطأ أثناء حذف التعليق.',
    'empty_comment' => 'لا يمكن إضافة تعليق فارغ.',

    // Error pages
    '404_page_not_found' => 'الصفحة غير موجودة',
    'sorry_page_not_found' => 'عذرا، تعذر العثور على الصفحة التي تبحث عنها.',
    'return_home' => 'العودة إلى الصفحة الرئيسية',
    'error_occurred' => 'حدث خطأ',
    'app_down' => ':appName غير فعال اللآن',
    'back_soon' => 'وسنعود قريبا.',
];