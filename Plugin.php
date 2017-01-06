<?php namespace Glitchbone\FileTranslate;

use Backend;
use System\Classes\PluginBase;

/**
 * FileTranslate Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['RainLab.Translate'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'File Translate',
            'description' => 'Enables multi-lingual file upload attributes',
            'author'      => 'Adrien Glitchbone',
            'icon'        => 'icon-language'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Glitchbone\FileTranslate\FormWidgets\MLFileUpload' => 'mlfileupload'
        ];
    }

}
