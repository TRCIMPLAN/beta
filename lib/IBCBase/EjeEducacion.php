<?php
/**
 * TrcIMPLAN IBCBase - EjeEducacion
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
 * Clase EjeEducacion
 */
class EjeEducacion implements SalidaWeb {

    protected $publicacion_ficha;
    protected $educacion;
    protected $graf_prom_esc;
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
        if (isset($datos['Educación'])) {
            $this->educacion = $datos['Educación'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Educación.");
        }
        // Gráfica Grado Promedio de Escolaridad
        $this->graf_prom_esc = new GraficaBarras();
        $this->graf_prom_esc->definir_titulo('Grado Promedio de Escolaridad');
        $this->graf_prom_esc->agregar('Global', $this->educacion['Grado Promedio de Escolaridad'], '');
        $this->graf_prom_esc->agregar('Masculina', $this->educacion['Grado Promedio de Escolaridad masculina'], '#006AC8');
        $this->graf_prom_esc->agregar('Femenina', $this->educacion['Grado Promedio de Escolaridad femenina'], '#C80083');
        $this->graf_prom_esc->definir_eje_horizontal('Años', 0, 24);
        $this->graf_prom_esc->definir_post_nota(' años');;
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
        $a[] = $this->graf_prom_esc->html();
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
        $a[] = $this->graf_prom_esc->javascript();
        // Entregar
        return '    '.implode("\n    ", $a);
    } // javascript

} // Clase EjeEducacion

?>
