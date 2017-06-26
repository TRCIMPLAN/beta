<?php
/**
 * TrcIMPLAN SMIBaseNUEVO - SeccionGraficasWeb
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIBaseNUEVO;

/**
 * Clase SeccionGraficasWeb
 */
class SeccionGraficasWeb implements SalidaWeb {

    protected $publicacion;                      // Instancia de PublicacionWeb
    protected $grafica;                          // Instancia de GraficaLineasWeb
    protected $preparado   = FALSE;              // Bandera
    const     GRAFICA_ID   = 'GraficaIndicador'; // Identificador único para la gráfica

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionWeb
     */
    public function __construct(PublicacionWeb $publicacion) {
        $this->publicacion = $publicacion;
    } // constructor

    /**
     * Preparar
     */
    private function preparar() {
        if (!$this->preparado) {
            if (count($this->publicacion->datos()) >= 2) {

            }
            $this->preparado = TRUE;
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        return NULL;
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return NULL;
    } // javascript

} // Clase SeccionGraficasWeb

?>
