<?php
/**
 * TrcIMPLAN IBCBase - EjeCaracteristicasEconomicasTablaWeb
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
 * Clase EjeCaracteristicasEconomicasTablaWeb
 */
class EjeCaracteristicasEconomicasTablaWeb extends EjeCaracteristicasEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $caracteristicas_economicas;
    // protected $preparado;
    protected $tabla;

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::prepapar();
            $this->tabla = new TablaWeb('TablaCaracteristicasEconomicas');
            $this->tabla->definir_estructura(
                array(
                    'indicador' => array('enca' => 'Indicador'),
                    'valor'     => array('enca' => 'Valor')
                )
            );
            $this->tabla->definir_panal(
                array(
                    array('indicador' => 'Población Económicamente Activa',           'valor' => $this->caracteristicas_economicas['Población Económicamente Activa']),
                    array('indicador' => 'Población Económicamente Activa masculina', 'valor' => $this->caracteristicas_economicas['Población Económicamente Activa masculina']),
                    array('indicador' => 'Población Económicamente Activa femenina',  'valor' => $this->caracteristicas_economicas['Población Económicamente Activa femenina']),
                    array('indicador' => 'Población Ocupada',                         'valor' => $this->caracteristicas_economicas['Población Ocupada']),
                    array('indicador' => 'Población Ocupada masculina',               'valor' => $this->caracteristicas_economicas['Población Ocupada masculina']),
                    array('indicador' => 'Población Ocupada femenina',                'valor' => $this->caracteristicas_economicas['Población Ocupada femenina']),
                    array('indicador' => 'Población Desocupada',                      'valor' => $this->caracteristicas_economicas['Población Desocupada']),
                    array('indicador' => 'Derechohabiencia',                          'valor' => $this->caracteristicas_economicas['Derechohabiencia'])
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

} // Clase EjeCaracteristicasEconomicasTablaWeb

?>
