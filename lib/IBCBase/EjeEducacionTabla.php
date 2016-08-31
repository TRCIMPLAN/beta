<?php
/**
 * TrcIMPLAN IBCBase - EjeEducacionTabla
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
 * Clase EjeEducacionTabla
 */
class EjeEducacionTabla extends EjeEducacion implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $educacion;
    // protected $preparado;

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::preparado();
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
    } // javascript

} // Clase EjeEducacionTabla

?>
