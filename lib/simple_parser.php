<?php

$cc = 10;

$url = "ejemplo.xml";

//ELEMENTS TO RETRIEVE - YOU MUST KNOW THE TAG NAMES OF EACH ELEMENT - Can be improved using an array (next update):
$nombre = '';
$link = '';



//Counter to start counting the number of items
$cz = 0;

$data = file_get_contents($url);
$depth = array();

//The dataset will be stored inside this variable
$txt = '';

function startElement($parser, $name, $attrs)
{
	//we use global variables to keep track of each element while parsing the whole document
	global $cc, $cz, $txt;
    global $depth;
    global $tagname;
	global $nombre, $link;

	if($cz < $cc)
	{
		/* display only if we find all items to display - updated here*/
		if(strlen(trim($nombre)) > 0 && strlen(trim($link)) > 0)
		{
			//at this level we have a NEW ITEM -> we increment to items' counter
			if($cz++ >= 1)
			{
				/*We display the dataset in the order we wish (see below to apply a different design)*/
				$txt .= $link.$nombre;
				$nombre='';
				$link='';
			}
		}

		$tagname = $name;
	}

	//one level deeper
	$depth[$parser]++;
}

function endElement($parser, $name)
{
    global $depth;
    global $tagname;
	$tagname = '';

    $depth[$parser]--;

}

function characterData($parser, $ddata)
{
    global $tagname;
	global $cc, $cz, $txt;
	global $nombre, $link;

	/*For each tag name we receive we only extract the wanted ones
	You can apply different layout to the data
	*/
	if($cz < $cc)
	{
		switch($tagname)
		{
			case 'URL':if(strlen(trim($ddata)) > 0) $link= "<ul>\n \t<li> ".'<a href="http://'.utf8_encode($ddata).'">';break;
			case 'NOMBRE':if(strlen(trim($ddata)) > 0) $nombre= "".utf8_encode($ddata)."</a>  </li>\n</ul>\n";break;
			default: break;
		}
	}

}

/*everything is triggered here - we parse the xml file and call the startElement & endElement functions, then the characterData function to read all content - the xml_parse line launches the procedure taking care of the arguments*/
$xml_parser = xml_parser_create();
xml_set_element_handler($xml_parser, "startElement", "endElement");
xml_set_character_data_handler($xml_parser, "characterData");

if (!xml_parse($xml_parser, $data))
die(sprintf("XML error: %s en línea %d",	xml_error_string(xml_get_error_code($xml_parser)),xml_get_current_line_number($xml_parser)));

xml_parser_free($xml_parser);

//We store the last elements
$txt .= $link.$nombre;


/*echo the result inside a table (you may write it into a file)*/
//$txt= '<table cellpadding="5" style="border:1px solid black">'.$txt.'</table>';
echo $txt;
?>
