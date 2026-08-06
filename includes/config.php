<?php

if (!defined('SITE_ROOT')) {
  $scriptDirectory = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
  define('SITE_ROOT', $scriptDirectory === '/' ? '' : rtrim($scriptDirectory, '/'));
}
