<?php

use ZfSnapJquery\Libraries;

return array(
    'zf_snap_jquery' => array(
        'libraries' => array(
            'jquery' => array(
                // jQuery version. Using only with CDN script
                'version' => Libraries\Jquery::VERSION_DEFAULT,
                // CDN script. You can use other predefined constants
                'cdnScript' => Libraries\Jquery::CDN_DEFAULT,
                // Url to jQuery script (it disable CDN script)
                'script' => null,
                // Set to false if you want to include script by your self
                'enabled' => true,
                // Enables no conflict mode in jQuery
                'noConflictMode' => false,
            ),
            'jquery-ui' => array(
                // jQuery UI version. Using only with CDN script
                'version' => Libraries\Jqueryui::VERSION_DEFAULT,
                // Theme name (theme list: http://codeorigin.jquery.com/ui/)
                'theme' => Libraries\Jqueryui::THEME_DEFAULT,
                // CDN style. You can use other predefined constants
                'cdnStyle' => Libraries\Jqueryui::CDN_STYLE_DEFAULT,
                // CDN script. You can use other predefined constants
                'cdnScript' => Libraries\Jqueryui::CDN_JQUERY_SCRIPT,
                // Url to jQuery UI style (it disable CDN style)
                'style' => null,
                // Url to jQuery UI script (it disable CDN script)
                'script' => null,
                // Set to false if you want to include script and style by your self
                'enabled' => true,
            ),
            'jquery-ui-timepicker-addon' => array(
            	'cdnStyle' => Libraries\TimepickerAddon::CDN_STYLE_DEFAULT,
            	'cdnScript' => Libraries\TimepickerAddon::CDN_DEFAULT,
            	'enabled' => true,
            ),
        ),
        'view-helpers' => array(
            'jquery' => array(
                // Set to true if you want to use jQuery helper to handle scripts and styles
                'appendToOwnHelper' => false,
            ),
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'jquery-class' => 'ZfSnapJquery\Libraries\Jquery',
            'jquery-ui-class' => 'ZfSnapJquery\Libraries\Jqueryui',
            'jquery-view-helper-class' => 'ZfSnapJquery\View\Helper\Jquery',
    		'jquery-ui-timepicker-addon-class' => 'ZfSnapJquery\Libraries\TimepickerAddon',
        ),
        'factories' => array(
            'jquery' => 'ZfSnapJquery\Libraries\JqueryFactory',
            'jquery-ui' => 'ZfSnapJquery\Libraries\JqueryuiFactory',
        	'jquery-ui-timepicker-addon' => 'ZfSnapJquery\Libraries\TimepickerAddonFactory',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'formJquerySlider' => 'ZfSnapJquery\Form\View\Helper\Slider',
            'formJquerySpinner' => 'ZfSnapJquery\Form\View\Helper\Spinner',
            'formJqueryDatepicker' => 'ZfSnapJquery\Form\View\Helper\Datepicker',
            'formJqueryAutocomplete' => 'ZfSnapJquery\Form\View\Helper\Autocomplete',
    		'formJqueryDatetimepicker' => 'ZfSnapJquery\Form\View\Helper\Datetimepicker',
    		'formJqueryTimepicker' => 'ZfSnapJquery\Form\View\Helper\Timepicker',
        ),
        'factories' => array(
            'jquery' => 'ZfSnapJquery\View\Helper\JqueryFactory',
        ),
    ),
    'form_elements' => array(
        'invokables' => array(
            'slider' => 'ZfSnapJquery\Form\Element\Slider',
            'spinner' => 'ZfSnapJquery\Form\Element\Spinner',
            'datepicker' => 'ZfSnapJquery\Form\Element\Datepicker',
            'autocomplete' => 'ZfSnapJquery\Form\Element\Autocomplete',
    		'datetimepicker' => 'ZfSnapJquery\Form\Element\Datetimepicker',
    		'timepicker' => 'ZfSnapJquery\Form\Element\Timepicker',
        ),
    )
);
