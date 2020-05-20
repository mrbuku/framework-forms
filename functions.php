<?php

if ( !function_exists('fwk_forms_activation') ) {
    function fwk_forms_activation() {
        \FwkForms\Activation::run();
    }
}

if ( !function_exists('run_fwk_forms')) {
    function run_fwk_forms() {
        $forms = new FwkForms\Library\FwkForms();
        $forms->run();
    }
}