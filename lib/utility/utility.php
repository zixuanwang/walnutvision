<?php
function uniqueFilename($strExt = '.tmp') {
	// explode the IP of the remote client into four parts
	$arrIp = explode('.', $_SERVER['REMOTE_ADDR']);

	// get both seconds and microseconds parts of the time
	list($usec, $sec) = explode(' ', microtime());

	// fudge the time we just got to create two 16 bit words
	$usec = (integer) ($usec * 65536);
	$sec = ((integer) $sec) & 0xFFFF;

	// fun bit--convert the remote client's IP into a 32 bit
	// hex number then tag on the time.
	// Result of this operation looks like this xxxxxxxx-xxxx-xxxx
	$strUid = sprintf("%08x-%04x-%04x", ($arrIp[0] << 24) | ($arrIp[1] << 16) | ($arrIp[2] << 8) | $arrIp[3], $sec, $usec);

	// tack on the extension and return the filename
	return $strUid . $strExt;
}
function saveUploadedImage($file) {
	// This function downsample and rename the uploaded image
	// The image path is returned.
	$type = $file ['type'];
	if (strstr ( $type, '/', true ) != 'image') {
		return null;
	}
	$filename = md5_file ( $file ['tmp_name'] );
	$filepath = sfConfig::get ( 'sf_upload_dir' ) . '/' . $filename . '.jpg';
	system ( 'convert ' . $file ['tmp_name'] . ' -resize 640x640 ' . $filepath );
	return $filepath;
}
?>