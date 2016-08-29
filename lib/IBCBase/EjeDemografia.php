<?php
/**
 * TrcIMPLAN IBCBase - EjeDemografia
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
 * Clase EjeDemografia
 */
class EjeDemografia implements SalidaWeb {

    protected $publicacion_ficha;
    protected $demografia;
    protected $graf_pob_mas_fem;
    protected $graf_pob_rang;
    protected $graf_pob_nac_otro_edo;
    protected $graf_pob_disc;
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
        if (isset($datos['Demografía'])) {
            $this->demografia = $datos['Demografía'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Demografía.");
        }
        // Gráfica Población Masculina Femenina
        $this->graf_pob_mas_fem = new GraficaPay();
        $this->graf_pob_mas_fem->definir_titulo('Población por género');
        $this->graf_pob_mas_fem->agregar('Masculina', $this->demografia['Porcentaje de población masculina'], '#006AC8');
        $this->graf_pob_mas_fem->agregar('Femenina',  $this->demografia['Porcentaje de población femenina'],  '#C80083');
        // Gráfica Población Rangos
        $this->graf_pob_rang = new GraficaPay();
        $this->graf_pob_rang->definir_titulo('Población por rangos de edad');
        $this->graf_pob_rang->agregar('De 0 a 14 años',   $this->demografia['Porcentaje de población de 0 a 14 años'],   '#89BE85');
        $this->graf_pob_rang->agregar('De 15 a 64 años',  $this->demografia['Porcentaje de población de 15 a 64 años'],  '#57A550');
        $this->graf_pob_rang->agregar('De 65 y más años', $this->demografia['Porcentaje de población de 65 y más años'], '#15630E');
        $this->graf_pob_rang->agregar('No especificada',  $this->demografia['Porcentaje de población no especificada'],  '#BFBFBF');
        // Gráfica Población Nacida en Otro Estado
        $this->graf_pob_nac_otro_edo = new GraficaPay();
        $this->graf_pob_nac_otro_edo->definir_titulo('Nacida en otro estado');
        $this->graf_pob_nac_otro_edo->agregar('Nacida en OTRO estado',       $this->demografia['Porcentaje de población nacida en otro estado'], '#7E00A8');
        $this->graf_pob_nac_otro_edo->agregar('Nacida en este estado', 100 - $this->demografia['Porcentaje de población nacida en otro estado'], '#BFBFBF');
        // Gráfica Población con Discapacidad
        $this->graf_pob_disc = new GraficaPay();
        $this->graf_pob_disc->definir_titulo('Con discapacidad');
        $this->graf_pob_disc->agregar('CON discapacidad',       $this->demografia['Porcentaje de población con discapacidad'], '#A80021');
        $this->graf_pob_disc->agregar('Sin discapacidad', 100 - $this->demografia['Porcentaje de población con discapacidad'], '#BFBFBF');
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
        $a[] = "<p class=\"enunciado\">Población total <b>{$this->demografia['Población total']} habitantes.</b> Porcentajes de población...</p2>";
        $a[] = $this->graf_pob_mas_fem->html();
        $a[] = $this->graf_pob_rang->html();
        $a[] = $this->graf_pob_nac_otro_edo->html();
        $a[] = $this->graf_pob_disc->html();
        $a[] = "<p class=\"enunciado\">Fecundidad promedio <b>{$this->demografia['Fecundidad promedio']} hijos</b> por pareja.</p>";
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
        $a[] = $this->graf_pob_mas_fem->javascript();
        $a[] = $this->graf_pob_rang->javascript();
        $a[] = $this->graf_pob_nac_otro_edo->javascript();
        $a[] = $this->graf_pob_disc->javascript();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeDemografia

?>
