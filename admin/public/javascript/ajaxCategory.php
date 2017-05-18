<script type="text/javascript">
		
	function ajaxfunction(id){

		var $ajax;
		if(window.XMLHttpRequest){
			ajax =  new XMLHttpRequest();
		}
		else if(window.ActiveXObject){
			ajax = new ActiveXObject('Microsof.XMLHTTP');
		}
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4){
				document.getElementById("hear").innerHTML =  ajax.responseText;
			}
		}
		ajax.open("GET","template/job/edit/action.php?id="+id, true );
		ajax.send();
 	}
</script>