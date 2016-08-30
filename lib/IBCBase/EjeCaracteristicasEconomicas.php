<?php
/**
 * TrcIMPLAN IBCBase - EjeCaracteristicasEconomicas
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
 * Clase EjeCaracteristicasEconomicas
 */
class EjeCaracteristicasEconomicas implements SalidaWeb {

    protected $publicacion_ficha;          // Instancia de PublicacionFicha, para accesar al metodo Datos en cada uno
    protected $caracteristicas_economicas; // Arreglo asociativo con datos de Carcaterísticas Económicas
    protected $graf_pob_eco_act;
    protected $graf_pob_eco_act_mas_fem;
    protected $graf_pob_ocu;
    protected $graf_pob_ocu_mas_fem;
    protected $graf_derechohabiencia;
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
        if (isset($datos['Características Económicas'])) {
            $this->caracteristicas_economicas = $datos['Características Económicas'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Características Económicas.");
        }
        // Grafica Población Económicamente Activa
        $this->graf_pob_eco_act = new GraficaPay();
        $this->graf_pob_eco_act->definir_titulo('Población Económicamente Activa');
        $this->graf_pob_eco_act->agregar('Activa',          $this->caracteristicas_economicas['Población Económicamente Activa'], '#7E00A8');
        $this->graf_pob_eco_act->agregar('NO Activa', 100 - $this->caracteristicas_economicas['Población Económicamente Activa'], '#BFBFBF');
        // Grafica Población Económicamente Activa por género
        $this->graf_pob_eco_act_mas_fem = new GraficaPay();
        $this->graf_pob_eco_act_mas_fem->definir_titulo('Población Económicamente Activa por género');
        $this->graf_pob_eco_act_mas_fem->agregar('Masculina', $this->caracteristicas_economicas['Población Económicamente Activa masculina'], '#006AC8');
        $this->graf_pob_eco_act_mas_fem->agregar('Femenina',  $this->caracteristicas_economicas['Población Económicamente Activa femenina'],  '#C80083');
        // Grafica
        $this->graf_pob_ocu = new GraficaPay();
        $this->graf_pob_ocu->definir_titulo('Población Ocupada');
        $this->graf_pob_ocu->agregar('Ocupada',    $this->caracteristicas_economicas['Población Ocupada'],    '#A8001E');
        $this->graf_pob_ocu->agregar('Desocupada', $this->caracteristicas_economicas['Población Desocupada'], '#BFBFBF');
        // Grafica
        $this->graf_pob_ocu_mas_fem = new GraficaPay();
        $this->graf_pob_ocu_mas_fem->definir_titulo('Población Ocupada por género');
        $this->graf_pob_ocu_mas_fem->agregar('Masculina', $this->caracteristicas_economicas['Población Ocupada masculina'], '#006AC8');
        $this->graf_pob_ocu_mas_fem->agregar('Femenina',  $this->caracteristicas_economicas['Población Ocupada femenina'],  '#C80083');
        // Grafica
        $this->graf_derechohabiencia = new GraficaPay();
        $this->graf_derechohabiencia->definir_titulo('Derechohabiencia');
        $this->graf_derechohabiencia->agregar('Con Derechohabiencia',       $this->caracteristicas_economicas['Derechohabiencia'], '#00A898');
        $this->graf_derechohabiencia->agregar('SIN Derechohabiencia', 100 - $this->caracteristicas_economicas['Derechohabiencia'], '#BFBFBF');
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
        $a[] = $this->graf_pob_eco_act->html();
        $a[] = $this->graf_pob_eco_act_mas_fem->html();
        $a[] = $this->graf_pob_ocu->html();
        $a[] = $this->graf_pob_ocu_mas_fem->html();
        $a[] = $this->graf_derechohabiencia->html();
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
        $a[] = $this->graf_pob_eco_act->javascript();
        $a[] = $this->graf_pob_eco_act_mas_fem->javascript();
        $a[] = $this->graf_pob_ocu->javascript();
        $a[] = $this->graf_pob_ocu_mas_fem->javascript();
        $a[] = $this->graf_derechohabiencia->javascript();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeCaracteristicasEconomicas

?>
