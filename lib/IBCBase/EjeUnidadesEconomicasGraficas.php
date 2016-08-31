<?php
/**
 * TrcIMPLAN IBCBase - EjeUnidadesEconomicasGraficas
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
 * Clase EjeUnidadesEconomicasGraficas
 */
class EjeUnidadesEconomicasGraficas extends EjeUnidadesEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $unidades_economicas;
    // protected $preparado;
    protected $graf_uni_eco;

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::preparado();
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
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        return $this->graf_uni_eco->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        return $this->graf_uni_eco->javascript();
    } // javascript

} // Clase EjeUnidadesEconomicasGraficas

?>
