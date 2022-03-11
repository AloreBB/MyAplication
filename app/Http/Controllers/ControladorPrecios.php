<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function price($total){

        $precioTotal = 0;
        $descuento1 = 0.2;
        $descuento2 = 0.3;
        $descuento3 = 0.4;
        $descuento4 = 0.5;
        if($total > 0){
            if(is_numeric($total)){
                if($total >= 100000 && $total <= 150000){
                    $precioTotal = $total * $descuento1;

                    return 'El descuento del producto es del 2%, y el total a
                    pagar es: $'.$precioTotal;
                }
                elseif($total > 150000 && $total <= 300000){
                    $precioTotal = $total * $descuento2;

                    return 'El descuento del producto es del 3%, y el total a
                    pagar es: $'.$precioTotal;
                }
                elseif($total >= 300000 && $total <= 500000){
                    $precioTotal = $total * $descuento3;

                    return 'El descuento del producto es del 4%, y el total a
                    pagar es: $'.$precioTotal;
                }
                elseif($total >= 500000){
                    $precioTotal = $total * $descuento3;

                    return 'El descuento del producto es del 5%, y el total a
                    pagar es: $'.$precioTotal;
                }
                else{
                    echo 'No hay descuento';
                }
            }
            else{
                echo 'El valor ingresado es incorrecto. Inténtelo nuevamente”.';
            }

        }
        else{
            echo 'El valor ingresado es incorrecto. Inténtelo nuevamente”.';
        }
    }

    public function getIVA($articulo, $precio){
        $IVA = $precio * 0.19;
        $articuloSinIva = $precio;
        $precioTotalConIva = $articuloSinIva + $IVA;


        if(is_numeric($articulo)){
            echo 'Algunos de los datos no fueron ingresados correctamente. Inténte nuevamente.';
        }
        else{
                if($precio > 0){
                    if(is_numeric($precio)){
                        return 'El artículo '.$articulo.' sin IVA cuesta $'.$precio.' y el precio del IVA es de $'.$IVA.'. El
                        total a pagar por el artículo es de $'.$precioTotalConIva;
                    }
                    else{
                        echo 'Por favor digite el precio del articulo correctamente';
                    }

                }
                else{
                    return 'Por favor digite el precio del articulo correctamente';
                }
        }

        /*
        if(is_numeric($precio) && $precio > 0){
            return 'El artículo '.$articulo.' sin IVA cuesta $'.$precio.' y el precio del IVA es de $'.$IVA.'. El
            total a pagar por el artículo es de $'.$precioTotalConIva;
        }
        else{
            return 'Por favor escriba correctamente los datos';
        }
        */
    }
}
