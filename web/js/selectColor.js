/**
 * 
 */
var setup = function() {
	
	var candidateColorNodeId = 'candidateColorRow';
	var selectedColorNodeId = 'selectedColorRow';
	var candidateColorNode = document.getElementById(candidateColorNodeId);
	var selectedColorNode = document.getElementById(selectedColorNodeId);
	candidateColorNode.onclick = function(e) {
		target = getTarget(e);
		var pickPatch = target.cloneNode(true);
		var idSplits = target.id.split("_");
		pickPatch.id = 'sc_' + idSplits[1];
		selectedColorNode.appendChild(pickPatch);
	}
	selectedColorNode.onclick = function(e) {
		target = getTarget(e);
		target.parentNode.removeChild(target);
	}
	function getTarget(x) {
		x = x || window.event;
		return x.target || x.srcElement;
	}

}

window.onload = setup;