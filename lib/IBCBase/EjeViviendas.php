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
    protected $graf_hog_jef;
    protected $graf_viv_con;
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
        $this->graf_hog_jef = new GraficaPay('HogaresJefatura', 'Hogares con jefatura...');
        $this->graf_hog_jef->agregar('Masculina', $this->viviendas['Hogares Jefatura masculina'], '#006AC8');
        $this->graf_hog_jef->agregar('Femenina',  $this->viviendas['Hogares Jefatura femenina'],  '#C80083');
        // Gráfica Viviendas con...
        $this->graf_viv_con = new GraficaBarras('ViviendasCon', 'Viviendas con...');
        $this->graf_viv_con->agregar('Electricidad', $this->viviendas['Viviendas con Electricidad'], '#FF8080');
        $this->graf_viv_con->agregar('Agua',         $this->viviendas['Viviendas con Agua'],         '#FF80C0');
        $this->graf_viv_con->agregar('Drenaje',      $this->viviendas['Viviendas con Drenaje'],      '#C080FF');
        $this->graf_viv_con->agregar('Televisión',   $this->viviendas['Viviendas con Televisión'],   '#80C0FF');
        $this->graf_viv_con->agregar('Automóvil',    $this->viviendas['Viviendas con Automóvil'],    '#59BFC3');
        $this->graf_viv_con->agregar('Computadora',  $this->viviendas['Viviendas con Computadora'],  '#59C38E');
        $this->graf_viv_con->agregar('Celular',      $this->viviendas['Viviendas con Celular'],      '#8EC359');
        $this->graf_viv_con->agregar('Internet',     $this->viviendas['Viviendas con Internet'],     '#C38E59');
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
        $a[] = '  <div class="col-md-12 col-lg-6">';
        $a[] = $this->graf_hog_jef->html();
        $a[] = '  </div>';
        $a[] = '  <div class="col-md-12 col-lg-6">';
        $a[] = $this->graf_viv_con->html();
        $a[] = '  </div>';
        $a[] = '</div>';
        $a[] = "<p class=\"enunciado\">Ocupación por Vivienda <b>{$this->viviendas['Ocupación por Vivienda']} personas</b>.</p>";
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
        $a[] = $this->graf_hog_jef->javascript();
        $a[] = $this->graf_viv_con->javascript();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeViviendas

?>
