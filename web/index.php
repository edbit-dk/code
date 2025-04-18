<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Editor (HTML, CSS, JavaScript)</title>
</head>
	<body>
		<table>
			<tr>
				<td>
					<div class="tag">HTML (Body)</div>
					<div id="html" class="content" contenteditable></div>
				</td>
				<td>
					<div class="tag">CSS</div>
					<div id="css" class="content" contenteditable></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="tag">JavaScript</div>
					<div id="js" class="content" contenteditable></div>
				</td>
				<td>
					<div class="tag">Output</div>
					<iframe id="output"></iframe>
				</td>
			</tr>
		</table>
	</body>
</html>
<script>
window.onload=function(){
  
	var html=document.getElementById("html"),
		css=document.getElementById("css"),
		js=document.getElementById("js"),
		output=document.getElementById("output"),
		working=false,
		fill=function(){
			if(working){
				return false;
			}
			working=true;
			var document=output.contentDocument,
				style=document.createElement("style"),
				script=document.createElement("script");
			document.body.innerHTML=html.textContent;
			style.innerHTML=css.textContent.replace(/\s/g,"");
			script.innerHTML=js.textContent;
			document.body.appendChild(style);
			document.body.appendChild(script);
			working=false;
		};
	html.onkeyup=fill;
	css.onkeyup=fill;
	js.onkeyup=fill;
  
}
</script>
<style>
html,body,table,div.content,iframe{
	border:0;
	height:100%;
	margin:0;
	padding:0;
	width:100%;
}
td{
	border:2px solid black;
	height:50%;
	padding:25px 5px 5px 5px;
	position:relative;
	vertical-align:top;
	width:50%;
}
div.tag{
	position:absolute;
	right:5px;
	top:5px;
    font-weight: bold;
}
</style>