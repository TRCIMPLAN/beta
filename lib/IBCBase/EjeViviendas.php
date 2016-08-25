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
class EjeViviendas implements SalidaWeb {

    protected $publicacion_ficha;
    protected $viviendas;
    protected $grafica_hogares_jefatura;
    protected $graficas_preparadas = false;

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionFicha
     */
    public function __construct(PublicacionFicha $in_publicacion_ficha) {
        $this->publicacion_ficha = $in_publicacion_ficha;
    } // constructor

    /**
     * Preparar gráficas
     */
    protected function preparar_graficas() {
        // Si ya fueron preparadas
        if ($this->graficas_preparadas) {
            return;
        }
        // Tomar datos
        $datos = $this->publicacion_ficha->datos();
        if (isset($datos['Viviendas'])) {
            $this->viviendas = $datos['Viviendas'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Viviendas.");
        }
        // Gráfica Hogares Jefatura
        $this->grafica_hogares_jefatura = new GraficaPay('HogaresJefatura');
        $this->grafica_hogares_jefatura->agregar('Masculina', $this->viviendas['Hogares Jefatura masculina'], '#006AC8');
        $this->grafica_hogares_jefatura->agregar('Femenina', $this->viviendas['Hogares Jefatura femenina'], '#C80083');
        // Levantar bandera
        $this->graficas_preparadas = true;
    } // preparar_graficas

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->preparar_graficas();
        // Acumular
        $a   = array();
        $a[] = '<div class="row">';
        $a[] = '  <div class="col-xs-12 col-sm-6 col-lg-3">';
        $a[] = $this->grafica_hogares_jefatura->html();
        $a[] = '  </div>';
        $a[] = '</div>';
        // Entregar
        return '    '.implode("\n    ", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->preparar_graficas();
        // Acumular
        $a   = array();
        $a[] = $this->grafica_hogares_jefatura->javascript();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeViviendas

?>
