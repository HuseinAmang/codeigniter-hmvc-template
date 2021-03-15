<?php

class Migrate extends CI_Controller
{

    public function __construct($config = array())
    {
        parent::__construct($config);
        $this->load->library('migration');
    }

    /**
     * |--------------------------------------------------------------------------
     * | Function for Drop and Migrate Table
     * | Drop url       : migrate/migration
     * | Migrate url    : migrate/migration/:version
     * |--------------------------------------------------------------------------
     */ 
    public function migration($version = NULL)
    {
        $outcome = $this->migration->version($version);

        if (is_string($outcome)) {
            $this->data['status'] = 'Succeeded!';
            $this->data['message'] = "Migration to version $outcome succeeded.";
            $this->load->view('migration_message', $this->data);
        } elseif ($outcome === TRUE) {
            $this->data['status'] = 'Error!';
            $this->data['message'] = "No migration was possible. Target version is the same as current version.";
            $this->load->view('migration_message', $this->data);
        } else {
            $this->data['status'] = 'Error!';
            $this->data['message'] = $this->migration->error_string();
            $this->load->view('migration_message', $this->data);
        }
    }

    /**
     * |--------------------------------------------------------------------------
     * | Function for Migrate Table to the Latest Version
     * | url : migrate/latest
     * |--------------------------------------------------------------------------
     */
    public function latest()
    {
        $outcome = $this->migration->latest();

        if ($outcome === FALSE) {
            $this->data['status'] = 'Error!';
            $this->data['message'] = $this->migration->error_string();
            $this->load->view('migration_message', $this->data);
        } else {
            $this->data['status'] = 'Succeeded!';
            $this->data['message'] = "Migration to version $outcome succeeded.";
            $this->load->view('migration_message', $this->data);
        }
    }
}
