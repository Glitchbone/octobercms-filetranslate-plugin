<?php namespace Glitchbone\FileTranslate\Models;

use System\Models\File as SystemFile;

/**
 * File Model
 */
class File extends SystemFile
{

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'title',
        'description'
    ];

}
