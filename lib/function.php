<?php
	function checkFile($link, $file){
		if (file_exists($link.$file))
		{
			include $link.$file;
		}
	}