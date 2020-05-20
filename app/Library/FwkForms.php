<?php

namespace FwkForms\Library;

if ( !defined('ABSPATH') ) exit;

class FwkForms
{
    protected $loader;
    protected $version;
    protected $shortcode;

    public function __construct()
    {
        $this->loadDependencies();
    }

    public function loadDependencies(): void
    {
        $this->loader = new Loader();
    }

    public function defineAdminHooks(): void
    {

    }

    public function definePublicHooks(): void
    {

    }

    public function run(): void
    {
        $this->loader->run();
    }
}