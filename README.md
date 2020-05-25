# Laravel - Ajax ile Resim Yükleme
![AjaxImage](https://i.hizliresim.com/PbSqHw.png)
Laravel ile Ajax kullanarak sayfa yenilemeden resim yükleme. 
# Özellikler ! 

  - Image Gallery olarak kullanabilirsiniz.
  - Sayfanızda POST ve GET işlemleri yapmadan AJAX ile anında fotoğraflarınızı veritabanına upload edebilirsiniz.
  - 
### Kurulum 

Composer.Json bağımlılıklarını kuruyoruz.

```sh
composer install 
```

.Env dosyamızı kendi veritabanı bilgilerimize göre update ediyoruz. Migration yapımızı çağırıyoruz.

```sh
php artisan migrate
```

Veritabanı dosyalarımızı oluşturduk. 

```sh
php artisan serve
```
localhost:8000/ajax_upload adresimizden projemizi kullanabiliriz.

