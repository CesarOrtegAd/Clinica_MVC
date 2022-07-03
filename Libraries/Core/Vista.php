<?php
    class Vista{
        function getView($controller,$view){
            $controller = get_class($controller);
            if($controller == "Home"){
                $view = VISTA.$view.".php";
            }else{
                $view = VISTA.$controller."/".$view.".php";
            }
            require_once($view);
        }
    }

?>