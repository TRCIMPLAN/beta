<?php
/**
 * TrcIMPLAN IBCBase - AcordionesWeb
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
 * Clase AcordionesWeb
 */
class AcordionesWeb implements SalidaWeb {

    protected $identificador;           // Texto único que lo identifica
    protected $elementos     = array(); // Arreglo con instancias de AcordeonWeb

    /**
     * Constructor
     *
     * @param string Opcional, texto único que lo identifica
     */
    public function __construct($identificador = NULL) {
        $this->identificador = $identificador;
    } // constructor

    /**
     * Agregar
     *
     * @param string Texto que va a aparecer en la barra del acordion
     * @param mixed  Instancia con el contenido, debe implementar SalidaWeb
     */
    public function agregar($titulo, $contenido) {
        $this->elementos[] = new AcordionWeb($this->identificador, $titulo, $contenido);
    } // agregar

    /**
     * Validar
     */
    protected function validar() {
        if ($this->identificador == NULL) {
            throw new \Exception("Error en AcordionesWeb: Falta el identificador.");
        }
        if (!is_array($this->elementos) || (count($this->elementos) == 0)) {
            throw new \Exception("Error en AcordionesWeb: No tiene elementos.");
        }
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->validar();
        // Acumular
        $a   = array();
        $a[] = "<div class=\"panel-group\" id=\"{$this->identificador}\" role=\"tablist\" aria-multiselectable=\"true\">";
        foreach ($this->elementos as $elemento) {
            $a[] = $elemento->html();
        }
        $a[] = "</div>"; // panel-group
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        $this->validar();
        // Acumular
        $a = array();
        foreach ($this->elementos as $elemento) {
            $a[] = $elemento->javascript();
        }
        // Entregar
        return implode("\n", $a);
    } // javascript

} // Clase AcordionesWeb

?>
