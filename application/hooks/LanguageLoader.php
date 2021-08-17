<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
        	//load files here
            $ci->lang->load('adminmsg',$siteLang);
            /*$ci->lang->load('prodmsg',$siteLang);
            $ci->lang->load('rest_controller',$siteLang);
            $ci->lang->load('salesmsg',$siteLang);
            $ci->lang->load('storemsg',$siteLang);
            $ci->lang->load('transmsg',$siteLang);*/
            $ci->lang->load('msg',$siteLang);
        } else {
        	//load files here
            $ci->lang->load('adminmsg','english');
           /* $ci->lang->load('prodmsg','english');
            $ci->lang->load('rest_controller','english');
            $ci->lang->load('salesmsg','english');
            $ci->lang->load('storemsg','english');
            $ci->lang->load('transmsg','english');*/
            $ci->lang->load('msg','english');
        }
    }
}