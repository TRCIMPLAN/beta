<?php
/**
 * TrcIMPLAN IBCBase - EjeViviendas
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase EjeViviendas
 */
class EjeViviendas {

    protected $publicacion_ficha; // Instancia de PublicacionWeb, para accesar al metodo Datos en cada uno
    protected $viviendas;         // Arreglo asociativo con datos de Viviendas
    protected $preparado = FALSE; // Bandera

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionWeb
     */
    public function __construct(PublicacionWeb $publicacion_ficha) {
        $this->publicacion_ficha = $publicacion_ficha;
    } // constructor

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            // Tomar datos
            $datos = $this->publicacion_ficha->datos();
            if (isset($datos['Viviendas'])) {
                $this->viviendas = $datos['Viviendas'];
            } else {
                throw new EjeExceptionSinDatos("{$this->publicacion_ficha->nombre} sin datos sobre Viviendas.");
            }
            // Sin Hogares
            if (isset($this->viviendas['Hogares'])) {
                if ($this->viviendas['Hogares'] == 0) {
                    throw new EjeExceptionSinDatos("La cantidad de Hogares es cero.");
                }
            } else {
                throw new EjeExceptionSinDatos("La cantidad de Hogares no está definida.");
            }
            // Levantar bandera
            $this->preparado = TRUE;
        }
    } // preparar

    /**
     * Formatear
     *
     * @param  string Nombre del indicador
     * @return string Valor con formato
     */
    protected function formatear($nombre) {
        $this->prepapar();
        if (isset($this->viviendas[$nombre])) {
            switch ($nombre) {
                case 'Hogares':
                    return number_format($this->viviendas[$nombre], 0, ".", ","); // Cantidad
                    break;
                case 'Ocupación por Vivienda':
                    return number_format($this->viviendas[$nombre], 2, ".", ","); // Decimal
                    break;
                case 'Hogares Jefatura masculina':
                case 'Hogares Jefatura femenina':
                case 'Viviendas con Electricidad':
                case 'Viviendas con Agua':
                case 'Viviendas con Drenaje':
                case 'Viviendas con Televisión':
                case 'Viviendas con Automóvil':
                case 'Viviendas con Computadora':
                case 'Viviendas con Celular':
                case 'Viviendas con Internet':
                    return number_format($this->viviendas[$nombre], 2, ".", ",")." %"; // Porcentaje
                    break;
                default:
                    return '~ '.$this->viviendas[$nombre]; // Original
            }
        } else {
            return 'ND';
        }
    } // formatear

} // Clase EjeViviendas

?>
