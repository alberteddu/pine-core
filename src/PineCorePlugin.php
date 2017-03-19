<?php

namespace Pine\Plugin\PineCore;

use Branches\Extension\ExtensionInterface;
use Pine\Plugin\AbstractPlugin;
use Pine\Plugin\PluginInterface;
use Pine\Plugin\ThemeLocation;

class PineCorePlugin extends AbstractPlugin implements PluginInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'alberteddu/pine';
    }

    /**
     * @return ExtensionInterface[]
     */
    public function getBranchesExtensions()
    {
        return [];
    }

    /**
     * @return ThemeLocation[]
     */
    public function getThemeLocations()
    {
        return [
            ThemeLocation::create('pine', __DIR__ . '/../theme'),
        ];
    }
}
