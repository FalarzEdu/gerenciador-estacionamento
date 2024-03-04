<?php

    Class Message
    {
        private $coreUrl;

        public function __construct($coreUrl) {
            $this->coreUrl = $coreUrl;
        }

        public function setMessage($message, $status, $redirect)
        {
            $_SESSION["message"] = $message;
            if($status == "error")
            {
                $_SESSION["status"] = "bg-red-700";
            }
            else
            {
                $_SESSION["status"] = "bg-green-500";
            }
            header("location:" . $this->coreUrl . $redirect);
        }
    }

?>