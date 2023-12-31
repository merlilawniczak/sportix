<?php
declare(strict_types=1);

/**
 * Verifica si el campo de usuario esta vacio.
 *
 * @param string $username Nombre de usuario.
 * @return bool Retorna true si el campo esta vacio, de lo contrario retorna false.
 */

function is_username_empty($username) 
{
    if (empty($username)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el campo de contraseña esta vacio.
 *
 * @param string $password Contraseña.
 * @return bool Retorna true si el campo esta vacio, de lo contrario retorna false.
 */

function is_password_empty($password)
{
    if (empty($password)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el campo de confirmacion de contraseña esta vacio.
 *
 * @param string $cpassword Confirmación de contraseña.
 * @return bool Retorna true si el campo esta vacio, de lo contrario retorna false.
 */

function is_confpassword_empty($cpassword)
{
    if (empty($cpassword)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el campo de email esta vacio.
 *
 * @param string $email Correo electrónico.
 * @return bool Retorna true si el campo esta vacio, de lo contrario retorna false.
 */

function is_email_empty($email)
{
    if (empty($email)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el correo electrónico es inválido.
 *
 * @param string $email Correo electrónico.
 * @return bool Retorna true si el correo electrónico es inválido, de lo contrario retorna false.
 */
function is_email_invalid($email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el nombre de usuario ya está en uso.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $username Nombre de usuario.
 * @return bool Retorna true si el nombre de usuario ya está en uso, de lo contrario retorna false.
 */
function is_username_taken(mysqli $mysqli, string $username) 
{
    if (get_username($mysqli, $username)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el correo electrónico ya está registrado.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $email Correo electrónico.
 * @return bool Retorna true si el correo electrónico ya está registrado, de lo contrario retorna false.
 */
function is_email_registered(mysqli $mysqli, string $email)
{
    if (get_email($mysqli, $email)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Crea un nuevo usuario.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $username Nombre de usuario.
 * @param string $password Contraseña.
 * @param string $email Correo electrónico.
 */
function create_user(mysqli $mysqli, string $username, string $password, string $email)
{
    set_user($mysqli, $username, $password, $email);
}

/**
 * Envía un correo electrónico de confirmación.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $email Correo electrónico.
 * @param string $username Nombre de usuario.
 */
function send_email(mysqli $mysqli, string $email, string $username)
{
    send_email_confirmation($mysqli, $email, $username);
}
?>