<?php

/** ******************************************************************************* *
  *                    !ATENCION!                                                   *
  *                                                                                 *
  * Este codigo es generado automaticamente. Si lo modificas tus cambios seran      *
  * reemplazados la proxima vez que se autogenere el codigo.                        *
  *                                                                                 *
  * ******************************************************************************* */

/**
 * Value Object file for table Assignments.
 *
 * VO does not have any behaviour.
 * @access public
 */
class Assignments extends VO {
    /**
     * Constructor de Assignments
     *
     * Para construir un objeto de tipo Assignments debera llamarse a el constructor
     * sin parametros. Es posible, construir un objeto pasando como parametro un arreglo asociativo
     * cuyos campos son iguales a las variables que constituyen a este objeto.
     */
    function __construct(?array $data = null) {
        if (is_null($data)) {
            return;
        }
        if (isset($data['assignment_id'])) {
            $this->assignment_id = (int)$data['assignment_id'];
        }
        if (isset($data['course_id'])) {
            $this->course_id = (int)$data['course_id'];
        }
        if (isset($data['problemset_id'])) {
            $this->problemset_id = (int)$data['problemset_id'];
        }
        if (isset($data['acl_id'])) {
            $this->acl_id = (int)$data['acl_id'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['alias'])) {
            $this->alias = $data['alias'];
        }
        if (isset($data['publish_time_delay'])) {
            $this->publish_time_delay = (int)$data['publish_time_delay'];
        }
        if (isset($data['assignment_type'])) {
            $this->assignment_type = $data['assignment_type'];
        }
        if (isset($data['start_time'])) {
            $this->start_time = $data['start_time'];
        }
        if (isset($data['finish_time'])) {
            $this->finish_time = $data['finish_time'];
        }
        if (isset($data['max_points'])) {
            $this->max_points = (float)$data['max_points'];
        }
        if (isset($data['order'])) {
            $this->order = (int)$data['order'];
        }
    }

    /**
     * Converts date fields to timestamps
     */
    public function toUnixTime(iterable $fields = []) : void {
        if (empty($fields)) {
            parent::toUnixTime(['start_time', 'finish_time']);
            return;
        }
        parent::toUnixTime($fields);
    }

    /**
      *  [Campo no documentado]
      * Llave Primaria
      * Auto Incremento
      * @access public
      * @var int
     */
    public $assignment_id;

    /**
      *  [Campo no documentado]
      * @access public
      * @var int
     */
    public $course_id;

    /**
      *  [Campo no documentado]
      * @access public
      * @var int
     */
    public $problemset_id;

    /**
      * La lista de control de acceso compartida con el curso
      * @access public
      * @var int
     */
    public $acl_id;

    /**
      *  [Campo no documentado]
      * @access public
      * @var string
     */
    public $name;

    /**
      *  [Campo no documentado]
      * @access public
      * @var string
     */
    public $description;

    /**
      *  [Campo no documentado]
      * @access public
      * @var string
     */
    public $alias;

    /**
      *  [Campo no documentado]
      * @access public
      * @var ?int
     */
    public $publish_time_delay;

    /**
      *  [Campo no documentado]
      * @access public
      * @var string
     */
    public $assignment_type;

    /**
      *  [Campo no documentado]
      * @access public
      * @var string
     */
    public $start_time = '2000-01-01 06:00:00';

    /**
      *  [Campo no documentado]
      * @access public
      * @var string
     */
    public $finish_time = '2000-01-01 06:00:00';

    /**
      * La cantidad total de puntos que se pueden obtener.
      * @access public
      * @var float
     */
    public $max_points = 0.00;

    /**
      * Define el orden de aparición de los problemas/tareas
      * @access public
      * @var int
     */
    public $order = 1;
}
