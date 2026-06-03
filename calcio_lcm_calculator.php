<?php
/*
Plugin Name: LCM Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/lcm-calculator/
Description: Easily find the Least Common Multiple (LCM) of two or more numbers. Get step-by-step solutions using prime factorization, division, GCF, and Venn diagrams.
Version: 1.0.0
Author: www.calculator.io / LCM Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_lcm_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for LCM Calculator by www.calculator.io";

function calcio_lcm_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">LCM Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_lcm_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_lcm_calculator', 'calcio_lcm_calculator_shortcode' );