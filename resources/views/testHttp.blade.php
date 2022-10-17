<!DOCTYPE html>
<html>
<head>
	<!CDATA[''] />
	<meta charset="utf-8">
	<title>Title of document</title>
</head>
<body>
	<header>
		<h1>This is header</h1>
	</header>
	<section id="empty">
		
	</section>
	<section>
		<p>This is a paragraph.</p>

		<button id="btn">Click me and see!</button>

	</section>
	

<script>
	function update(){
		let xml;
		let request = new XMLHttpRequest();
		request.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      //document.getElementById("empty").innerHTML = this.responseXML;
		      let dom = new DOMParser();
		      xml = dom.parseFromString(this.responseXML,"text/xml");
		      //document.getElementById("empty").innerHTML = xml;
		      //alert(xml);
		      var tags = xml.documentElement.childNodes;
		     //alert(tags);
		      let nodes = '';
		      let count = tags.length;
		       alert(count);
		      
		    }		
		}
		request.open("GET","http://127.0.0.1:8000/index2",true);
		request.send();

	}

	let btn = window.document.querySelector('#btn');
	btn.addEventListener('click', function(){
		update();
		
	});

</script>
</body>
</html>