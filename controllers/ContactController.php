<?php

class ContactController
{
    public function actionIndex()
    {
        $contacts = Contact::getContacts();
        require_once(ROOT . '/views/contact.php');
        return true;
    }

    public function actionAddContact()
    {
        $contactParam = explode(",", $_POST['contact']);
        $first_name = $contactParam[0];
        $last_name = $contactParam[1];
        $email = $contactParam[2];


        if (!Contact::checkName($first_name) || !Contact::checkName($last_name) || !Contact::checkEmail($email)) {
            return false;
        } else {
            Contact::addContact($first_name, $last_name, $email);
            require_once(ROOT . '/views/contact.php');
            return true;
        }
    }

    public function actionUpdateContact($id)
    {
        $contactParam = explode(",", $_POST['contact']);
        $first_name = $contactParam[0];
        $last_name = $contactParam[1];
        $email = $contactParam[2];

        if (!Contact::checkName($first_name) || !Contact::checkName($last_name) || !Contact::checkEmail($email)) {
            return false;
        } else {
            Contact::updateContactById($id, $first_name, $last_name, $email);
            require_once(ROOT . '/views/contact.php');
            return true;
        }
    }

    public function actionDeleteContact($id)
    {
        Contact::deleteContactById($id);
        require_once(ROOT . '/views/contact.php');
        return true;
    }
}
