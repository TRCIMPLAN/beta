<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadIndiceDeDesarrolloHumanoIdh
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadIndiceDeDesarrolloHumanoIdh
 */
class SociedadIndiceDeDesarrolloHumanoIdh extends \SMIBaseNUEVO\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Índice de Desarrollo Humano (IDH) en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-indice-de-desarrollo-humano-idh';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).';
        $this->claves      = 'IMPLAN, Matamoros, Bienestar';
        // Para el Organizador
        $this->categorias  = array('Bienestar');
        $this->fuentes     = array('INAFED-PNUD');
        $this->regiones    = array('Matamoros');
    } // constructor

    /**
     * Estructura
     *
     * @return array Arreglo asociativo
     */
    public function estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // estructura

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            array('fecha' => '2000-12-31', 'valor' => '0.7856', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'),
            array('fecha' => '2005-12-31', 'valor' => '0.8121', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'Descargar [base de datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'),
            array('fecha' => '2010-12-31', 'valor' => '0.8404', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'));
    } // datos

    /**
     * Otras regiones
     *
     * @return array Arreglo asociativo
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2010-12-31', 'valor' => '0.8976', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '0.8681', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '0.8661', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '0.8404', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2010-12-31', 'valor' => '0.8680', 'fuente_nombre' => 'INAFED-PNUD', 'notas' => 'El dato es un promedio de los cuatro municipios que integran la Zona Metropolitana de la Laguna. Se publica únicamente como referencia. Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2010-12-31', 'valor' => '0.7760', 'fuente_nombre' => 'INAFED-PNUD'),
            array('region_nombre' => 'Durango', 'fecha' => '2010-12-31', 'valor' => '0.7320', 'fuente_nombre' => 'INAFED-PNUD'),
            array('region_nombre' => 'Nacional', 'fecha' => '2010-12-31', 'valor' => '0.7500', 'fuente_nombre' => 'INAFED-PNUD'));
    } // otras_regiones

} // Clase SociedadIndiceDeDesarrolloHumanoIdh

?>
