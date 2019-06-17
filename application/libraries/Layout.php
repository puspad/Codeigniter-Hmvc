<?php

class Layout{

    function siteLayout($filename){
        $CI =& get_instance();
        $CI->load->view("header.php");
        $CI->load->view($filename);
        $CI->load->view("footer.php");
    }
}
?>