<?php
/*
Plugin Name: LCM Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/lcm-calculator/
Description: LCM calculator to find the LCM of two or more numbers. Shows solutions by prime factorization, common multiples, cake/ladder, GCF, division, and Venn diagram.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_lcm_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_lcm_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/lcm-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> LCM Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_lcm_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_lcm_calculator', 'display_ci_lcm_calculator' );