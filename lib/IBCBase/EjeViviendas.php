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

    protected $publicacion_ficha; // Instancia de PublicacionFicha, para accesar al metodo Datos en cada uno
    protected $viviendas;         // Arreglo asociativo con datos de Viviendas
    protected $graf_hog_jef;
    protected $graf_viv_con;
    protected $graficas_preparadas = false;
    protected $tabla_viv_jef;
    protected $tabla_viv_ser;
    protected $acordion;

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
        if (isset($datos['Viviendas'])) {
            $this->viviendas = $datos['Viviendas'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Viviendas.");
        }
        // Gráfica Hogares Jefatura
        $this->graf_hog_jef = new GraficaPay();
        $this->graf_hog_jef->definir_titulo('Hogares con jefatura...');
        $this->graf_hog_jef->agregar('Masculina', $this->viviendas['Hogares Jefatura masculina'], '#006AC8');
        $this->graf_hog_jef->agregar('Femenina',  $this->viviendas['Hogares Jefatura femenina'],  '#C80083');
        // Gráfica Viviendas con...
        $this->graf_viv_con = new GraficaBarras();
        $this->graf_viv_con->definir_titulo('Viviendas con...');
        $this->graf_viv_con->agregar('Electricidad', $this->viviendas['Viviendas con Electricidad'], '#FF8080');
        $this->graf_viv_con->agregar('Agua',         $this->viviendas['Viviendas con Agua'],         '#FF80C0');
        $this->graf_viv_con->agregar('Drenaje',      $this->viviendas['Viviendas con Drenaje'],      '#C080FF');
        $this->graf_viv_con->agregar('Televisión',   $this->viviendas['Viviendas con Televisión'],   '#80C0FF');
        $this->graf_viv_con->agregar('Automóvil',    $this->viviendas['Viviendas con Automóvil'],    '#59BFC3');
        $this->graf_viv_con->agregar('Computadora',  $this->viviendas['Viviendas con Computadora'],  '#59C38E');
        $this->graf_viv_con->agregar('Celular',      $this->viviendas['Viviendas con Celular'],      '#8EC359');
        $this->graf_viv_con->agregar('Internet',     $this->viviendas['Viviendas con Internet'],     '#C38E59');
        $this->graf_viv_con->definir_eje_horizontal('Porcentaje', 0, 100);
        $this->graf_viv_con->definir_post_nota(' %');
        // Acordion
        $this->acordion = new AcordionesWeb('AcordionViviendas');
        $this->acordion->agregar('Hogares con Jefatura', $this->graf_hog_jef);
        $this->acordion->agregar('Servicios',            $this->graf_viv_con);
        // Levantar bandera
        $this->graficas_preparadas = true;
    } // preparar_graficas

    /**
     * Preparar tablas
     */
    protected function preparar_tablas() {
        // Tomar datos
        $datos = $this->publicacion_ficha->datos();
        if (isset($datos['Viviendas'])) {
            $this->viviendas = $datos['Viviendas'];
        } else {
            throw new \Exception("Error: Faltan datos sobre Viviendas.");
        }
        // Tabla Vivendas Jefatura
        $this->tabla_viv_jef = new TablaWeb();
        $this->tabla_viv_jef->definir_estructura(
            array(
                'nombre'     => array('enca' => 'Hogares con'),
                'porcentaje' => array('enca' => 'Porcentaje')
            )
        );
        $this->tabla_viv_jef->definir_panal(
            array(
                array('nombre' => 'Jefatura masculina', 'porcentaje' => $this->viviendas['Hogares Jefatura masculina']),
                array('nombre' => 'Jefatura femenina',  'porcentaje' => $this->viviendas['Hogares Jefatura femenina'])
            )
        );
        // Tabla Vivendas Servicios
        $this->tabla_viv_ser = new TablaWeb();
        $this->tabla_viv_ser->definir_estructura(
            array(
                'nombre'     => array('enca' => 'Servicio'),
                'porcentaje' => array('enca' => 'Porcentaje')
            )
        );
        $this->tabla_viv_ser->definir_panal(
            array(
                array('nombre' => 'Viviendas con Electricidad', 'porcentaje' => $this->viviendas['Viviendas con Electricidad']),
                array('nombre' => 'Viviendas con Agua',         'porcentaje' => $this->viviendas['Viviendas con Agua']),
                array('nombre' => 'Viviendas con Drenaje',      'porcentaje' => $this->viviendas['Viviendas con Drenaje']),
                array('nombre' => 'Viviendas con Televisión',   'porcentaje' => $this->viviendas['Viviendas con Televisión']),
                array('nombre' => 'Viviendas con Automóvil',    'porcentaje' => $this->viviendas['Viviendas con Automóvil']),
                array('nombre' => 'Viviendas con Computadora',  'porcentaje' => $this->viviendas['Viviendas con Computadora']),
                array('nombre' => 'Viviendas con Celular',      'porcentaje' => $this->viviendas['Viviendas con Celular']),
                array('nombre' => 'Viviendas con Internet',     'porcentaje' => $this->viviendas['Viviendas con Internet']),
            )
        );
        //
    } // preparar_tablas

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->preparar_graficas();
    //~ $this->preparar_tablas();
        // Acordion
        //~ $acordion->agregar('Hogares con Jefatura...', $this->tabla_viv_jef);
        //~ $acordion->agregar('Servicios',               $this->tabla_viv_ser);
        // Acumular
        //~ $a   = array();
        //~ $a[] = $this->acordion->html();
        //~ $a[] = $this->graf_hog_jef->html();
        //~ $a[] = $this->graf_viv_con->html();
        //~ $a[] = "<p class=\"enunciado\">Ocupación por Vivienda <b>{$this->viviendas['Ocupación por Vivienda']} personas</b>.</p>";
        //~ return '    '.implode("\n    ", $a);
        // Entregar
        return $this->acordion->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->preparar_graficas();
    //~ $this->preparar_tablas();
        // Acumular
        //~ $a   = array();
        //~ $a[] = $this->graf_hog_jef->javascript();
        //~ $a[] = $this->graf_viv_con->javascript();
        //~ return '    '.implode("\n    ", $a);
        // Entregar
        return $this->acordion->javascript();
    } // javascript

} // Clase EjeViviendas

?>
