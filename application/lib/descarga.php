<?php
   
$filename = $_GET['file'];

$file_extension = strtolower(substr(strrchr($filename,"."),1));

	if( $filename == "" || $filename == "/") 
	{
	 header("HTTP/1.0 404 Not Found");
	 header("Status: 404 Not Found");
	 exit (0);   
	} elseif ( ! file_exists( $filename ) ) 
				{
  	header("HTTP/1.0 404 Not Found");
	header("Status: 404 Not Found");
	exit (0);
				};

		switch( $file_extension )
		{
  		case "ez" : $ctype="application/andrew-inset"; break;
      case "hqx" : $ctype="application/mac-binhex40"; break;
      case "cpt" : $ctype="application/mac-compactpro"; break;
      case "doc" : $ctype="application/msword"; break;
      case "bin" : $ctype="application/octet-stream"; break;
      case "dms" : $ctype="application/octet-stream"; break;
      case "lha" : $ctype="application/octet-stream"; break;
      case "lzh" : $ctype="application/octet-stream"; break;
      case "exe" : $ctype="application/octet-stream"; break;
      case "class" : $ctype="application/octet-stream"; break;
      case "so" : $ctype="application/octet-stream"; break;
      case "dll" : $ctype="application/octet-stream"; break;
      case "oda" : $ctype="application/oda"; break;
      case "pdf" : $ctype="application/pdf"; break;
      case "ai" : $ctype="application/postscript"; break;
      case "eps" : $ctype="application/postscript"; break;
      case "ps" : $ctype="application/postscript"; break;
      case "smi" : $ctype="application/smil"; break;
      case "smil" : $ctype="application/smil"; break;
      case "wbxml" : $ctype="application/vnd.wap.wbxml"; break;
      case "wmlc" : $ctype="application/vnd.wap.wmlc"; break;
      case "wmlsc" : $ctype="application/vnd.wap.wmlscriptc"; break;
      case "bcpio" : $ctype="application/x-bcpio"; break;
      case "vcd" : $ctype="application/x-cdlink"; break;
      case "pgn" : $ctype="application/x-chess-pgn"; break;
      case "cpio" : $ctype="application/x-cpio"; break;
      case "csh" : $ctype="application/x-csh"; break;
      case "dcr" : $ctype="application/x-director"; break;
      case "dir" : $ctype="application/x-director"; break;
      case "dxr" : $ctype="application/x-director"; break;
      case "dvi" : $ctype="application/x-dvi"; break;
      case "spl" : $ctype="application/x-futuresplash"; break;
      case "gtar" : $ctype="application/x-gtar"; break;
      case "hdf" : $ctype="application/x-hdf"; break;
      case "js" : $ctype="application/x-javascript"; break;
      case "skp" : $ctype="application/x-koan"; break;
      case "skd" : $ctype="application/x-koan"; break;
      case "skt" : $ctype="application/x-koan"; break;
      case "skm" : $ctype="application/x-koan"; break;
      case "latex" : $ctype="application/x-latex"; break;
      case "nc" : $ctype="application/x-netcdf"; break;
      case "cdf" : $ctype="application/x-netcdf"; break;
      case "sh" : $ctype="application/x-sh"; break;
      case "shar" : $ctype="application/x-shar"; break;
      case "swf" : $ctype="application/x-shockwave-flash"; break;
      case "sit" : $ctype="application/x-stuffit"; break;
      case "sv4cpio" : $ctype="application/x-sv4cpio"; break;
      case "sv4crc" : $ctype="application/x-sv4crc"; break;
      case "tar" : $ctype="application/x-tar"; break;
      case "tcl" : $ctype="application/x-tcl"; break;
      case "tex" : $ctype="application/x-tex"; break;
      case "texinfo" : $ctype="application/x-texinfo"; break;
      case "texi" : $ctype="application/x-texinfo"; break;
      case "t" : $ctype="application/x-troff"; break;
      case "tr" : $ctype="application/x-troff"; break;
      case "roff" : $ctype="application/x-troff"; break;
      case "man" : $ctype="application/x-troff-man"; break;
      case "me" : $ctype="application/x-troff-me"; break;
      case "ms" : $ctype="application/x-troff-ms"; break;
      case "ustar" : $ctype="application/x-ustar"; break;
      case "src" : $ctype="application/x-wais-source"; break;
      case "xhtml" : $ctype="application/xhtml+xml"; break;
      case "xht" : $ctype="application/xhtml+xml"; break;
      case "zip" : $ctype="application/zip"; break;
      case "au" : $ctype="audio/basic"; break;
      case "snd" : $ctype="audio/basic"; break;
      case "mid" : $ctype="audio/midi"; break;
      case "midi" : $ctype="audio/midi"; break;
      case "kar" : $ctype="audio/midi"; break;
      case "mpga" : $ctype="audio/mpeg"; break;
      case "mp2" : $ctype="audio/mpeg"; break;
      case "mp3" : $ctype="audio/mpeg"; break;
      case "aif" : $ctype="audio/x-aiff"; break;
      case "aiff" : $ctype="audio/x-aiff"; break;
      case "aifc" : $ctype="audio/x-aiff"; break;
      case "m3u" : $ctype="audio/x-mpegurl"; break;
      case "ram" : $ctype="audio/x-pn-realaudio"; break;
      case "rm" : $ctype="audio/x-pn-realaudio"; break;
      case "rpm" : $ctype="audio/x-pn-realaudio-plugin"; break;
      case "ra" : $ctype="audio/x-realaudio"; break;
      case "wav" : $ctype="audio/x-wav"; break;
      case "pdb" : $ctype="chemical/x-pdb"; break;
      case "xyz" : $ctype="chemical/x-xyz"; break;
      case "bmp" : $ctype="image/bmp"; break;
      case "gif" : $ctype="image/gif"; break;
      case "ief" : $ctype="image/ief"; break;
      case "jpeg" : $ctype="image/jpeg"; break;
      case "jpg" : $ctype="image/jpeg"; break;
      case "jpe" : $ctype="image/jpeg"; break;
      case "png" : $ctype="image/png"; break;
      case "tiff" : $ctype="image/tiff"; break;
      case "tif" : $ctype="image/tif"; break;
      case "djvu" : $ctype="image/vnd.djvu"; break;
      case "djv" : $ctype="image/vnd.djvu"; break;
      case "wbmp" : $ctype="image/vnd.wap.wbmp"; break;
      case "ras" : $ctype="image/x-cmu-raster"; break;
      case "pnm" : $ctype="image/x-portable-anymap"; break;
      case "pbm" : $ctype="image/x-portable-bitmap"; break;
      case "pgm" : $ctype="image/x-portable-graymap"; break;
      case "ppm" : $ctype="image/x-portable-pixmap"; break;
      case "rgb" : $ctype="image/x-rgb"; break;
      case "xbm" : $ctype="image/x-xbitmap"; break;
      case "xpm" : $ctype="image/x-xpixmap"; break;
      case "xwd" : $ctype="image/x-windowdump"; break;
      case "igs" : $ctype="model/iges"; break;
      case "iges" : $ctype="model/iges"; break;
      case "msh" : $ctype="model/mesh"; break;
      case "mesh" : $ctype="model/mesh"; break;
      case "silo" : $ctype="model/mesh"; break;
      case "wrl" : $ctype="model/vrml"; break;
      case "vrml" : $ctype="model/vrml"; break;
      case "css" : $ctype="text/css"; break;
      case "html" : $ctype="text/html"; break;
      case "htm" : $ctype="text/html"; break;
	   case "asc" : $ctype="text/plain"; break;
      case "txt" : $ctype="text/plain"; break;
      case "rtx" : $ctype="text/richtext"; break;
      case "rtf" : $ctype="text/rtf"; break;
      case "sgml" : $ctype="text/sgml"; break;
      case "sgm" : $ctype="text/sgml"; break;
      case "tsv" : $ctype="text/tab-seperated-values"; break;
      case "wml" : $ctype="text/vnd.wap.wml"; break;
      case "wmls" : $ctype="text/vnd.wap.wmlscript"; break;
      case "etx" : $ctype="text/x-setext"; break;
      case "xml" : $ctype="text/xml"; break;
      case "xsl" : $ctype="text/xml"; break;
      case "mpeg" : $ctype="video/mpeg"; break;
      case "mpg" : $ctype="video/mpeg"; break;
      case "mpe" : $ctype="video/mpeg"; break;
      case "qt" : $ctype="video/quicktime"; break;
      case "mov" : $ctype="video/quicktime"; break;
      case "mxu" : $ctype="video/vnd.mpegurl"; break;
      case "avi" : $ctype="video/x-msvideo"; break;
      case "movie" : $ctype="video/x-sgi-movie"; break;
      case "ice" : $ctype="x-conference-xcooltalk"; break; 		
		default: header("HTTP/1.0 404 Not Found"); 
		}

			header("Pragma: public"); // requerida
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Cache-Control: private",false); // requerida para ciertos navegadores
			header("Content-Type: $ctype");
			header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
			header("Content-Transfer-Encoding: binary");
			header("Content-Length: ".filesize($filename));

			readfile("$filename");
exit();
?>