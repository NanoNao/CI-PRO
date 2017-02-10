<?php

/* Controler de la gestion des LOGIN */

Class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();

        // Load form validation library
        $this->load->library('form_validation'); /// LOADL A LIB DE GESTION DES FORM

        // Load session library
        $this->load->library('session');        /// LOAD LA LIB SESSION
        $this->load->view('header');            ///AJOUT DU HEADER
        // Load database
        $this->load->model('login_database'); /// Connect a la database
    }

    // Show login page
    public function index() {
        $this->register();                    /// ENVOIE VERS REGISTER()
    }

    // Show registration page
    public function register() {
        $this->load->view('login/auth');   /// ENVOIE VERS LA VUE POUR CE CONNECTER
    }

    // Validate and store registration data in database
    public function new_user_registration() { // VERIFICATION EN CAS DE NOUVEAU LOGIN

        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_form');
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
            );
            $result = $this->login_database->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';  /// SI LE NOM EST LIBRE
                $this->load->view('login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';         /// SI IL NE LEST PAS
                $this->load->view('registration_form', $data);
            }
        }
    }

    // Check for user login process
    public function user_login_process() {                // FUNCTION DE GESTION DU LOGIN

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                redirect('back');

            }else{
                $this->load->view('login/connect');                       // SI PAS CONNECTER ENVIE VERS CONNECT
            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_database->login($data);
            if ($result == TRUE) {

                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    redirect('back');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login/connect', $data);
            }
        }
    }


    public function logout() {  // FUNCTION POUR LA DECO

        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login/connect', $data);
    }

}

?>
