<?php

return [
    'auth' => [
        'title' => 'Yönetim Paneli'
    ],
    'field' => [
        'invalid_type' => 'Geçersiz alan tipi :type.',
        'options_method_not_exists' => ':model Model\'i ":field" formuna geri dönüş için bir :method() metod tanımlamalıdır.'
    ],
    'widget' => [
        'not_registered' => "':name' isimli widget sınıfı sistemde kayıtlı değil",
        'not_bound' => "':name' isimli widget sınıfı controllerda tanımlanmamış"
    ],
    'page' => [
        'untitled' => "Başlıksız",
        'access_denied' => [
            'label' => "Giriş engellendi",
            'help' => "Bu sayfayı görüntülemek için gerekli izinlere sahip değilsiniz.",
            'cms_link' => "Ana sayfaya dön"
        ],
        'invalid_token' => [
            'label' => 'Geçersiz güvenlik anahtarı'
        ]
    ],
    'partial' => [
        'not_found_name' => "':name' bölümü bulunamadı."
    ],
    'account' => [
        'sign_out' => 'Çıkış',
        'login' => 'Giriş',
        'reset' => 'Sıfırla',
        'restore' => 'Geri yükle',
        'login_placeholder' => 'kullanıcı adı',
        'password_placeholder' => 'parola',
        'forgot_password' => "Parolanızı mı unuttunuz?",
        'enter_email' => "Email adresinizi girin",
        'enter_login' => "Kullanıcı adınızı girin",
        'email_placeholder' => "email",
        'enter_new_password' => "Yeni Parolanızı girin",
        'password_reset' => "Parola Sıfırla",
        'restore_success' => "Email adresinize parolanızı nasıl sıfırlayacağınıza dair bilgiler gönderilmiştir.",
        'restore_error' => "':login' kullanıcı adı bulunamadı.",
        'reset_success' => "Parolanız başarıyla sıfırlandı. Giriş yapabilirsiniz.",
        'reset_error' => "Hatalı giriş yaptınız. Lütfen tekrar deneyin!",
        'reset_fail' => "Parolanız sıfırlanamıyor!",
        'apply' => 'Onayla',
        'cancel' => 'İptal',
        'delete' => 'Sil',
        'ok' => 'Tamam'
    ],
    'dashboard' => [
        'menu_label' => 'Anasayfa',
        'widget_label' => 'Eklenti',
        'widget_width' => 'Genişlik',
        'full_width' => 'tam genişlik',
        'add_widget' => 'Eklenti ekle',
        'widget_inspector_title' => 'Eklenti ayarları',
        'widget_inspector_description' => 'Eklentinin ayarlarını düzenleyin',
        'widget_columns_label' => 'Genişlik :columns',
        'widget_columns_description' => 'Eklenti genişliği, 1 ile 10 arasında bir sayı.',
        'widget_columns_error' => 'Lütfen eklenti genişliğini 1 ile 10 arasında girin.',
        'columns' => '{1} sütun|[2,Inf] sütun',
        'widget_new_row_label' => 'Yeni satıra zorla',
        'widget_new_row_description' => 'Eklentiyi yeni satıra indir.',
        'widget_title_label' => 'Eklenti başlığı',
        'widget_title_error' => 'Eklenti Başlığı gerekli.',
        'status' => [
            'widget_title_default' => 'Sistem durumu',
            'update_available' => '{0} güncelleme var!|{1} güncelleme var!|[2,Inf] güncelleme var!'
        ]
    ],
    'user' => [
        'name' => 'Yönetici',
        'menu_label' => 'Yöneticiler',
        'menu_description' => 'Yönetim paneli gruplarını, kullanıcılarını ve izinlerini yönetin.',
        'list_title' => 'Yöneticileri Yönet',
        'new' => 'Yeni Yönetici',
        'login' => "Kullanıcı Adı",
        'first_name' => "İsim",
        'last_name' => "Soyisim",
        'full_name' => "Tam Adı",
        'email' => "Email",
        'groups' => "Gruplar",
        'groups_comment' => "Kullanıcının hangi gruba bağlı olduğunu belirleyin.",
        'avatar' => "Avatar",
        'password' => "Parola",
        'password_confirmation' => "Parola (Tekrar)",
        'permissions' => 'İzinler',
        'account' => 'Hesap',
        'superuser' => "Süper Kullanıcı",
        'superuser_comment' => "Kullanıcıya her alanda yetki vermek için burayı işaretleyin.",
        'send_invite' => 'Email ile davet gönder',
        'send_invite_comment' => 'Kullanıcının email adresine davet göndermek için burayı işaretleyin',
        'delete_confirm' => 'Bu yöneticiyi silmek istiyor musunuz?',
        'return' => 'Yöneticiler listesine dön',
        'allow' => 'Yetki Var',
        'inherit' => 'Grup Yetkisi',
        'deny' => 'Yetki Yok',
        'group' => [
            'name' => 'Grup',
            'name_field' => 'Adı',
            'description_field' => 'Açıklama',
            'is_new_user_default_field' => 'Yeni kullanıcılar bu gruba dahil edilsin mi?',
            'code_field' => 'Grup kodu',
            'code_comment' => 'Grup kodunu yazın',
            'menu_label' => 'Gruplar',
            'list_title' => 'Grupları Yönet',
            'new' => 'Yeni Yönetici Grubu',
            'delete_confirm' => 'Bu yönetici grubunu silmek istiyor musunuz?',
            'return' => 'Grup listesine dön',
            'users_count' => 'Users'
        ],
        'preferences' => [
            'not_authenticated' => 'Ayarları görüntülemek veya düzenlemek için yetkili bir kullanıcı yok.'
        ]
    ],
    'list' => [
        'default_title' => 'Liste',
        'search_prompt' => 'Arama...',
        'no_records' => 'Bu alan için görüntülenecek kayıt yok.',
        'missing_model' => ':class da kullanılan liste için model değeri tanımlanmamış.',
        'missing_column' => ':columns için sütun değeri tanımlanmamış.',
        'missing_columns' => ':class da kullanılan liste için sütun değeri tanımlanmamış.',
        'missing_definition' => "Liste ':field' için bir sütun değeri içermiyor.",
        'behavior_not_ready' => 'Liste oluşturulamadı, controller da makeLists() metodunu kontrol edin.',
        'invalid_column_datetime' => "':column' için sütun değeri DateTime nesnesi değil, Model kısmında \$dates referansını unutmuş olabilir misiniz?",
        'pagination' => 'Gösterilen kayıtlar: :from-:to Toplam: :total',
        'prev_page' => 'Önceki sayfa',
        'next_page' => 'Sonraki sayfa',
        'refresh' => 'Yenile',
        'updating' => 'Güncelleniyor...',
        'loading' => 'Yükleniyor...',
        'setup_title' => 'Liste Ayarları',
        'setup_help' => 'Listede görmek istediğiniz sütunları seçmek için onay kutularını kullanın. Sütunları yukarı veya aşağı sürükleyerek konumlarını değiştirebilirsiniz.',
        'records_per_page' => 'Sayfa başına kayıt sayısı',
        'records_per_page_help' => 'Sayfa başına görüntülenecek kayıt sayısını seçin. Tek sayfada yüksek miktarda kayıt görüntülemek sistem performansını azaltabilir.',
        'delete_selected' => 'Seçili olanı sil',
        'delete_selected_empty' => 'Silinecek seçili kayıt bulunamadı.',
        'delete_selected_confirm' => 'Seçili kayıtları silmek istediğize emin misiniz?',
        'delete_selected_success' => 'Seçili kayıtlar başarıyla silindi.',
        'column_switch_true' => 'Evet',
        'column_switch_false' => 'Hayır'
    ],
    'fileupload' => [
        'attachment' => 'Dosya Eki',
        'help' => 'Bu ek için bir başlık ve tanım girin.',
        'title_label' => 'Başlık',
        'description_label' => 'Tanım',
        'default_prompt' => '%s e tıkla ya da bir dosya sürükleyin',
        'attachment_url' => 'Ek URLsi',
        'upload_file' => 'Dosya yükle',
        'upload_error' => 'Dosya yükleme hatası',
        'remove_confirm' => 'Emin misiniz?',
        'remove_file' => 'Dosyayı sil'
    ],
    'form' => [
        'create_title' => ":name Oluştur",
        'update_title' => ":name Düzenle",
        'preview_title' => ":name Görüntüle",
        'create_success' => ':name başarıyla oluşturuldu',
        'update_success' => ':name başarıyla güncellendi',
        'delete_success' => ':name başarıyla silindi',
        'missing_id' => "Form kayıt ID'si belirtilmedi.",
        'missing_model' => ':class da kullanılan form için model değeri tanımlanmamış.',
        'missing_definition' => "Form ':field' için bir sütun değeri içermiyor.",
        'not_found' => 'ID\'si :id olan Form bulunamadı.',
        'action_confirm' => 'Emin misiniz?',
        'create' => 'Oluştur',
        'create_and_close' => 'Oluştur ve Kapat',
        'creating' => 'Oluşturuluyor...',
        'creating_name' => 'Oluşturuluyor :name...',
        'save' => 'Kaydet',
        'save_and_close' => 'Kaydet ve Kapat',
        'saving' => 'Kaydediliyor...',
        'saving_name' => 'Kaydediliyor :name...',
        'delete' => 'Sil',
        'deleting' => 'Siliniyor...',
        'confirm_delete' => 'Bu kaydı silmek istediğinize emin misiniz?',
        'confirm_delete_multiple' => 'Seçilen kayıtları silmek istediğinize emin misiniz?',
        'deleting_name' => 'Siliniyor :name...',
        'reset_default' => 'Ön Tanımlı Ayarlara Dön!',
        'resetting' => 'İşleniyor',
        'resetting_name' => ':name İşleniyor',
        'undefined_tab' => 'Çeşitli',
        'field_off' => 'Kapalı',
        'field_on' => 'Açık',
        'add' => 'Ekle',
        'apply' => 'Uygula',
        'cancel' => 'İptal',
        'close' => 'Kapat',
        'confirm' => 'Onayla',
        'reload' => 'Yenile',
        'complete' => 'Tamamla',
        'ok' => 'Tamam',
        'or' => 'veya',
        'confirm_tab_close' => 'Bu sekmeyi kapatmak istediğinize emin misiniz? Kaydedilmemiş değişiklikleri kaybedeceksiniz.',
        'behavior_not_ready' => 'Form oluşturulamadı, controller da initForm() metodunu kontrol edin.',
        'preview_no_files_message' => 'Dosyalar yüklenmedi',
        'preview_no_record_message' => 'Seçili kayıt yok.',
        'select' => 'Seç',
        'select_all' => 'tümü',
        'select_none' => 'hiçbiri',
        'select_placeholder' => 'lütfen seçin',
        'insert_row' => 'Kayıt Ekle',
        'insert_row_below' => 'Alt Satıra Kayıt Ekle',
        'delete_row' => 'Kayıt Sil',
        'concurrency_file_changed_title' => 'Dosya değiştirildi',
        'concurrency_file_changed_description' => "Düzenlemeye çalıştığınız dosya disk üzerinde başka bir kullanıcı tarafından değiştirilmiş. Dosyayı yeniden yükleyebilir ve değişiklikleri kaybedersiniz ya da diskteki dosyayı kendi düzenlediğiniz hali ile değiştirebilirsiniz.",
        'return_to_list' => 'Listeye dön'
    ],
    'recordfinder' => [
        'find_record' => 'Kayıt Bul'
    ],
    'relation' => [
        'missing_config' => "İlişki ':config' için bir yapılandırma ayarı içermiyor.",
        'missing_definition' => "İlişki ':field' için bir sütun değeri içermiyor.",
        'missing_model' => ":class da kullanılan ilişki için model değeri tanımlanmamış.",
        'invalid_action_single' => "Bu işlem tekli ilişkilendirme için kullanılamaz.",
        'invalid_action_multi' => "Bu işlem çoklu ilişkilendirme için kullanılamaz.",
        'help' => 'Eklemek için bir öğeye tıklayın',
        'related_data' => 'İlişkili veri :name',
        'add' => "Ekle",
        'add_selected' => 'Seçilenleri ekle',
        'add_a_new' => 'Yeni bir :name ekle',
        'link_selected' => 'Seçileni bağla',
        'link_a_new' => 'Yeni bir :name bağla',
        'cancel' => 'İptal',
        'close' => "Kapat",
        'add_name' => ":name Ekle",
        'create' => "Oluştur",
        'create_name' => ":name Oluştur",
        'update' => "Güncelle",
        'update_name' => ":name Güncelle",
        'preview' => "Önizle",
        'preview_name' => ":name Önizle",
        'remove' => "Kaldır",
        'remove_name' => ":name Kaldır",
        'delete' => "Sil",
        'delete_name' => ":name Sil",
        'delete_confirm' => 'Emin misiniz?',
        'link' => 'Bağla',
        'link_name' => ':name bağla',
        'unlink' => 'Bağlamayı kaldır',
        'unlink_name' => ':name bağlamasını kaldır',
        'unlink_confirm' => 'Emin misiniz?'
    ],
    'reorder' => [
        'default_title' => 'Kayıtları yeniden sırala',
        'no_records' => 'Sıralamak için bir kayıt bulunamadı.',
    ],
    'model' => [
        'name' => "Model",
        'not_found' => "ID'si :id olan ':class' Model bulunamadı.",
        'missing_id' => "Aranılan model için ID belirtilmedi.",
        'missing_relation' => "':class' Model'i ':relation' ilişkisi için tanımlanmamış.",
        'missing_method' => "':class' Model'i ':method' isimli bir metod içermiyor.",
        'invalid_class' => ":class da tanımlanan :model Model'i geçerli değil, \Model sınıfını extend almalı.",
        'mass_assignment_failed' => "':attribute' Model değeri için toplu atama başarısız.",
    ],
    'warnings' => [
        'tips' => 'Sistem ayar ipuçları',
        'tips_description' => 'Sistemin düzgün çalışabilmesi için dikkat etmeniz gereken sorunlar var.',
        'permissions'  => ':name dizini ve alt dizinleri PHP tarafından yazılabilir değil. Lütfen bu dizindeki webserver için gerekli yazma izinlerini verin.',
        'extension' => ':name PHP eklentisi sistemde yüklü değil. Lütfen kütüphaneyi kurun ve eklentiyi aktifleştirin.'
    ],
    'editor' => [
        'menu_label' => 'Editör ayarları',
        'menu_description' => 'Metin editörü ayarlarını düzenleyebilirsiniz.',
        'font_size' => 'Font büyüklüğü',
        'tab_size' => 'Tab genişliği',
        'use_hard_tabs' => 'Tab girintisi',
        'code_folding' => 'Kod katlama (Alt satıra inme)',
        'word_wrap' => 'Uzun kelimeleri yeni satırda göster',
        'highlight_active_line' => 'Aktif satırı vurgula',
        'auto_closing' => 'Etiketleri ve özel karakterleri otomatik kapat',
        'show_invisibles' => 'Gizli karakterleri göster',
        'show_gutter' => 'Satır numarasını göster',
        'theme' => 'Renk şeması',
    ],
    'tooltips' => [
        'preview_website' => 'Websiteyi Önizle'
    ],
    'mysettings' => [
        'menu_label' => 'Ayarlarım',
        'menu_description' => 'Yönetim hesabı ile ilgili ayarlar'
    ],
    'myaccount' => [
        'menu_label' => 'Kişisel Bilgilerim',
        'menu_description' => 'Hesabınızın ismi, email adresi ve şifresi gibi bilgilerini düzenleyebilirsiniz.',
        'menu_keywords' => 'güvenli oturum açma'
    ],
    'branding' => [
        'menu_label' => 'Yönetim paneli ayarlarını düzenle',
        'menu_description' => 'Yönetim Panelinin isim, renk şeması ve logo gibi ayarlarını düzenleyin.',
        'brand' => 'Marka',
        'logo' => 'Logo',
        'logo_description' => 'Yönetim Panelinde kullanılacak logoyu yükleyin.',
        'app_name' => 'Site Adı',
        'app_name_description' => 'Bu isim, Yönetim Panelinde başlık olarak kullanılacaktır.',
        'app_tagline' => 'Site Mottosu',
        'app_tagline_description' => 'Bu motto Yönetim Paneli giriş ekranında görüntülenecektir.',
        'colors' => 'Renkler',
        'primary_color' => 'Ana Renk color',
        'secondary_color' => 'İkincil Renk color',
        'accent_color' => 'Accent color',
        'styles' => 'Stiller',
        'custom_stylesheet' => 'Özel stil - CSS'
    ],
    'backend_preferences' => [
        'menu_label' => 'Panel Ayarları',
        'menu_description' => 'Hesabınızın tercih edilen dil ayarını değiştirebilirsiniz.',
        'locale' => 'Dil',
        'locale_comment' => 'Yönetim Paneli dil seçiminizi belirleyin.'
    ],
    'access_log' => [
        'hint' => 'Bu kayıtlar yöneticiler tarafından başarılı şekilde yapılan girişleri gösterir. Kayıtlar :days gün boyunca saklanır.',
        'menu_label' => 'Yönetim paneli erişim kayıtları',
        'menu_description' => 'Yönetim paneline başarılı şekilde yapılan girişleri görüntüler.',
        'created_at' => 'Tarih & Saat',
        'login' => 'Giriş',
        'ip_address' => 'IP adres',
        'first_name' => 'İsim',
        'last_name' => 'Soyisim',
        'email' => 'Email'
    ],
    'filter' => [
        'all' => 'tümü'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Bir CSV dosyası yükleyin',
        'import_file' => 'Dosya İçeri Aktar',
        'first_row_contains_titles' => 'İlk satır, sütun isimlerini içermelidir',
        'first_row_contains_titles_desc' => 'Eğer CSV dosyanızda ilk satır, sütun isimlerini içeriyorsa bu seçeneği işaretleyin.',
        'match_columns' => '2. Veritabanı sütunları ile dosyanızdaki verileri eşleştirin',
        'file_columns' => 'Dosyadaki sütunlar',
        'database_fields' => 'Veritabanındaki sütunlar',
        'set_import_options' => '3. İçeri aktarmayı yapılandırın',
        'export_output_format' => '1. Dışarı aktarma formatı',
        'file_format' => 'Dosya formatı',
        'standard_format' => 'Standart format',
        'custom_format' => 'Özel format',
        'delimiter_char' => 'Ayırıcı karakter',
        'enclosure_char' => 'Kapsayıcı karakter',
        'escape_char' => 'Kaçış karakteri',
        'select_columns' => '2. Dışarı aktarılacak sütunları seçin',
        'column' => 'Sütun',
        'columns' => 'Sütunlar',
        'set_export_options' => '3. Dışarı aktarmayı yapılandırın',
        'show_ignored_columns' => 'Göz ardı edilen sütunları göster',
        'auto_match_columns' => 'Sütunları otomatik eşleştir',
        'created' => 'Oluşturulma',
        'updated' => 'Güncellenme',
        'skipped' => 'Atlandı',
        'warnings' => 'Uyarılar',
        'errors' => 'Hatalar',
        'skipped_rows' => 'Atlanan Satırlar',
        'import_progress' => 'İçeri aktarma ilerlemesi',
        'processing' => 'İşleniyor',
        'import_error' => 'İçeri aktarma hatası',
        'upload_valid_csv' => 'Lütfen geçerli bir CSV dosyası seçin.',
        'drop_column_here' => 'Sütunu buraya bırakın...',
        'ignore_this_column' => 'Bu sütunu göz ardı et',
        'processing_successful_line1' => 'Dosya dışarı aktarma işlemi başarıyla tamamlandı!',
        'processing_successful_line2' => 'Tarayıcınız dosyayı otomatik olarak indirecektir',
        'export_progress' => 'Dışarı aktarma ilerlemesi',
        'export_error' => 'Dışarı aktarma hatası',
        'column_preview' => 'Sütun önizlemesi',
    ],
];
