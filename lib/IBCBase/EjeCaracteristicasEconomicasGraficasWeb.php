<?php
/**
 * TrcIMPLAN IBCBase - EjeCaracteristicasEconomicasGraficasWeb
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
 * Clase EjeCaracteristicasEconomicasGraficasWeb
 */
class EjeCaracteristicasEconomicasGraficasWeb extends EjeCaracteristicasEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $caracteristicas_economicas;
    // protected $preparado;
    protected $graf_pob_eco_act;
    protected $graf_pob_eco_act_mas_fem;
    protected $graf_pob_ocu;
    protected $graf_pob_ocu_mas_fem;
    protected $graf_derechohabiencia;
    const     ID_GRAF_POB_ECO_ACT         = 'GraficaPobEcoAct';
    const     ID_GRAF_POB_ECO_ACT_MAS_FEM = 'GraficaPobEcoActMasFem';
    const     ID_GRAF_OCU                 = 'GraficaOcu';
    const     ID_GRAF_OCU_MAS_FEM         = 'GraficaOcuMasFem';
    const     ID_GRAF_DERECHOHABIENCIA    = 'GraficaDerechohabiencia';

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            parent::prepapar();
            // Grafica Población Económicamente Activa
            $this->graf_pob_eco_act = new GraficaPayWeb(self::ID_GRAF_POB_ECO_ACT);
            $this->graf_pob_eco_act->definir_titulo('Población Económicamente Activa');
            $this->graf_pob_eco_act->agregar('Activa',          $this->caracteristicas_economicas['Población Económicamente Activa'], '#7E00A8');
            $this->graf_pob_eco_act->agregar('NO Activa', 100 - $this->caracteristicas_economicas['Población Económicamente Activa'], '#BFBFBF');
            // Grafica Población Económicamente Activa por género
            $this->graf_pob_eco_act_mas_fem = new GraficaPayWeb(self::ID_GRAF_POB_ECO_ACT_MAS_FEM);
            $this->graf_pob_eco_act_mas_fem->definir_titulo('Población Económicamente Activa por género');
            $this->graf_pob_eco_act_mas_fem->agregar('Masculina', $this->caracteristicas_economicas['Población Económicamente Activa masculina'], '#006AC8');
            $this->graf_pob_eco_act_mas_fem->agregar('Femenina',  $this->caracteristicas_economicas['Población Económicamente Activa femenina'],  '#C80083');
            // Grafica Población Ocupada
            $this->graf_pob_ocu = new GraficaPayWeb(self::ID_GRAF_OCU);
            $this->graf_pob_ocu->definir_titulo('Población Ocupada');
            $this->graf_pob_ocu->agregar('Ocupada',    $this->caracteristicas_economicas['Población Ocupada'],    '#A8001E');
            $this->graf_pob_ocu->agregar('Desocupada', $this->caracteristicas_economicas['Población Desocupada'], '#BFBFBF');
            // Grafica Población Ocupada por género
            $this->graf_pob_ocu_mas_fem = new GraficaPayWeb(self::ID_GRAF_OCU_MAS_FEM);
            $this->graf_pob_ocu_mas_fem->definir_titulo('Población Ocupada por género');
            $this->graf_pob_ocu_mas_fem->agregar('Masculina', $this->caracteristicas_economicas['Población Ocupada masculina'], '#006AC8');
            $this->graf_pob_ocu_mas_fem->agregar('Femenina',  $this->caracteristicas_economicas['Población Ocupada femenina'],  '#C80083');
            // Grafica Derechohabiencia
            $this->graf_derechohabiencia = new GraficaPayWeb(self::ID_GRAF_DERECHOHABIENCIA);
            $this->graf_derechohabiencia->definir_titulo('Derechohabiencia');
            $this->graf_derechohabiencia->agregar('Con Derechohabiencia',       $this->caracteristicas_economicas['Derechohabiencia'], '#00A898');
            $this->graf_derechohabiencia->agregar('SIN Derechohabiencia', 100 - $this->caracteristicas_economicas['Derechohabiencia'], '#BFBFBF');
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        // Acumular
        $a   = array();
        $a[] = $this->graf_pob_eco_act->html();
        $a[] = $this->graf_pob_eco_act_mas_fem->html();
        $a[] = $this->graf_pob_ocu->html();
        $a[] = $this->graf_pob_ocu_mas_fem->html();
        $a[] = $this->graf_derechohabiencia->html();
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        // Acumular
        $a   = array();
        $a[] = $this->graf_pob_eco_act->javascript();
        $a[] = $this->graf_pob_eco_act_mas_fem->javascript();
        $a[] = $this->graf_pob_ocu->javascript();
        $a[] = $this->graf_pob_ocu_mas_fem->javascript();
        $a[] = $this->graf_derechohabiencia->javascript();
        // Entregar
        return implode("\n", $a);
    } // javascript

} // Clase EjeCaracteristicasEconomicasGraficasWeb

?>
