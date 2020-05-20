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

    public function loadDependencies()
    {
        $this->loader = new Loader();
    }

    public function defineAdminHooks()
    {

    }

    public function definePublicHooks()
    {

    }

    public function run()
    {
        $this->loader->run();
    }
}