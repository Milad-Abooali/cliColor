<?php
/**
 * CLI COLOR
 *
 * @package    App\Core\CLI
 * @category   Lib
 * @author     Milad Abooali <m.abooali@hotmail.com>
 * @copyright  2012 - 2021 Codebox
 * @license    https://opensource.org/licenses/Apache-2.0  Apache License, Version 2.0
 * @version    1.0.0
 */
class cliColor {
    private $foreground = array();
    private $background = array();

    public function __construct() {
        $this->foreground['black'] = '0;30';
        $this->foreground['d_gray'] = '1;30';
        $this->foreground['blue'] = '0;34';
        $this->foreground['l_blue'] = '1;34';
        $this->foreground['green'] = '0;32';
        $this->foreground['l_green'] = '1;32';
        $this->foreground['cyan'] = '0;36';
        $this->foreground['l_cyan'] = '1;36';
        $this->foreground['red'] = '0;31';
        $this->foreground['l_red'] = '1;31';
        $this->foreground['purple'] = '0;35';
        $this->foreground['l_purple'] = '1;35';
        $this->foreground['brown'] = '0;33';
        $this->foreground['yellow'] = '1;33';
        $this->foreground['l_gray'] = '0;37';
        $this->foreground['white'] = '1;37';

        $this->background['black'] = '40';
        $this->background['red'] = '41';
        $this->background['green'] = '42';
        $this->background['yellow'] = '43';
        $this->background['blue'] = '44';
        $this->background['magenta'] = '45';
        $this->background['cyan'] = '46';
        $this->background['l_gray'] = '47';
    }

    /**
     * Get Foreground Color List
     * @return array
     */
    public function getFgColors() {
        return array_keys($this->foreground);
    }

    /**
     * Get Background Color List
     * @return array
     */
    public function getBgColors() {
        return array_keys($this->background);
    }

    /**
     * Make Colored String
     * @param string $input
     * @param null|string $fg_color
     * @param null|string $bg_color
     * @return string
     */
    public function setColor($input, $fg_color = null, $bg_color = null) {
        $output = null;
        if ($this->foreground[$fg_color] ?? false) $output .= "\033[" . $this->foreground[$fg_color] . "m";
        if ($this->background[$bg_color] ?? false) $output .= "\033[" . $this->background[$bg_color] . "m";
        $output .=  $input . "\033[0m";
        return $output;
    }

}
