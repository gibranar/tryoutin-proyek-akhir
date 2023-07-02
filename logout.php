<?php  
session_start();

// Hapus session
session_unset();
session_destroy();

echo "<script>window.location.href = 'index.html';</script>";