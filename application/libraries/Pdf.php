<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/tcpdf/tcpdf.php';

class Pdf extends TCPDF {
    public function __construct($config = array()) {
        parent::__construct($config);
    }
}