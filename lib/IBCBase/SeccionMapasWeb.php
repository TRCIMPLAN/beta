<?php
/**
 * TrcIMPLAN IBCBase - SeccionMapasWeb
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
 * Clase SeccionMapasWeb
 */
class SeccionMapasWeb implements SalidaWeb {

    protected $publicacion_ficha;    // Instancia de PublicacionWeb, para obtener los datos
    protected $acordeones;           // Instancia de AcordeonesWeb
    protected $preparado    = FALSE; // Bandera
    const     IDENTIFICADOR = 'Mapas';

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
            $this->preparado = TRUE;
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        return '';
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        $this->prepapar();
        return '';
    } // javascript

} // Clase SeccionMapasWeb

?>
