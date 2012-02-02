<?php
/*
 * æ€»ä½“é…�ç½®æ–‡ä»¶ï¼ŒåŒ…æ‹¬API Key, Secret Keyï¼Œä»¥å�Šæ‰€æœ‰å…�è®¸è°ƒç”¨çš„APIåˆ—è¡¨
 * This file for configure all necessary things for invoke, including API Key, Secret Key, and all APIs list
 *
 * @Modified by Edison tsai on 16:34 2011/01/13 for remove call_id & session_key in all parameters.
 * @Created: 17:21:04 2010/11/23
 * @Author:	Edison tsai<dnsing@gmail.com>
 * @Blog:	http://www.timescode.com
 * @Link:	http://www.dianboom.com
 */

global $config;
$config = new stdClass;

# modify by tom.wang at 2011-05-12 : add relate url for oauth flow
$config->AUTHORIZEURL = 'https://graph.renren.com/oauth/authorize';  //è¿›è¡Œè¿žæŽ¥æŽˆæ�ƒçš„åœ°å�€ï¼Œä¸�éœ€è¦�ä¿®æ”¹
$config->ACCESSTOKENURL = 'https://graph.renren.com/oauth/token'; //èŽ·å�–access tokençš„åœ°å�€ï¼Œä¸�éœ€è¦�ä¿®æ”¹
$config->SESSIONKEYURL = 'https://graph.renren.com/renren_api/session_key'; //èŽ·å�–session keyçš„åœ°å�€ï¼Œä¸�éœ€è¦�ä¿®æ”¹
$config->CALLBACK = 'http://www.egoshishang.com/frontend_dev.php/user/authorizeRenRen'; //å›žè°ƒåœ°å�€ï¼Œæ³¨æ„�å’Œæ‚¨ç”³è¯·çš„åº”ç”¨ä¸€è‡´

$config->APIURL		= 'http://api.renren.com/restserver.do'; //RenRenç½‘çš„APIè°ƒç”¨åœ°å�€ï¼Œä¸�éœ€è¦�ä¿®æ”¹
$config->APIKey		= '27a24187cd154bfab696e90e911d7358';	//ä½ çš„API Keyï¼Œè¯·è‡ªè¡Œç”³è¯·
$config->SecretKey	= '2b4e8c89a90a4104bee06f0e9a603617';	//ä½ çš„API å¯†é’¥
$config->APIVersion	= '1.0';	//å½“å‰�APIçš„ç‰ˆæœ¬å�·ï¼Œä¸�éœ€è¦�ä¿®æ”¹
$config->decodeFormat	= 'json';	//é»˜è®¤çš„è¿”å›žæ ¼å¼�ï¼Œæ ¹æ�®å®žé™…æƒ…å†µä¿®æ”¹ï¼Œæ”¯æŒ�ï¼šjson,xml
/*
 *@ ä»¥ä¸‹æŽ¥å�£å†…å®¹æ�¥è‡ªhttp://wiki.dev.renren.com/wiki/APIï¼Œç¼–å†™æ—¶è¯·é�µå®ˆä»¥ä¸‹è§„åˆ™ï¼š
 *  key  (é”®å��)		: APIæ–¹æ³•å��ï¼Œç›´æŽ¥Copyè¿‡æ�¥å�³å�¯ï¼Œè¯·åŒºåˆ†å¤§å°�å†™
 *  value(é”®å€¼)		: æŠŠæ‰€æœ‰çš„å�‚æ•°ï¼ŒåŒ…æ‹¬requiredå�Šoptionalï¼Œé™¤äº†api_key,method,v,formatä¸�éœ€è¦�å¡«å†™ä¹‹å¤–ï¼Œ
 *					  å…¶å®ƒçš„éƒ½å�¯ä»¥æ ¹æ�®ä½ çš„å®žçŽ°æƒ…å†µæ�¥å¤„ç�†ï¼Œä»¥è‹±æ–‡å�Šè§’çŠ¶æ€�ä¸‹çš„é€—å�·æ�¥åˆ†å‰²å�„ä¸ªå�‚æ•°ã€‚
 */
$config->APIMapping		= array( 
		'admin.getAllocation' => '',
		'connect.getUnconnectedFriendsCount' => '',
		'friends.areFriends' => 'uids1,uids2',
		'friends.get' => 'page,count',
		'friends.getFriends' => 'page,count',
		'friends.getSameFriends' => 'uid',
		'notifications.send' => 'to_ids,notification',
		'users.getInfo'	=> 'uids,fields',
		'users.getProfileInfo' => 'uid,fields',
		'photos.getAlbums' => 'uid,page,count',
		'photos.get' => 'uid,aid,page,count',
		'photos.getTags' => 'photo_id,owner_id'
		/* æ›´å¤šçš„æ–¹æ³•ï¼Œè¯·è‡ªè¡Œæ·»åŠ  
		   For more methods, please add by yourself.
		*/
);
?>
