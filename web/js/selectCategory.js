/**
 * script for selecting color for product
 */

var setup = function() {
	function getTarget(x) {
		x = x || window.event;
		return x.target || x.srcElement;
	}
	// get XMLHttpRequest object
	function GetXmlHttpObject() {
		var xmlHttp = null;
		try {
			// Firefox, Opera 8.0+, Safari
			xmlHttp = new XMLHttpRequest();
		} catch (e) {
			// Internet Explorer
			try {
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
		return xmlHttp;
	}

	// /ajax object
	var xmlHttp;
	// /category parent node
	var categorySelNodeId = "categoryPanel";
	var categorySelNode = document.getElementById(categorySelNodeId);
	var mainCategoryLoaded = false;
	
	categorySelNode.onclick = function(e) {
//		alert(mainCategoryLoaded);
		if (mainCategoryLoaded)
			return;
		xmlHttp = GetXmlHttpObject();
		if (xmlHttp == null) {
			alert("Browser does not support HTTP Request");
			return;
		}
		target = getTarget(e);
		var targetId = target.id;
		var idSplits = targetId.split('_');
		var level = idSplits[1];
		var calcActionUrl = "/frontend_dev.php/post/categoryList";
//		alert(calcActionUrl);
		xmlHttp.open("GET", calcActionUrl, true);
		xmlHttp.send(null);
		xmlHttp.onreadystatechange = fillCategoryList(targetId);
	}

	//generate sub category list when selection changes
	categorySelNode.onchange = function(e) {
		if(xmlHttp == null)
		xmlHttp = GetXmlHttpObject();
		if (xmlHttp == null) {
			alert("Browser does not support HTTP Request");
			return;
		}
		target = getTarget(e);
		var targetId = target.id;
		var idSplits = targetId.split('_');
		var level = idSplits[1];
		var cid = target.value;
		var catQueryUrl = "/frontend_dev.php/post/categoryList" + "?level="
				+ level + '&cid=' + cid;
		alert(catQueryUrl);
		xmlHttp.open("GET", catQueryUrl, true);
		xmlHttp.send(null);
		xmlHttp.onreadystatechange = addSubcategoryList(target, ++level);
	}

	function addSubcategoryList(parentCateNode, curLevel) {
		if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
			if (xmlHttp.responseText == '') {
				return;
			}
			alert(xmlHttp.responseText);
			var curNodeId = 'category_' + curLevel;
			var curNode = document.getElementById(curNodeId);
			if (curNode == null) {
				curNode = document.createElement('select');
				curNode.id = curNodeId;
			}
			curNode.innerHTML = xmlHttp.responseText;
			parentCateNode.parentNode.appendChild(curNode);
		}
	}

	function fillCategoryList(selNodeId) {
		if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
			var selNode = document.getElementById(selNodeId);
			selNode.innerHTML = xmlHttp.responseText;
			mainCategoryLoaded = true;
		}
	}
}
window.onload = setup;