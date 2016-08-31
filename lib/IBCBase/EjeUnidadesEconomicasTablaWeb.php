<?php
/**
 * TrcIMPLAN IBCBase - EjeUnidadesEconomicasTablaWeb
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
 * Clase EjeUnidadesEconomicasTablaWeb
 */
class EjeUnidadesEconomicasTablaWeb extends EjeUnidadesEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $unidades_economicas;
    // protected $preparado;
    protected $tabla;

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::prepapar();
            $this->tabla = new TablaWeb('TablaUnidadesEconomicas');
            $this->tabla->definir_estructura(
                array(
                    'indicador' => array('enca' => 'Actividad Económica'),
                    'valor'     => array('enca' => 'Porcentaje')
                )
            );
            $this->tabla->definir_panal(
                array(
                    array('indicador' => '1° '.$this->unidades_economicas['Primer actividad nombre'], 'valor' => $this->unidades_economicas['Primer actividad porcentaje']),
                    array('indicador' => '2° '.$this->unidades_economicas['Segunda actividad nombre'], 'valor' => $this->unidades_economicas['Segunda actividad porcentaje']),
                    array('indicador' => '3° '.$this->unidades_economicas['Tercera actividad nombre'], 'valor' => $this->unidades_economicas['Tercera actividad porcentaje']),
                    array('indicador' => '4° '.$this->unidades_economicas['Cuarta actividad nombre'], 'valor' => $this->unidades_economicas['Cuarta actividad porcentaje']),
                    array('indicador' => '5° '.$this->unidades_economicas['Quinta actividad nombre'], 'valor' => $this->unidades_economicas['Quinta actividad porcentaje'])
                )
            );
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        return $this->tabla->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        return $this->tabla->javascript();
    } // javascript

} // Clase EjeUnidadesEconomicasTablaWeb

?>
