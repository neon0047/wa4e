<DOCTYPE html>
<html>
<head><title>Crack the code</title></head>
<body style = "font-family : sans-serif">
<h1> MD5 CRACKER </h1>
	<p>"This application takes an MD5 hash
of a four digit pin and check all 10,000
possible four digit PINs to determine the PIN."</p>

<pre> 
Debug Output:
<?php
$goodtext = "Not Found";
// If there is no parameter, this code is all skipped
if (isset($_GET['mdcode'])){
	$time_pre = microtime(true);
	$md5 = $_GET['mdcode'];
    
    $show = 15;

	for($i=0; $i<10000; $i++){
		// Run the hash and then check to see if we match
		$check = hash('md5', $i);
		if ($check == $md5){
			$goodtext = $i;
			break;
		}
         // Debug output until $show hits 0
        if ($show>0){
        	print "$check $i\n";
        	$show = $show - 1;
        }

	}
}
    $time_post = microtime(true);
    print "Elapsed time: ";
    print  $time_post-$time_pre;
    print "\n"
    

?>
PIN:<?=htmlentities($goodtext); ?> 
</pre>

	<form>
		<input type="text" name ="mdcode" size="60">
		<input type= "submit" value = "Crack MD5">
    </form>

    <list>
	<ul>
		<li><a href="index.php">Reset this page</a></li>
        <li><a href="md5.php">Encode md5</a></li>
    </ul>
    </list>
   
</body>
</html>   	


