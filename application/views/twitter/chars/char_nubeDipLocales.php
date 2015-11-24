<script type="text/javascript">
	//Limpiar div
	var d = document.getElementById("contenido_nube");
	while (d.hasChildNodes())
	{
		d.removeChild(d.firstChild);
	}	
	<?php //Llenamos el array con las coordenadas        
        $aux=""; 
        for ($i=0; $i<count($hashtags); $i++)
        {
            $porciones = explode(" ", $hashtags[$i]->hashtags);
            for ($j=0; $j<count($porciones); $j++)
        	{
        		if ($porciones[$j] != "") 
        		{
        			$aux = $aux." ".$porciones[$j]; 
        		};
        		
        	};                    
        };    

      $test = preg_split('/[\s,]+/', $aux); //Coloca los hashtags en una sola línea, el separador son los espacios
      $palabras_contadas = array_count_values($test); //Cuenta la cantidad de veces que se repite una palabra

      $a2 = array();
      foreach ($palabras_contadas as $key => $value) { //Llena el array para convertirlo a json
      		if($key != "")
      		{
      			$a2[] = array(
	                "text" => $key,
	                "size" => $value*25
           	);
      		}		    
		};
		$palabras_JSON = json_encode($a2); //Convertimos el array a Json para poderlo colocar en la nube de palabras                   
    ?>
	var fill = d3.scale.category20();
	d3.layout.cloud().size([1000, 400])
	    .words(<?php echo $palabras_JSON ?>)
	    .padding(3)
	    .rotate(function() { return ~~(Math.random() * 2) * 90; })
	    .font("Impact")
	    .fontSize(function(d) { return d.size; })
	    .on("end", draw)
	    .start();

	function draw(words) 
	{
	    d3.select("#contenido_nube").append("svg")
	        .attr("viewBox", "-15 0 " + 1000 + " " + 500 )
        	.attr("preserveAspectRatio", "xMidYMid meet")
	      .append("g")
	        .attr("transform", "translate(472,250)")
	      .selectAll("text")
	        .data(words)
	      .enter().append("text")
	        .style("font-size", function(d) { return d.size + "px"; })
	        .style("font-family", "Impact")
	        .style("fill", function(d, i) { return fill(i); })
	        .attr("text-anchor", "middle")
	        .attr("transform", function(d) {
	          return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
	        })
	        .text(function(d) { return d.text; });
	}
</script>