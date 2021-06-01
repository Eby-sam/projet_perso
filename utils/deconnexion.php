<?php

  session_start();
  session_destroy();
  header("location: ../View/_partials/connect.php");

