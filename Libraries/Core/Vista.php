<?php
    class Vista{
        function getView($controller,$view,$data=""){
            $controller = get_class($controller);
            if($controller == "Home"){
                $view = "Vista/".$view.".php";
            }else{
                $view = "Vista/".$controller."/".$view.".php";
            }
            require_once($view);
        }
    }

?>