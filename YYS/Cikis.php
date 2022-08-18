<?php
session_start();
session_destroy();
header("Location:LoginView.php?OturumSonlandırıldı");