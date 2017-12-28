<?php
/**
 * Created by PhpStorm.
 * User: Manacaze
 * Date: 10/28/2017
 * Time: 12:08 AM
 */

class Usuario extends Connection
{
    public function verificaDados($usuario, $senha, $provincia=0, $distrito=0, $zona=0){
        $sql = "SELECT usuarioId FROM frl_usuario WHERE usuarioNome = '$usuario' AND usuarioSenha = '$senha' AND `provincia`='$provincia' AND `distrito`='$distrito' AND `zona`='$zona'";
        return mysqli_query($this->con(), $sql);
    }
    public function macAddress(){
        ob_start(); // Turn on output buffering
        system('ipconfig /all'); //Execute external program to display output
        $mycom=ob_get_contents(); // Capture the output into a variable
        ob_clean(); // Clean (erase) the output buffer
        $findme = "Physical";
        $pmac = strpos($mycom, $findme); // Find the position of Physical text
        $mac=substr($mycom,($pmac+36),17); // Get Physical Address
        return $mac;
    }
    public function verificaMacAddress($usuario){
        $mac = $this->macAddress();
        $sql = "SELECT mac_address FROM frl_usuario WHERE mac_address = '$mac' AND usuarioId='$usuario'";
        return mysqli_query($this->con(), $sql);
    }
}