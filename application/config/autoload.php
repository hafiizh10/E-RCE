<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('googlemaps', 'session', 'database', 'form_validation', 'template');

$autoload['drivers'] = array();

$autoload['helper'] = array('xss', 'url', 'security', 'log', 'fungsi', 'text', 'website');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Menu_model', 'Admin_model', 'User_model', 'Layanan_model', 'Fitur_model', 'Pengaturan_model', 'Website_model');
