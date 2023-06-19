<?PHP
    function crearMazo()
    {
        $mazo= array();
        $palos= array("de bastos", "de oros", "de espadas", "de copas");
        $valores= array("as" ,"1" ,"2" ,"3" ,"4" ,"5" ,"6" ,"7" ,"8" ,"9" ,"jota" ,"Reina" ,"Rey");
        
        $ipalo=0;
        $ivalor=0;

        for ($i=0; $i < 48; $i++) {
            
        
            if($ivalor==12){
                $ivalor=0;
                $ipalo++;
            }
            $ivalor++;
            array_push($mazo, $valores[$ivalor]. " ". $palos[$ipalo]);
        }
        for ($i=0; $i < count($mazo)/4; $i++) { 
            echo $mazo[$i*4]. ", ".$mazo[$i*4+1]. ", ".$mazo[$i*4+2]. ", ".$mazo[$i*4+3].",</br>";
        };
    }

    crearMazo();
?>