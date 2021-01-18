<?php
session_save_path("krokiety/session_files");
session_start();
session_unset();
session_destroy();
header("location: ./welcome");
exit();