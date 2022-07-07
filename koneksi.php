<?php
$koneksi  = mysqli_connect('localhost','202410101013','secret','uas202410101013');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}