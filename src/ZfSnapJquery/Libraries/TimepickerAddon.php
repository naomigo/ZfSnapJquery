<?php

namespace ZfSnapJquery\Libraries;

/**
 * Timepicker Addon
 *
 * @author Naomi Gotts <knome2001@hotmail.com>
 */
class TimepickerAddon implements LibraryIterface
{
    const CDN_DEFAULT = 'https://solarcdn.googlecode.com/files/jquery-ui-timepicker-addon.js';
    const CDN_STYLE_DEFAULT = 'https://solarcdn.googlecode.com/files/ui.datetimepicker.css';

    /**
     * @var bool
     */
    private $enabled = true;

    /**
     * @var bool
     */
    private $noConflictMode = false;

    /**
     * @var string
     */
    private $cdnScript = self::CDN_DEFAULT;
    
    /**
     * @var string
     */
    private $cdnStyle = self::CDN_STYLE_DEFAULT;

    /**
     * @return bool
     */
    public function isNoConflictMode()
    {
        return (bool) $this->noConflictMode;
    }

    /**
     * @param bool $noConflictMode
     * @return Jquery
     */
    public function setNoConflictMode($noConflictMode)
    {
        $this->noConflictMode = (bool) $noConflictMode;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return (bool) $this->enabled;
    }
    
    /**
     * @param bool $enabled
     * @return Jquery
     */
    public function setEnabled($enabled = true)
    {
        $this->enabled = (bool) $enabled;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCdnScript()
    {
        return $this->cdnScript;
    }

    /**
     * @param string $cdnScript
     * @return Jquery
     */
    public function setCdnScript($cdnScript)
    {
        $this->cdnScript = $cdnScript;
        return $this;
    }

    /**
     * @return array|string|null
     */
    public function getScripts()
    {
        if ($this->isEnabled()) {
            $script = $this->getCdnScript();
        }
		return $script;
    }

    /**
    * @return string
     */
    public function getCdnStyle()
    {
        return $this->cdnStyle;
    }

    /**
     *
     * @param string $cdnStyle
     * @return Jqueryui
     */
    public function setCdnStyle($cdnStyle)
    {
        $this->cdnStyle = $cdnStyle;
        return $this;
    }    
    
    /**
     * @return array|string|null
     */
    public function getStyles()
    {
        $style = null;
    	if ($this->isEnabled()) {
        	$style = $this->getCdnStyle();
        }
        return $style;
    }
}
?>
