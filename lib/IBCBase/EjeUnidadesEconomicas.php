<?php
/**
 * TrcIMPLAN IBCBase - EjeUnidadesEconomicas
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
 * Clase EjeUnidadesEconomicas
 */
class EjeUnidadesEconomicas implements SalidaWeb {

    protected $publicacion_ficha;   // Instancia de PublicacionFicha, para accesar al metodo Datos en cada uno
    protected $unidades_economicas; // Arreglo asociativo con datos de Unidades Económicas
    protected $graf_uni_eco;
    protected $graficas_preparadas = false;

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionFicha
     */
    public function __construct(PublicacionFicha $publicacion_ficha) {
        $this->publicacion_ficha = $publicacion_ficha;
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
        if (isset($datos['Unidades Económicas'])) {
            $this->unidades_economicas = $datos['Unidades Económicas'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Unidades Económicas.");
        }
        // Grafica Unidades Economicas
        $this->graf_uni_eco = new GraficaBarras();
        $this->graf_uni_eco->definir_titulo('Unidades Económicas');
        $this->graf_uni_eco->agregar('1° '.$this->unidades_economicas['Primer actividad nombre'],  $this->unidades_economicas['Primer actividad porcentaje'],  '#80C0FF');
        $this->graf_uni_eco->agregar('2° '.$this->unidades_economicas['Segunda actividad nombre'], $this->unidades_economicas['Segunda actividad porcentaje'], '#59BFC3');
        $this->graf_uni_eco->agregar('3° '.$this->unidades_economicas['Tercera actividad nombre'], $this->unidades_economicas['Tercera actividad porcentaje'], '#59C38E');
        $this->graf_uni_eco->agregar('4° '.$this->unidades_economicas['Cuarta actividad nombre'],  $this->unidades_economicas['Cuarta actividad porcentaje'],  '#8EC359');
        $this->graf_uni_eco->agregar('5° '.$this->unidades_economicas['Quinta actividad nombre'],  $this->unidades_economicas['Quinta actividad porcentaje'],  '#C38E59');
        $this->graf_uni_eco->definir_eje_horizontal('Porcentaje', 0);
        $this->graf_uni_eco->definir_post_nota(' %');
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
        $a[] = $this->graf_uni_eco->html();
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
        $a[] = $this->graf_uni_eco->javascript();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeUnidadesEconomicas

?>
