<?php 

	//http://localhost:8888/whale-xml/updateWhaleXML.php?xvalue=777&yvalue=888&zvalue=999

    $valorZ = $_GET['zvalue'];
    $valorFecha = $_GET['fecha'];
    $valorHora = $_GET['hora'];
    $valorBateria = $_GET['bateria'];
    $valorPanel = $_GET['panel'];
        
	// load the document
	// the root node is <info/> so we load it into $info
	//$whale = simplexml_load_file('http://espigoplatja.com/whale/xml/whale.xml');
	$whale = simplexml_load_file('whaleTestPlaca.xml');
	
	// update
	$whale->valueZ = $valorZ;
	$whale->fecha= $valorFecha;
	$whale->hora= $valorHora;
	$whale->bateria= $valorBateria;
    $whale->panel= $valorPanel;
		
	// save the updated document
	$whale->asXML('whaleTestPlaca.xml');
    
    echo "done";
    
    
?>