<?php
namespace Managads\Admin\Lists;

class Ads extends \WP_List_Table
{
    public $example_data = array(
        array('ID' => 1,'name' => 'Quarter Share', 'type' => 'Nathan Lowell',
              'isbn' => '978-0982514542'),
        array('ID' => 2, 'name' => '7th Son: Descent','type' => 'J. C. Hutchins',
              'isbn' => '0312384378'),
        array('ID' => 3, 'name' => 'Shadowmagic', 'type' => 'John Lenahan',
              'isbn' => '978-1905548927'),
        array('ID' => 4, 'name' => 'The Crown Conspiracy', 'type' => 'Michael J. Sullivan',
              'isbn' => '978-0979621130'),
        array('ID' => 5, 'name'     => 'Max Quick: The Pocket and the Pendant', 'type'    => 'Mark Jeffrey',
              'isbn' => '978-0061988929'),
        array('ID' => 6, 'name' => 'Jack Wakes Up: A Novel', 'type' => 'Seth Harwood',
              'isbn' => '978-0307454355')
      );

    public function get_columns()
    {
        return apply_filters('managads_columns', array(
            'id' => 'ID',
            'name' => __('Name', 'managads'),
            'type' => __('Type', 'managads'),
            'code' => __('Ads Code', 'managads'),
            'description' => __('Description', 'managads'),
        ));
    }

    function get_sortable_columns()
    {
        $sortable_columns = array(
          'name'  => array('name',false),
          'type' => array('type',false),
        );
        return $sortable_columns;
    }

    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, $hidden, $sortable);
    }

    function no_items()
    {
        _e('No ads found, dude.', 'managads');
    }
}
