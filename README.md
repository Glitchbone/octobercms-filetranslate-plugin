#File translation plugin

Enables multi-lingual file upload attributes in October CMS

##Usage

**[Translate plugin](https://octobercms.com/plugin/rainlab-translate)** must be installed first

Download the repo, move it inside the `plugins/glitchbone/filetranslate` folder and register the plugin with October CMS :
```sh
php artisan october:up
```

Use `Glitchbone\FileTranslate\Models\File` in your model attachment configuration :
```php
public $attachOne = [
    'thumbnail' => 'Glitchbone\FileTranslate\Models\File'
];

public $attachMany = [
    'photos' => 'Glitchbone\FileTranslate\Models\File'
];
```

Use the `mlfileupload` form widget in your model fields.yaml :
```yaml
thumbnail:
    label: Thumbnail
    type: mlfileupload
    mode: image
    imageWidth: 200
    imageHeight: 200
photos:
    label: Photo gallery
    type: mlfileupload
    mode: image
    imageWidth: 200
    imageHeight: 200
```

##License

File translation plugin is available under the MIT license. See the [LICENSE](LICENSE.md) file for more information.
