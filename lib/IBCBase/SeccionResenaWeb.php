<?php
/**
 * TrcIMPLAN IBCBase - SeccionResenaWeb
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase SeccionResenaWeb
 */
class SeccionResenaWeb implements SalidaWeb {

    protected $publicacion_ficha;            // Instancia de PublicacionWeb
    protected $resena_html;                  // Código HTML
    protected $preparado         = FALSE;    // Bandera
    const     IDENTIFICADOR      = 'Resena'; // ID único en la página web

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
            if ($this->publicacion_ficha->resena() == '') {
                $this->resena_html = '';
            } else {
                $this->resena_html = \Michelf\MarkdownExtra::defaultTransform($this->publicacion_ficha->resena());
            }
            $this->preparado   = TRUE;
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        return $this->resena_html;
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase SeccionResenaWeb

?>
