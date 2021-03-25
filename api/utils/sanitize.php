<?php

function sanitize_input($data)
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = strip_tags($data);
  $data = stripslashes($data);
  return $data;
}
