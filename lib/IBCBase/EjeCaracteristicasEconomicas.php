<?php
/**
 * TrcIMPLAN IBCBase - EjeCaracteristicasEconomicas
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
 * Clase EjeCaracteristicasEconomicas
 */
class EjeCaracteristicasEconomicas {

    protected $publicacion_ficha;          // Instancia de PublicacionWeb, para accesar al metodo Datos en cada uno
    protected $caracteristicas_economicas; // Arreglo asociativo con datos de Carcaterísticas Económicas
    protected $preparado = FALSE;          // Bandera

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
            if (isset($datos['Características Económicas'])) {
                $this->caracteristicas_economicas = $datos['Características Económicas'];
            } else {
                throw new EjeExceptionSinDatos("{$this->publicacion_ficha->nombre} sin datos sobre Características Económicas.");
            }
            // Levantar bandera
            $this->preparado = TRUE;
        }
    } // preparar

} // Clase EjeCaracteristicasEconomicas

?>
