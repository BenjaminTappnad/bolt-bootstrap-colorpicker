<?php

namespace BenjaminTappnad\bootstrapcolorpicker;

use BenjaminTappnad\bootstrapcolorpicker\Field\BootstrapColorPickerPickerField;
use Bolt\Extension\SimpleExtension;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;

class BootstrapColorPickerFieldTypeExtension extends SimpleExtension
{
    protected function registerFields()
    {
        return [
            new BootstrapColorPickerPickerField(),
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates',
        ];
    }

    protected function registerAssets()
    {
        $style = (new Stylesheet())
            ->setFileName('css/bootstrap-colorpicker.min.css')
            ->setZone(Zone::BACKEND);
        $style2 = (new Stylesheet())
            ->setFileName('bootstrap-colorpicker.min.css')
            ->setZone(Zone::BACKEND);
        $js    = (new JavaScript())
            ->setFileName('js/bootstrap-colorpicker.min.js')
            ->setZone(Zone::BACKEND);

        return [
            $style,
            $style2,
            $js,
        ];
    }
}
