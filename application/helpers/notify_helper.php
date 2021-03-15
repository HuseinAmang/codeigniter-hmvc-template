<?php if (!defined('BASEPATH'))     exit('No direct script access allowed');

if(!function_exists('notify')){
    function notify($msg,$type = 'info',$judul = ''){
        $tpl = '';
        switch ($type){
            case 'info' :
                $tpl  = '<div class="alert alert-info animated bounceIn delay-1s">';
                $prefix = "Info";
                break;
            
            case 'success' :
                $tpl  = '<div class="alert alert-success animated bounceIn delay-1s">';
                $prefix = "Success";
                break;
            
            case 'warning' :
                $tpl  = '<div class="alert alert-warning animated bounceIn delay-1s">';
                $prefix = "Warning";
                break;
            
            case 'danger' :
                $tpl  = '<div class="alert alert-danger animated bounceIn delay-1s">';
                $prefix = "Danger";
                break;
            default :
                 $tpl  = '<div class="alert alert-info animated bounceIn delay-1s">';
                 $prefix = "Info";
                break;                
        }

        $tpl .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $tpl .= '<strong> '. (trim($judul) !='' ? ucwords($judul) : ucwords($prefix)) .'! </strong> ' . $msg;
        $tpl .= '<script>
                
                $(document).ready(function(){
                     $(".alert").delay(3000).fadeOut("slow");
                });
                
                </script>';
        $tpl .= '</div>';
        
        return $tpl;
    }
}

?>
