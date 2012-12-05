<?php 
/** CrugeTranslator

	provee centralizacion para aplicar la traduccion de mensajes de español a otros idiomas

 	@author: Christian Salazar H. <christiansalazarh@gmail.com> @bluyell
	@license protected/modules/cruge/LICENCE
*/
class CrugeTranslator {
	/**
		va a traducir a $keyword en el lenguaje configurado. si la traduccion no existe devuelve
		la palabra solicitada y la agrega al indice.
	*/
	public static function t($keyword){
	
		//$lang = Yii::app()->language;
		
		return $keyword;
	}
}
