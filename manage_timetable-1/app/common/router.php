<?php 
class Router{
    public function setRouter($path){
        switch ($path) {
            

                case 'edit-schedule':
                require_once './app/controllers/edit_schedule_create.php';
                break;
                
            case 'edit-schedule-confirm':
                require_once './app/controllers/edit_schedule_confirm.php';
                break;
                
            case 'edit-schedule-complete':
                require_once './app/controllers/edit_schedule_complete.php';
                break;
                        
            default:
                // require_once './app/views/home.php';
                break;
        }
    }
}

$path = isset($_REQUEST['router']) ? $_REQUEST['router'] : 'edit-schedule';

$router = new Router();
$router-> setRouter($path);
?>