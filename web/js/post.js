/**
 *script for selecting color for product 
 */
var colorIdx = 0;
function addColor(nodeId)
{
	selectedNode = document.getElementById('selectedColor');
	colorNode = document.getElementById(nodeId);
	pickColor = colorNode.getAttribute('bgColor');
	newPatch = document.createElement('td');
	newPatch.setAttribute('bgColor',pickColor);
	newPatch.setAttribute('width','20px');
	newPatch.setAttribute('height','20px');
	newPatch.setAttribute('id','patchId_' + colorIdx);
	newPatch.setAttribute('onclick','removeColor(' + '\'' + 'patchId_' + idx + '\')');
	selectedNode.appendChild(newPatch);
	colorIdx++;
}

function removeColor(nodeId)
{
	clickNode = document.getElementById(nodeId);
	clickNode.parentNode.removeChild(clickNode);
}
