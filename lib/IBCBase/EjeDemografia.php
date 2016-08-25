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
    protected $grafica_poblacion_masculina_femenina;
    protected $grafica_poblacion_rangos;
    protected $grafica_poblacion_nacida_otro_estado;
    protected $grafica_poblacion_discapacidad;
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
        $this->grafica_poblacion_masculina_femenina = new GraficaPay('PoblacionMasculinaFemenina');
        $this->grafica_poblacion_masculina_femenina->agregar('Masculina', $this->demografia['Porcentaje de población masculina'], '#006AC8');
        $this->grafica_poblacion_masculina_femenina->agregar('Femenina', $this->demografia['Porcentaje de población femenina'], '#C80083');
        // Gráfica Población Rangos
        $this->grafica_poblacion_rangos = new GraficaPay('PoblacionRangos');
        $this->grafica_poblacion_rangos->agregar('De 0 a 14 años', $this->demografia['Porcentaje de población de 0 a 14 años'], '#89BE85');
        $this->grafica_poblacion_rangos->agregar('De 15 a 64 años', $this->demografia['Porcentaje de población de 15 a 64 años'], '#57A550');
        $this->grafica_poblacion_rangos->agregar('De 65 y más años', $this->demografia['Porcentaje de población de 65 y más años'], '#15630E');
        $this->grafica_poblacion_rangos->agregar('No especificada', $this->demografia['Porcentaje de población no especificada'], '#BFBFBF');
        // Gráfica Población Nacida en Otro Estado
        $this->grafica_poblacion_nacida_otro_estado = new GraficaPay('PoblacionNacidaEnOtroEstado');
        $this->grafica_poblacion_nacida_otro_estado->agregar('Nacida en OTRO estado', $this->demografia['Porcentaje de población nacida en otro estado'], '#7E00A8');
        $this->grafica_poblacion_nacida_otro_estado->agregar('Nacida en este estado', 100 - $this->demografia['Porcentaje de población nacida en otro estado'], '#BFBFBF');
        $this->grafica_poblacion_nacida_otro_estado->resaltar_primer_valor();
        // Gráfica Población con Discapacidad
        $this->grafica_poblacion_discapacidad = new GraficaPay('GraficaPoblacionDiscapacidad');
        $this->grafica_poblacion_discapacidad->agregar('CON discapacidad', $this->demografia['Porcentaje de población con discapacidad'], '#A80021');
        $this->grafica_poblacion_discapacidad->agregar('Sin discapacidad', 100 - $this->demografia['Porcentaje de población con discapacidad'], '#BFBFBF');
        $this->grafica_poblacion_discapacidad->resaltar_primer_valor();
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
        $a[] = '<div class="row">';
        $a[] = '  <div class="col-xs-12 col-sm-6 col-lg-3">';
        $a[] = $this->grafica_poblacion_masculina_femenina->html();
        $a[] = '  </div>';
        $a[] = '  <div class="col-xs-12 col-sm-6 col-lg-3">';
        $a[] = $this->grafica_poblacion_rangos->html();
        $a[] = '  </div>';
        $a[] = '  <div class="col-xs-12 col-sm-6 col-lg-3">';
        $a[] = $this->grafica_poblacion_nacida_otro_estado->html();
        $a[] = '  </div>';
        $a[] = '  <div class="col-xs-12 col-sm-6 col-lg-3">';
        $a[] = $this->grafica_poblacion_discapacidad->html();
        $a[] = '  </div>';
        $a[] = '</div>';
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
        $a[] = $this->grafica_poblacion_masculina_femenina->javascript();
        $a[] = $this->grafica_poblacion_rangos->javascript();
        $a[] = $this->grafica_poblacion_nacida_otro_estado->javascript();
        $a[] = $this->grafica_poblacion_discapacidad->javascript();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeDemografia

?>
